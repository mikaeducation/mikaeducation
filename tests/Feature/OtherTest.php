<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Module;
use App\Models\ProgressTracking;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OtherTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_redirects()
    {
        $user = User::factory()->create([
            'phone' => '081234567890'
        ]);

        $response = $this->actingAs($user)->get('/');

        $response->assertRedirect('/registerprofile');
    }

    public function test_news_page_can_be_accessed()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
        $response->assertViewIs('news');
    }

    public function test_article_page_can_be_accessed()
    {
        $response = $this->get('/article');
        $response->assertStatus(200);
        $response->assertViewIs('article');
    }

    public function test_article_explore_page_can_be_accessed()
    {
        $response = $this->get('/articleexplore');
        $response->assertStatus(200);
        $response->assertViewIs('includes.content.main.article.articleexplore');
    }

    public function test_article_id_page_can_be_accessed()
    {
        $response = $this->get('/article1');
        $response->assertStatus(200);
        $response->assertViewIs('includes.content.main.article.article1');
    }

    public function test_about_us_page_can_be_accessed()
    {
        $response = $this->get('/aboutus');
        $response->assertStatus(200);
        $response->assertViewIs('about-us');
    }

    public function test_prelearn_page_can_be_accessed_and_shows_progress()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/preLearn');

        $response->assertStatus(200);
        $response->assertViewIs('learning.preLearn');
    }
}
