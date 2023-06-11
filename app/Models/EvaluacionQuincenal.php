<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EvaluacionQuincenal
 *
 * @property $ID
 * @property $Id_cuaderno
 * @property $created_at
 * @property $updated_at
 *
 * @property CapacidadesOrganizativa[] $capacidadesOrganizativas
 * @property CapacidadesRelacionale[] $capacidadesRelacionales
 * @property CapacidadesRespuestum[] $capacidadesRespuestas
 * @property CapacidadesTécnica[] $capacidadesTécnicas
 * @property CuadernoTutor $cuadernoTutor
 * @property VisiónEmpresa[] $visiónEmpresas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EvaluacionQuincenal extends Model
{
   
    protected $table = 'evaluacion_quincenal';

    protected $primaryKey = "ID";
    
    static $rules = [
		'ID' => 'required',
		'Id_cuaderno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID','Id_cuaderno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capacidadesOrganizativas()
    {
        return $this->hasMany('App\Models\CapacidadesOrganizativa', 'ID_EVAU_QUINCENAL', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capacidadesRelacionales()
    {
        return $this->hasMany('App\Models\CapacidadesRelacionale', 'ID_EVAU_QUINCENAL', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capacidadesRespuestas()
    {
        return $this->hasMany('App\Models\CapacidadesRespuestum', 'ID_EVAU_QUINCENAL', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capacidadesTécnicas()
    {
        return $this->hasMany('App\Models\CapacidadesTécnica', 'ID_EVAU_QUINCENAL', 'ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuadernoTutor()
    {
        return $this->hasOne('App\Models\CuadernoTutor', 'Id_cuaderno', 'Id_cuaderno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visiónEmpresas()
    {
        return $this->hasMany('App\Models\VisiónEmpresa', 'ID_EVAU_QUINCENAL', 'ID');
    }
    

}