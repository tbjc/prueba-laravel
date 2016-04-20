<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample(){
        $user = App\User::find(1);
        $this->actingAs($user)->visit('/admin')->see('aaa');
    }

    public function testPruebaLogueo(){
    	$this->visit('/')
         ->type('Jose.tbjc@gmail.com', 'email')
         ->type('123456', 'password')
         ->press('Submit')
         ->seePageIs('/admin');
    }

    public function testPruebaLogueoFallido(){
    	$this->visit('/')
         ->type('qweqweqw', 'email')
         ->type('qqq', 'password')
         ->press('Submit')
         ->seePageIs('/');
    }
    public function testPruebaLogueoFalso(){
    	$user = factory(App\User::class)->make();
    	$this->visit('/')
         ->type($user->email, 'email')
         ->type($user->password, 'password')
         ->press('Submit')
         ->seePageIs('/admin');
    }
}
