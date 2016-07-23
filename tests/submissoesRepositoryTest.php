<?php

use App\Models\submissoes;
use App\Repositories\submissoesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class submissoesRepositoryTest extends TestCase
{
    use MakesubmissoesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var submissoesRepository
     */
    protected $submissoesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->submissoesRepo = App::make(submissoesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatesubmissoes()
    {
        $submissoes = $this->fakesubmissoesData();
        $createdsubmissoes = $this->submissoesRepo->create($submissoes);
        $createdsubmissoes = $createdsubmissoes->toArray();
        $this->assertArrayHasKey('id', $createdsubmissoes);
        $this->assertNotNull($createdsubmissoes['id'], 'Created submissoes must have id specified');
        $this->assertNotNull(submissoes::find($createdsubmissoes['id']), 'submissoes with given id must be in DB');
        $this->assertModelData($submissoes, $createdsubmissoes);
    }

    /**
     * @test read
     */
    public function testReadsubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $dbsubmissoes = $this->submissoesRepo->find($submissoes->id);
        $dbsubmissoes = $dbsubmissoes->toArray();
        $this->assertModelData($submissoes->toArray(), $dbsubmissoes);
    }

    /**
     * @test update
     */
    public function testUpdatesubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $fakesubmissoes = $this->fakesubmissoesData();
        $updatedsubmissoes = $this->submissoesRepo->update($fakesubmissoes, $submissoes->id);
        $this->assertModelData($fakesubmissoes, $updatedsubmissoes->toArray());
        $dbsubmissoes = $this->submissoesRepo->find($submissoes->id);
        $this->assertModelData($fakesubmissoes, $dbsubmissoes->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletesubmissoes()
    {
        $submissoes = $this->makesubmissoes();
        $resp = $this->submissoesRepo->delete($submissoes->id);
        $this->assertTrue($resp);
        $this->assertNull(submissoes::find($submissoes->id), 'submissoes should not exist in DB');
    }
}
