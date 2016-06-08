<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class postApiTest extends TestCase
{
    use MakepostTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepost()
    {
        $post = $this->fakepostData();
        $this->json('POST', '/api/v1/posts', $post);

        $this->assertApiResponse($post);
    }

    /**
     * @test
     */
    public function testReadpost()
    {
        $post = $this->makepost();
        $this->json('GET', '/api/v1/posts/'.$post->id);

        $this->assertApiResponse($post->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepost()
    {
        $post = $this->makepost();
        $editedpost = $this->fakepostData();

        $this->json('PUT', '/api/v1/posts/'.$post->id, $editedpost);

        $this->assertApiResponse($editedpost);
    }

    /**
     * @test
     */
    public function testDeletepost()
    {
        $post = $this->makepost();
        $this->json('DELETE', '/api/v1/posts/'.$post->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/posts/'.$post->id);

        $this->assertResponseStatus(404);
    }
}
