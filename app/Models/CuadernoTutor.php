<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Visita;

/**
 * Class CuadernoTutor
 *
 * @property $Id_cuaderno
 * @property $trimestre
 * @property $ciclo_formativo_curso_actual
 * @property $plan_formativo
 * @property $CIF_EMPRESA
 * @property $DNI_tutor_docente
 * @property $visitas_previstas
 * @property $created_at
 * @property $updated_at
 *
 * @property CuestionarioEmpresa[] $cuestionarioempresa
 * @property Empresa $empresa
 * @property EvaluaciónQuincenal[] $evaluaciónQuincenals
 * @property Tiene[] $tienes
 * @property TutorDocente $tutorDocente
 * @property ValoracionAlumno[] $valoracionAlumno
 * @property ValoracionFinalTutorDocente[] $valoracionFinalTutorDocente
 * @property ValoraciónFinalTutorLaboral[] $valoraciónFinalTutorLaboral
 * @property Visita[] $visita

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CuadernoTutor extends Model
{
    protected $table = 'cuaderno_tutor';

    protected $primaryKey = "Id_cuaderno";

    
    static $rules = [
		'trimestre' => 'required',
		'ciclo_formativo_curso_actual' => 'required',
		'CIF_EMPRESA' => 'required',
		'DNI_tutor_docente' => 'required',
        'visitas_previstas' => 'required',
        'plan_formativo' => 'required|mimes:pdf|max:2000',
        
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['trimestre','ciclo_formativo_curso_actual','plan_formativo','CIF_EMPRESA','DNI_tutor_docente', 'visitas_previstas'];


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
    public function tiene()
    {
        return $this->hasMany('App\Models\Tiene', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    public function get_tutorDocente_name_surname()
    {
        $name = $this->tutorDocente->Nombre ?? '';
        $surname = $this->tutorDocente->Apellido_1 ?? '';
        
        return $name . ' ' . $surname;
    }

    public function tutorDocente()
    {
        return $this->belongsTo('App\Models\TutorDocente', 'DNI_tutor_docente', 'DNI');
    }

    public function empresas()
    {
        return $this->belongsToMany('App\Models\Empresa', 'CIF_EMPRESA', 'CIF');
    }

    public function alumnos()
    {
        return $this->belongsToMany(
            'App\Models\Alumno',
            'tiene',
            'Id_cuaderno',
            'DNI_alumno',
        );
    }
    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoracionAlumno()
    {   
        return $this->hasMany('App\Models\ValoracionAlumno', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoracionFinaltutorDocente()
    {
        return $this->hasMany('App\Models\ValoracionFinalTutorDocente', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valoraciónFinaltutorLaboral()
    {
        return $this->hasMany('App\Models\ValoraciónFinalTutorLaboral', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visita()
    {
        return $this->hasMany(Visita::class, 'Id_cuaderno', 'Id_cuaderno');
    }
    

}