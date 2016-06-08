<?php

use App\Models\post;
use App\Repositories\postRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class postRepositoryTest extends TestCase
{
    use MakepostTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var postRepository
     */
    protected $postRepo;

    public function setUp()
    {
        parent::setUp();
        $this->postRepo = App::make(postRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepost()
    {
        $post = $this->fakepostData();
        $createdpost = $this->postRepo->create($post);
        $createdpost = $createdpost->toArray();
        $this->assertArrayHasKey('id', $createdpost);
        $this->assertNotNull($createdpost['id'], 'Created post must have id specified');
        $this->assertNotNull(post::find($createdpost['id']), 'post with given id must be in DB');
        $this->assertModelData($post, $createdpost);
    }

    /**
     * @test read
     */
    public function testReadpost()
    {
        $post = $this->makepost();
        $dbpost = $this->postRepo->find($post->id);
        $dbpost = $dbpost->toArray();
        $this->assertModelData($post->toArray(), $dbpost);
    }

    /**
     * @test update
     */
    public function testUpdatepost()
    {
        $post = $this->makepost();
        $fakepost = $this->fakepostData();
        $updatedpost = $this->postRepo->update($fakepost, $post->id);
        $this->assertModelData($fakepost, $updatedpost->toArray());
        $dbpost = $this->postRepo->find($post->id);
        $this->assertModelData($fakepost, $dbpost->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepost()
    {
        $post = $this->makepost();
        $resp = $this->postRepo->delete($post->id);
        $this->assertTrue($resp);
        $this->assertNull(post::find($post->id), 'post should not exist in DB');
    }
}
