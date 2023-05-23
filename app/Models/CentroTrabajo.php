<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CentroTrabajo
 *
 * @property $Denominacion
 * @property $Domicilio
 * @property $Poblacion
 * @property $Codigo_postal
 * @property $Provincia
 * @property $Distancia
 * @property $Preferencias_alumnado
 * @property $CIF_EMPRESA
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property TutorLaboral[] $tutorLaborals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CentroTrabajo extends Model
{

    protected $table = 'centro_trabajo';

    protected $primaryKey = "id";
                           
    static $rules = [
		'Denominacion' => 'required',
		'Domicilio' => 'required',
		'Poblacion' => 'required',
		'Codigo_postal' => 'required',
		'Provincia' => 'required',
		'Distancia' => 'required',
		'CIF_EMPRESA' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Denominacion','Domicilio','Poblacion','Codigo_postal','Provincia','Distancia','Preferencias_alumnado','CIF_EMPRESA'];


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
    public function tutorLaborals()
    {
        return $this->hasMany('App\Models\TutorLaboral', 'Denominacion_centro', 'Denominacion');
    }
    

}