<?php

namespace Tests\Feature;

use App\Models\Message;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_first_message_creates_new_record()
    {
        $user = User::factory()->create(['phone' => '08123456789']);
        $this->actingAs($user);

        $response = $this->postJson(route('message.store'), [
            'message' => 'Pesan pertama',
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                    'message' => 'Pesan berhasil dikirim!',
                 ]);

        $this->assertDatabaseHas('messages', [
            'phone' => $user->phone,
            'chat1' => 'Pesan pertama',
            'chat2' => null,
        ]);
    }

    public function test_store_second_message_updates_chat2()
    {
        $user = User::factory()->create(['phone' => '08123456789']);
        Message::create([
            'phone' => $user->phone,
            'chat1' => 'Pesan pertama',
        ]);
        $this->actingAs($user);

        $response = $this->postJson(route('message.store'), [
            'message' => 'Pesan kedua',
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                    'message' => 'Pesan berhasil dikirim!',
                 ]);

        $this->assertDatabaseHas('messages', [
            'phone' => $user->phone,
            'chat1' => 'Pesan pertama',
            'chat2' => 'Pesan kedua',
        ]);
    }

    public function test_store_third_message_returns_403()
    {
        $user = User::factory()->create(['phone' => '08123456789']);
        Message::create([
            'phone' => $user->phone,
            'chat1' => 'Pesan pertama',
            'chat2' => 'Pesan kedua',
        ]);
        $this->actingAs($user);

        $response = $this->postJson(route('message.store'), [
            'message' => 'Pesan ketiga',
        ]);

        $response->assertStatus(403)
                 ->assertJsonStructure(['error']);
    }

    public function test_store_validation_error_for_empty_message()
    {
        $user = User::factory()->create(['phone' => '08123456789']);
        $this->actingAs($user);

        $response = $this->postJson(route('message.store'), [
            'message' => '',
        ]);

        $response->assertStatus(422) // Validation error
                 ->assertJsonValidationErrors('message');
    }
}
