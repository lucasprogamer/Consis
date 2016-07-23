<?php

use Faker\Factory as Faker;
use App\Models\submissoes;
use App\Repositories\submissoesRepository;

trait MakesubmissoesTrait
{
    /**
     * Create fake instance of submissoes and save it in database
     *
     * @param array $submissoesFields
     * @return submissoes
     */
    public function makesubmissoes($submissoesFields = [])
    {
        /** @var submissoesRepository $submissoesRepo */
        $submissoesRepo = App::make(submissoesRepository::class);
        $theme = $this->fakesubmissoesData($submissoesFields);
        return $submissoesRepo->create($theme);
    }

    /**
     * Get fake instance of submissoes
     *
     * @param array $submissoesFields
     * @return submissoes
     */
    public function fakesubmissoes($submissoesFields = [])
    {
        return new submissoes($this->fakesubmissoesData($submissoesFields));
    }

    /**
     * Get fake data of submissoes
     *
     * @param array $postFields
     * @return array
     */
    public function fakesubmissoesData($submissoesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'Titulo' => $fake->text,
            'AtuaÃ§caÃo' => $fake->text,
            'Resumo' => $fake->text,
            'Artigo' => $fake->text,
            'url' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $submissoesFields);
    }
}
