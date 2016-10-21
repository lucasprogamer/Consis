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
 *          property="Titulo",
 *          description="Titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="atuacao",
 *          description="atuacao",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Resumo",
 *          description="Resumo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Artigo",
 *          description="Artigo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
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
        'Titulo',
        'atuacao',
        'Resumo',
        'Artigo',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Titulo' => 'string',
        'atuacao' => 'string',
        'Resumo' => 'string',
        'Artigo' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function authores()
    {
        return $this->hasMany('App\Models\authores');
    }
        public function user()
    {
        return $this->belongsTo('App\User');
    }


}
