<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $DNI
 * @property $Apellidos
 * @property $Nombre
 * @property $Domicilio
 * @property $Población
 * @property $Codigo_postal
 * @property $Provincia
 * @property $Fecha_nacimiento
 * @property $Edad
 * @property $Teléfono
 * @property $Email
 * @property $Género
 * @property $Nombre_padre
 * @property $Observaciones
 * @property $Tipo_empresa_FCT
 * @property $Solicita_beca
 * @property $Cuenta_bancaria
 * @property $created_at
 * @property $updated_at
 *
 * @property Supervisa $supervisa
 * @property Tiene $tiene
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    public $table = "alumno";

    protected $primaryKey = "DNI";
    
    protected $keyType = 'string';
    
    static $rules = [
		'DNI' => 'required',
		'Apellidos' => 'required',
		'Nombre' => 'required',
		'Domicilio' => 'required',
		'Población' => 'required',
		'Codigo_postal' => 'required',
		'Provincia' => 'required',
		'Fecha_nacimiento' => 'required',
		'Edad' => 'required',
		'Teléfono' => 'required',
		'Email' => 'required',
		'Género' => 'required',
		'Nombre_padre' => 'required',
		'Solicita_beca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI','Apellidos','Nombre','Domicilio','Población','Codigo_postal','Provincia','Fecha_nacimiento','Edad','Teléfono','Email','Género','Nombre_padre','Observaciones','Tipo_empresa_FCT','Solicita_beca','Cuenta_bancaria'];


    public function cuadernosTutores()
    {
        return $this->belongsToMany(
            'App\Models\CuadernoTutor',
            'tiene',
            'DNI_alumno',
            'Id_cuaderno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supervisa()
    {
        return $this->hasOne('App\Models\Supervisa', 'DNI_alumno', 'DNI');
    }
        public function cuadernos()
    {
        return $this->hasMany(CuadernoTutor::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiene()
    {
        return $this->hasOne('App\Models\Tiene', 'DNI_alumno', 'DNI');
    }
    

}