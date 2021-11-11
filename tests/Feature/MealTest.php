<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Meal;

class MealTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {   
        $data = ['meal_name' => 'Rice', 'category_name'=>'Cereal'];
        $response = $this->post('/meal/create', $data);

        $response->assertStatus(200);
        $this->assertArrayHasKey('data',$response);
    }
}
