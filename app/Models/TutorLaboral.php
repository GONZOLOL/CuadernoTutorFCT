<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TutorLaboral
 *
 * @property $DNI
 * @property $Nombre
 * @property $Apellidos
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
    protected $table = 'tutor_laboral';

    protected $primaryKey = "DNI";

    protected $keyType = 'string';

    static $rules = [
		'DNI' => 'required|max:9',
		'Nombre' => 'required',
		'Apellidos' => 'required',
		'id_centro' => 'required',
		'CIF_EMPRESA' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI','Nombre','Apellidos','id_centro','CIF_EMPRESA'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centroTrabajo()
    {
        return $this->hasOne('App\Models\CentroTrabajo', 'id', 'id_centro');
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
    public function supervisaAlumnos()
    {
        return $this->belongsToMany(
            'App\Models\Alumno',
            'supervisa',
            'DNI_TUTOR_LABORAL',
            'DNI_alumno',
        );
    }

}