<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->post('products', ['name'=>"Test Product", 'description'=>"Test Description"]);

        $response->assertStatus(200);
    }
}
