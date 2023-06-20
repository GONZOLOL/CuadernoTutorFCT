<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visita
 *
 * @property $Id_visita
 * @property $Fecha
 * @property $Incidencia
 * @property $Observaciones
 * @property $Id_cuaderno
 * @property $num_visita
 * @property $created_at
 * @property $updated_at
 *
 * @property CuadernoTutor $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visita extends Model
{
    protected $table = 'visita';

    protected $primaryKey = "Id_visita";

    static $rules = [
    'Id_cuaderno'=> 'required',
		'Fecha' => 'required',
		'Incidencia' => 'required',
    'num_visita' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_cuaderno', 'num_visita', 'Fecha','Incidencia','Observaciones'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
}