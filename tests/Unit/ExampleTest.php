<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Request;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    function test_basic_test()
    {
        $user = factory(User::class)->create([
            'name' => 'wea'
        ]);
        $session = $this->actingAs($user,'api');
        $response = $session->get('api/user');
        $response->assertSee('wea');
    }
}
