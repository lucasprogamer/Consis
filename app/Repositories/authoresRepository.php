<?php

namespace App\Repositories;

use App\Models\authores;
use InfyOm\Generator\Common\BaseRepository;

class authoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return authores::class;
    }
}
