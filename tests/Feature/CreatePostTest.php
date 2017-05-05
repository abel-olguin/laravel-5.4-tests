<?php
/**
 * Created by Vendetta.
 * User: abelolguinchavez
 * Date: 05/05/17
 * Time: 11:10
 * The best ;)
 */

namespace Tests\Feature;


use Tests\TestInit;

class CreatePostTest extends TestInit
{
    function test_a_user_create_post(){
        $user = $this->default_user();

        $this->actingAs($user);


        $this->get(route('posts.create'))
                ->type("wea 1","title")
                ->type("wea 2","content")
                ->press("save");

        $this->assertDatabaseHas('posts',
            [
                'title' => 'wea 1',
                'content' => 'wea 2',
                'pending' => true
            ]);

        $this->assertViewHas('wea 1');

    }

}