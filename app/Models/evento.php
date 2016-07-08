<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="evento",
 *      required={Titulo, Autor},
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
 *          property="local",
 *          description="local",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Autor",
 *          description="Autor",
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
class evento extends Model
{
    use SoftDeletes;

    public $table = 'eventos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'Titulo',
        'Descrição',
        'local',
        'Dia',
        'Imagem',
        'Autor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Titulo' => 'string',
        'local' => 'string',
        'Autor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Titulo' => 'required',
        'local' => 'required',
        'Dia' => 'Required',
        'Autor' => 'required',
        'Imagem' => 'required'
    ];
}
