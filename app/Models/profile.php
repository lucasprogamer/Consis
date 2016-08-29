<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="profile",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="telefone",
 *          description="telefone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cidade",
 *          description="cidade",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cep",
 *          description="cep",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="endereco",
 *          description="endereco",
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
class profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'telefone',
        'cidade',
        'cep',
        'endereco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'telefone' => 'string',
        'cidade' => 'string',
        'cep' => 'string',
        'endereco' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
