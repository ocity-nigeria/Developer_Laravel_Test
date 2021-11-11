<?php

namespace Tests\Feature;

use App\Models\Meal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MealTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_meal()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/meal', [
            'title' => 'rice',
            'body' => 'Write and publish'
        ]);
        $response->assertStatus(200);
        $this->assertTrue(count(Meal::all()) > 0);
    }
}
