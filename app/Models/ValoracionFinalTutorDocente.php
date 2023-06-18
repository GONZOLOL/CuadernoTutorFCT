<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoracionFinalTutorDocente
 *
 * @property $ID
 * @property $opcion_1
 * @property $opcion_2
 * @property $opcion_3
 * @property $opcion_4
 * @property $opcion_5
 * @property $opcion_6
 * @property $opción_7
 * @property $opción_8
 * @property $aspectos_destacables
 * @property $evaluación_final
 * @property $aspectos_mejorables
 * @property $Id_cuaderno
 * @property $created_at
 * @property $updated_at
 *
 * @property CuadernoTutor $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ValoracionFinalTutorDocente extends Model
{

  protected $table = 'valoracion_final_tutor_docente';

  protected $primaryKey = "ID";
    
    static $rules = [
		'opcion_1' => 'required',
		'opcion_2' => 'required',
		'opcion_3' => 'required',
		'opcion_4' => 'required',
		'opcion_5' => 'required',
		'opcion_6' => 'required',
		'opcion_7' => 'required',
		'opcion_8' => 'required',
		'evaluacion_final' => 'required',
		'Id_cuaderno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['opcion_1','opcion_2','opcion_3','opcion_4','opcion_5','opcion_6','opcion_7','opcion_8','aspectos_destacables','evaluacion_final','aspectos_mejorables','Id_cuaderno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
    

}