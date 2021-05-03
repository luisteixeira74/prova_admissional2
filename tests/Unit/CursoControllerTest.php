<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CursoControllerTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
    * @test
    */
    public function test_route_curso_ok()
    {
        $response = $this->get('/curso');
        $response->assertStatus(200);
    }
}
