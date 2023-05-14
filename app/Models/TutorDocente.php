<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TutorDocente
 *
 * @property $DNI
 * @property $Apellido_1
 * @property $Apellido_2
 * @property $Nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property CuadernoTutor[] $cuadernoTutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TutorDocente extends Model
{

  protected $table = 'tutor_docente';

  protected $primaryKey = "DNI";

  protected $keyType = 'string';
    
    static $rules = [
		'DNI' => 'required',
		'Apellido_1' => 'required',
		'Apellido_2' => 'required',
		'Nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI','Apellido_1','Apellido_2','Nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuadernoTutor()
    {
        return $this->hasMany('App\Models\CuadernoTutor', 'DNI_tutor_docente', 'DNI');
    }
    

}