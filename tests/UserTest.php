<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginAsAdmin()
    {
    	$this->visit('/');
    	$this->click('Login');
    	$this->type('admin@admin.com', 'email');
    	$this->type('1234', 'password')->press('Login');
    	$this->seePageIs('dashboard');
        $this->assertTrue(true);
    }
}
