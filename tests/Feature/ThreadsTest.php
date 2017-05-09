<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadsTest extends TestCase
{

    use DatabaseMigrations; 

    /**
     * @test
     * @return [type] [description]
     */
    public function a_user_can_view_all_threads()
    {
        $thread = factory(\App\Thread::class)->create(); 

        $response = $this->get('/threads');

        $response->assertSee($thread->title);

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);
    }



    /**
     * @test
     * @return [type] [description]
     */
    public function a_user_can_read_a_single_thread()
    {
        $thread = factory(\App\Thread::class)->create(); 

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);
    }


}