<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->create([
            'name' => 'wea'
        ]);
        $session = $this->actingAs($user,'api');
        $response = $session->get('api/user');
        $response->assertSee('wea');
    }
}
