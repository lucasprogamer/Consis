<?php

namespace App\Repositories;

use App\Models\submissoes;
use InfyOm\Generator\Common\BaseRepository;

class submissoesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Titulo',
        'atuacao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return submissoes::class;
    }
}
