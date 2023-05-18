<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuadernoTutor
 *
 * @property $Id_cuaderno
 * @property $trimestre
 * @property $ciclo_formativo_curso_actual
 * @property $plan_formativo
 * @property $CIF_EMPRESA
 * @property $DNI_tutor_docente
 * @property $created_at
 * @property $updated_at
 *
 * @property CuestionarioEmpresa[] $cuestionarioempresa
 * @property Empresa $empresa
 * @property EvaluaciónQuincenal[] $evaluaciónQuincenals
 * @property Tiene[] $tienes
 * @property TutorDocente $tutorDocente
 * @property ValoracionAlumno[] $valoracionAlumnos
 * @property ValoracionFinalTutorDocente[] $valoracionFinalTutorDocentes
 * @property ValoraciónFinalTutorLaboral[] $valoraciónFinalTutorLaborals
 * @property Visitum[] $visitas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CuadernoTutor extends Model
{
    protected $table = 'cuaderno_tutor';

    protected $primaryKey = "Id_cuaderno";

    
    static $rules = [
        'Id_cuaderno' => 'required',
		'trimestre' => 'required',
		'ciclo_formativo_curso_actual' => 'required',
		'CIF_EMPRESA' => 'required',
		'DNI_tutor_docente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['trimestre','ciclo_formativo_curso_actual','plan_formativo','CIF_EMPRESA','DNI_tutor_docente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuestionarioempresa()
    {
        return $this->hasMany('App\Models\CuestionarioEmpresa', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'CIF', 'CIF_EMPRESA');
    }


    public function get_empresa_name()
    {
        return ($this->empresa->Nombre);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluaciónQuincenals()
    {
        return $this->hasMany('App\Models\EvaluaciónQuincenal', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tienes()
    {
        return $this->hasMany('App\Models\Tiene', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tutorDocente()
    {
        return $this->hasOne('App\Models\TutorDocente', 'DNI', 'DNI_tutor_docente');
    }

    public function get_tutorDocente_name_surname()
    {
        $name = $this->tutorDocente->Nombre ?? '';
        $surname = $this->tutorDocente->Apellido_1 ?? '';
    
        return $name . ' ' . $surname;
    }
    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoracionAlumnos()
    {   
        return $this->hasMany('App\Models\ValoracionAlumno', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoracionFinalTutorDocentes()
    {
        return $this->hasMany('App\Models\ValoracionFinalTutorDocente', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoraciónFinalTutorLaborals()
    {
        return $this->hasMany('App\Models\ValoraciónFinalTutorLaboral', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visitas()
    {
        return $this->hasMany('App\Models\Visitum', 'Id_cuaderno', 'Id_cuaderno');
    }
    

}