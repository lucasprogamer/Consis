<?php

namespace App\Repositories;

use App\Models\evento;
use InfyOm\Generator\Common\BaseRepository;

class eventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Titulo',
        'local',
        'Autor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return evento::class;
    }
}
