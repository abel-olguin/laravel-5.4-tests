<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends \Tests\Unit\ExampleTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function test_basic_test()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
