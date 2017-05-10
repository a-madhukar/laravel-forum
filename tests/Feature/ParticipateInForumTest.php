<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForumTest extends TestCase
{

	use DatabaseMigrations;

    
    /**
     * @test
     * @return [type] [description]
     */
    function an_authenticated_user_may_participate_in_forum_threads()
    {
    	$this->be($user = factory('App\User')->create()); 

    	$thread = factory('App\Thread')->create(); 

    	$reply = factory('App\Reply')->create();

    	$this->post('threads/'.$thread->id.'/replies', $reply->toArray()); 
    	// then their reply should be visible on the page

    	$this->get($thread->path())
    	->assertSee($reply->body); 

    }

}
