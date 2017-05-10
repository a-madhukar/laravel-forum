<?php

namespace Tests\Unit;

use App\Thread; 
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{


	use DatabaseMigrations; 
    

	/**
	 * @test
	 * @return [type] [description]
	 */
	function a_thread_has_replies()
	{	
		$thread = factory(Thread::class)->create();

		$this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);  
	}




	/**
	 * @test
	 * @return [type] [description]
	 */
	function a_thread_has_an_owner()
	{
		$thread = factory(Thread::class)->create();

		$this->assertInstanceOf('App\User', $thread->creator); 
	}

}
