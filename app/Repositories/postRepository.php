<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'autor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}
