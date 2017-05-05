<?php
/**
 * Created by Vendetta.
 * User: abelolguinchavez
 * Date: 05/05/17
 * Time: 10:07
 * The best ;)
 */

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestInit extends TestCase
{
    use DatabaseTransactions;
    public $user;
    function default_user(){
        if($this->user){
            return $this->user;
        }
        return $this->user = factory(User::class)->create();
    }
}