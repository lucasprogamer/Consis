<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class submissoesApiTest extends TestCase
{
    use MakesubmissoesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatesubmissoes()
    {
        $submissoes = $this->fakesubmissoesData();
        $this->json('POST', '/api/v1/submissoes', $submissoes);

        $this->assertApiResponse($submissoes);
    }

    /**
     * @test
     */
    public function testReadsubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $this->json('GET', '/api/v1/submissoes/'.$submissoes->id);

        $this->assertApiResponse($submissoes->toArray());
    }

    /**
     * @test
     */
    public function testUpdatesubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $editedsubmissoes = $this->fakesubmissoesData();

        $this->json('PUT', '/api/v1/submissoes/'.$submissoes->id, $editedsubmissoes);

        $this->assertApiResponse($editedsubmissoes);
    }

    /**
     * @test
     */
    public function testDeletesubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $this->json('DELETE', '/api/v1/submissoes/'.$submissoes->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/submissoes/'.$submissoes->id);

        $this->assertResponseStatus(404);
    }
}
