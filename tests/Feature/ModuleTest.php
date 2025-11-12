<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\User;
use App\Models\Module;
use App\Models\ModuleReview;
use App\Models\ModuleSubject;
use App\Models\SubmoduleSubject;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_learn_page_can_be_rendered_and_displays_modules()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/learn');

        $response->assertStatus(200);
        $response->assertViewIs('learning.home');
    }

    public function test_index_without_search_returns_all_modules()
    {
        Module::factory()->count(3)->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/learn');  // Sesuai route index

        $response->assertStatus(200);
        $response->assertViewHasAll(['modules', 'categories', 'query']);
        $this->assertNull($response->viewData('query'));
        $this->assertCount(3, $response->viewData('modules'));
    }

    public function test_index_with_search_filters_modules()
    {
        Module::factory()->create(['module_title' => 'Belajar Laravel']);
        Module::factory()->create(['module_title' => 'Pemrograman PHP']);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/learn?search=Laravel');

        $response->assertStatus(200);
        $this->assertEquals('Laravel', $response->viewData('query'));
        $modules = $response->viewData('modules');
        $this->assertCount(1, $modules);
        $this->assertStringContainsString('Laravel', $modules->first()->module_title);
    }

    // public function test_show_modules_valid_id_shows_module()
    // {
    //     // Buat user dan login (jika perlu autentikasi)
    //     $user = User::factory()->create();
    //     $this->actingAs($user);

    //     // Buat module utama dengan factory
    //     $module = Module::factory()->create([
    //         'module_level' => 2,
    //         'module_type' => true,
    //         'module_status' => true,
    //         'module_certificate' => 'images/sample-sertificate.png',
    //         'module_publish_date' => '2024-11-12',
    //     ]);

    //     // Buat module subject terkait dengan module di atas
    //     $subject = ModuleSubject::factory()->create([
    //         'module_id' => $module->module_id,
    //         // pastikan subject_type valid sesuai factory atau seeder kamu
    //         'subject_type' => 'submodul2',
    //     ]);

    //     // Buat submodule subject terkait dengan module subject
    //     $submodule = SubmoduleSubject::factory()->create([
    //         'subject_id' => $subject->subject_id,
    //         'subject_type' => $subject->subject_type,
    //     ]);

    //     // Panggil route show module dengan id yang sudah pasti ada
    //     $response = $this->get(route('modules.show', ['id' => $module->module_id]));
        

    //     // Assert response sukses dan view sesuai
    //     $response->assertStatus(200);
    //     $response->assertViewIs('learning.modules');
    //     $response->assertViewHas('module');

    //     $viewModule = $response->viewData('module');

    //     // Assert property hasil transformasi di controller sesuai
    //     $this->assertEquals('Dasar-Menengah', $viewModule->level_text);
    //     $this->assertEquals('Berulang/Tanpa Batas', $viewModule->type_text);
    //     $this->assertEquals('Tersedia', $viewModule->status_text);
    //     $this->assertEquals('Sertifikat Kelulusan', $viewModule->certificate_text);
    //     $this->assertEquals('12 November 2024', $viewModule->module_publish_date_formatted);
    // }


    public function test_modules_detail_route_can_be_accessed()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/modules/999');

        $response->assertStatus(404);
    }

    
    public function test_showModules_invalid_id_returns_404()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/modules/999999');
        $response->assertStatus(404);
    }

    public function test_store_validation_fails()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $payload = [
            'rating' => '', // kosong
            'review' => 'Test review',
            'module_id' => 1,
        ];

        $response = $this->post('/submit-review', $payload);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('rating');
    }
}
