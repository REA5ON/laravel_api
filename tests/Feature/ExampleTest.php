<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Filament\Resources\PostResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_admin_login_page_return_a_successful_response(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    public function test_can_render_page()
    {
        $this->get(PostResource::getUrl('index'))->assertSuccessful();
    }



}
