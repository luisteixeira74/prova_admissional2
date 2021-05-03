<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MatriculaControllerTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
    * @test
    */
    public function test_route_matricula_ok()
    {
        $response = $this->get('/matricula');
        $response->assertStatus(200);
    }
}
