<?php

use App\Models\evento;
use App\Repositories\eventoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class eventoRepositoryTest extends TestCase
{
    use MakeeventoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var eventoRepository
     */
    protected $eventoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->eventoRepo = App::make(eventoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateevento()
    {
        $evento = $this->fakeeventoData();
        $createdevento = $this->eventoRepo->create($evento);
        $createdevento = $createdevento->toArray();
        $this->assertArrayHasKey('id', $createdevento);
        $this->assertNotNull($createdevento['id'], 'Created evento must have id specified');
        $this->assertNotNull(evento::find($createdevento['id']), 'evento with given id must be in DB');
        $this->assertModelData($evento, $createdevento);
    }

    /**
     * @test read
     */
    public function testReadevento()
    {
        $evento = $this->makeevento();
        $dbevento = $this->eventoRepo->find($evento->id);
        $dbevento = $dbevento->toArray();
        $this->assertModelData($evento->toArray(), $dbevento);
    }

    /**
     * @test update
     */
    public function testUpdateevento()
    {
        $evento = $this->makeevento();
        $fakeevento = $this->fakeeventoData();
        $updatedevento = $this->eventoRepo->update($fakeevento, $evento->id);
        $this->assertModelData($fakeevento, $updatedevento->toArray());
        $dbevento = $this->eventoRepo->find($evento->id);
        $this->assertModelData($fakeevento, $dbevento->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteevento()
    {
        $evento = $this->makeevento();
        $resp = $this->eventoRepo->delete($evento->id);
        $this->assertTrue($resp);
        $this->assertNull(evento::find($evento->id), 'evento should not exist in DB');
    }
}
