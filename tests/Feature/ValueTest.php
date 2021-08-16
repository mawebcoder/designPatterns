<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValueTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testValue()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
