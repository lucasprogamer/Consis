<?php

namespace App\Repositories;

use App\Models\profile;
use InfyOm\Generator\Common\BaseRepository;

class profileRepository extends BaseRepository
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
        return profile::class;
    }
}
