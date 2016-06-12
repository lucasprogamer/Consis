<?php

use Faker\Factory as Faker;
use App\Models\evento;
use App\Repositories\eventoRepository;

trait MakeeventoTrait
{
    /**
     * Create fake instance of evento and save it in database
     *
     * @param array $eventoFields
     * @return evento
     */
    public function makeevento($eventoFields = [])
    {
        /** @var eventoRepository $eventoRepo */
        $eventoRepo = App::make(eventoRepository::class);
        $theme = $this->fakeeventoData($eventoFields);
        return $eventoRepo->create($theme);
    }

    /**
     * Get fake instance of evento
     *
     * @param array $eventoFields
     * @return evento
     */
    public function fakeevento($eventoFields = [])
    {
        return new evento($this->fakeeventoData($eventoFields));
    }

    /**
     * Get fake data of evento
     *
     * @param array $postFields
     * @return array
     */
    public function fakeeventoData($eventoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'Titulo' => $fake->text,
            'Descrição' => $fake->word,
            'local' => $fake->text,
            'Dia' => $fake->word,
            'Imagem' => $fake->word,
            'Autor' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $eventoFields);
    }
}
