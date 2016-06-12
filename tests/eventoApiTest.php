<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class eventoApiTest extends TestCase
{
    use MakeeventoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateevento()
    {
        $evento = $this->fakeeventoData();
        $this->json('POST', '/api/v1/eventos', $evento);

        $this->assertApiResponse($evento);
    }

    /**
     * @test
     */
    public function testReadevento()
    {
        $evento = $this->makeevento();
        $this->json('GET', '/api/v1/eventos/'.$evento->id);

        $this->assertApiResponse($evento->toArray());
    }

    /**
     * @test
     */
    public function testUpdateevento()
    {
        $evento = $this->makeevento();
        $editedevento = $this->fakeeventoData();

        $this->json('PUT', '/api/v1/eventos/'.$evento->id, $editedevento);

        $this->assertApiResponse($editedevento);
    }

    /**
     * @test
     */
    public function testDeleteevento()
    {
        $evento = $this->makeevento();
        $this->json('DELETE', '/api/v1/eventos/'.$evento->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/eventos/'.$evento->id);

        $this->assertResponseStatus(404);
    }
}
