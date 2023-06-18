<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuestionarioEmpresa
 *
 * @property $ID
 * @property $opcion_1
 * @property $opcion_2
 * @property $opcion_3
 * @property $opcion_4
 * @property $opcion_5
 * @property $opcion_6
 * @property $sugerencias
 * @property $Id_cuaderno
 * @property $created_at
 * @property $updated_at
 *
 * @property CuadernoTutor $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CuestionarioEmpresa extends Model
{

  protected $table = 'cuestionario_empresa';

  protected $primaryKey = "ID";
    
    static $rules = [
		'opcion_1' => 'required',
		'opcion_2' => 'required',
		'opcion_3' => 'required',
		'opcion_4' => 'required',
		'opcion_5' => 'required',
		'opcion_6' => 'required',
		'Id_cuaderno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['opcion_1','opcion_2','opcion_3','opcion_4','opcion_5','opcion_6','sugerencias','Id_cuaderno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
    

}