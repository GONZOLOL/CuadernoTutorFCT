<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CentroTrabajo;


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
 * @property CentroTrabajo[] $centroTrabajo
 * @property CuadernoTutor[] $cuadernoTutor
 * @property TutorLaboral[] $tutorLaboral
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    protected $table = 'empresa';

    protected $primaryKey = "CIF";

    protected $keyType = 'string';

    public $incrementing = false;

    
    static $rules = [
		'CIF' => 'required | max:10',
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
        return $this->hasMany(CentroTrabajo::class, 'CIF_EMPRESA', 'CIF');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuadernoTutor()
    {
        return $this->hasMany('App\Models\CuadernoTutor', 'CIF_EMPRESA', 'CIF');
    }

    public function cuadernos()
    {
        return $this->hasMany(Cuaderno::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tutorLaboral()
    {
        return $this->hasMany('App\Models\TutorLaboral', 'CIF_EMPRESA', 'CIF');
    }
    

}