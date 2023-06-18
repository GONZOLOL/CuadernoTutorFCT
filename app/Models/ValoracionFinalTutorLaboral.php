<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoracionFinalTutorLaboral
 *
 * @property $ID
 * @property $opcion_1
 * @property $opcion_2
 * @property $opcion_3
 * @property $opcion_4
 * @property $opcion_5
 * @property $opcion_6
 * @property $opcion_7
 * @property $opcion_5_detalle
 * @property $opcion_6_detalle
 * @property $opcion_7_detalle
 * @property $area_trabajo
 * @property $sugerencias_programa_formativo
 * @property $evaluacion_final
 * @property $Id_cuaderno
 * @property $created_at
 * @property $updated_at
 *
 * @property CuadernoTutor $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ValoracionFinalTutorLaboral extends Model
{
    
    protected $table = 'valoracion_final_tutor_laboral';

    protected $primaryKey = "ID";
  
    static $rules = [
		'opcion_1' => 'required',
		'opcion_2' => 'required',
		'opcion_3' => 'required',
		'opcion_4' => 'required',
		'evaluacion_final' => 'required',
		'Id_cuaderno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID','opcion_1','opcion_2','opcion_3','opcion_4','opcion_5','opcion_6','opcion_7','opcion_5_detalle','opcion_6_detalle','opcion_7_detalle','area_trabajo','sugerencias_programa_formativo','evaluacion_final','Id_cuaderno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
    

}