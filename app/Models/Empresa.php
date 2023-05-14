<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $CIF
 * @property $Nombre
 * @property $Domicilio_social
 * @property $Poblacion
 * @property $Codigo_postal
 * @property $Provincia
 * @property $Telefono
 * @property $Fax
 * @property $Movil
 * @property $Titularidad
 * @property $Actividad
 * @property $NIF_representante_legal
 * @property $Nombre_representante_legal
 * @property $Cargo_representante_legal
 * @property $Horario_apertura
 * @property $Horario_cierre
 * @property $Observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property CentroTrabajo[] $centroTrabajos
 * @property CuadernoTutor[] $cuadernoTutor
 * @property TutorLaboral[] $tutorLaborals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'CIF' => 'required',
		'Nombre' => 'required',
		'Domicilio_social' => 'required',
		'Poblacion' => 'required',
		'Codigo_postal' => 'required',
		'Provincia' => 'required',
		'Telefono' => 'required',
		'Titularidad' => 'required',
		'Actividad' => 'required',
		'NIF_representante_legal' => 'required',
		'Nombre_representante_legal' => 'required',
		'Cargo_representante_legal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CIF','Nombre','Domicilio_social','Poblacion','Codigo_postal','Provincia','Telefono','Fax','Movil','Titularidad','Actividad','NIF_representante_legal','Nombre_representante_legal','Cargo_representante_legal','Horario_apertura','Horario_cierre','Observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centroTrabajo()
    {
        return $this->hasMany('App\Models\CentroTrabajo', 'CIF_EMPRESA', 'CIF');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuadernoTutor()
    {
        return $this->hasMany('App\Models\CuadernoTutor', 'CIF_EMPRESA', 'CIF');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tutorLaboral()
    {
        return $this->hasMany('App\Models\TutorLaboral', 'CIF_EMPRESA', 'CIF');
    }
    

}