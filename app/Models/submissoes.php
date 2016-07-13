<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="submissoes",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="titulo",
 *          description="titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="atuacao",
 *          description="atuacao",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="resumo",
 *          description="resumo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="artigo",
 *          description="artigo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class submissoes extends Model
{
    use SoftDeletes;

    public $table = 'submissoes';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'atuacao',
        'resumo',
        'artigo',
        'url',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'atuacao' => 'string',
        'resumo' => 'string',
        'artigo' => 'string'
        'url' => 'string'
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
