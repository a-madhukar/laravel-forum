<?php

namespace Tests\Unit;

use App\User;
use App\Reply; 
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyTest extends TestCase
{
    
    use DatabaseMigrations; 

	/**
	 * @test
	 * @return [type] [description]
	 */
	function it_has_an_owner()
	{
		$reply = factory(Reply::class)->create();
		$this->assertInstanceOf(User::class, $reply->owner);  
	}

}
