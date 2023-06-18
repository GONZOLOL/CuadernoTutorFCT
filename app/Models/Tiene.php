<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiene
 *
 * @property $DNI_alumno
 * @property $Id_cuaderno
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property CuadernoTutor $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiene extends Model
{
    protected $table = 'tiene';

    static $rules = [
		'DNI_alumno' => 'required',
		'Id_cuaderno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI_alumno','Id_cuaderno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'DNI', 'DNI_alumno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
    

}