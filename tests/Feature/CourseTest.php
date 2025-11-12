<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Module;
use App\Models\ProgressTracking;
use App\Models\ProgressHistory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    public function test_course_screen_can_be_rendered_and_initializes_progress()
    {
        $module = Module::factory()->create(['module_id' => 1]);

        $response = $this->get('/course');

        $response->assertStatus(200);
        $response->assertViewIs('learning.course.page1');
        $response->assertViewHas(['progress', 'started', 'currentPart', 'module']);
    }

    public function test_start_course_redirects_to_course_if_new()
    {
        $module = Module::factory()->create([
            'module_id' => 1,
            'module_type' => 1, // berulang
        ]);

        $response = $this->post('/start-course', [
            'module_id' => $module->module_id,
        ]);

        $response->assertRedirect('/course');

        $this->assertDatabaseHas('progress_tracking', [
            'user_id' => $this->user->id,
            'module_id' => $module->module_id,
        ]);
    }

    public function test_start_course_redirects_to_last_path_if_in_progress()
    {
        $module = Module::factory()->create([
            'module_id' => 1,
            'module_type' => 1, // berulang
        ]);

        $progress = ProgressTracking::factory()->create([
            'user_id' => $this->user->id,
            'module_id' => $module->module_id,
            'is_completed' => false,
        ]);

        ProgressHistory::factory()->create([
            'progress_id' => $progress->progress_id,
            'user_id' => $this->user->id,
            'module_id' => $module->module_id,
            'page_path' => '/page3_0',
        ]);

        $response = $this->post('/start-course', [
            'module_id' => $module->module_id,
        ]);

        $response->assertRedirect('/page3_0');
    }

    public function test_save_progress_on_exit_records_progress()
    {
        $module = Module::factory()->create(['module_id' => 1]);

        $progress = ProgressTracking::factory()->create([
            'user_id' => $this->user->id,
            'module_id' => 1,
            'current_part' => 'modul-introduce',
        ]);

        session(['progress_id' => $progress->progress_id]);

        $response = $this->post('/save-progress-exit', [
            'current_path' => '/course',
        ]);

        $response->assertJson(['message' => 'Progress disimpan saat keluar']);
    }
}
