<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AlunoControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
    * @test
    */
    public function test_route_aluno_ok()
    {
        $response = $this->get('/aluno');
        $response->assertStatus(200);
    }
}
