<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TutorLaboral
 *
 * @property $DNI
 * @property $Nombre
 * @property $Apellidos
 * @property $Denominacion_centro
 * @property $CIF_EMPRESA
 * @property $created_at
 * @property $updated_at
 *
 * @property CentroTrabajo $centroTrabajo
 * @property Empresa $empresa
 * @property Supervisa[] $supervisas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TutorLaboral extends Model
{
    
    static $rules = [
		'DNI' => 'required',
		'Nombre' => 'required',
		'Apellidos' => 'required',
		'Denominacion_centro' => 'required',
		'CIF_EMPRESA' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI','Nombre','Apellidos','Denominacion_centro','CIF_EMPRESA'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centroTrabajo()
    {
        return $this->hasOne('App\Models\CentroTrabajo', 'Denominacion', 'Denominacion_centro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'CIF', 'CIF_EMPRESA');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supervisas()
    {
        return $this->hasMany('App\Models\Supervisa', 'DNI_TUTOR_LABORAL', 'DNI');
    }
    

}
