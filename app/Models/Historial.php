<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historial
 *
 * @property $id
 * @property $full_name_of_patient
 * @property $emergency_number_of_the_patient
 * @property $info_of_patient
 * @property $descripcion
 * @property $recipe
 * @property $patient_conditions
 * @property $patient_addmission_date
 * @property $patient_discharge_date
 * @property $id_services
 * @property $id_patients
 * @property $created_at
 * @property $updated_at
 *
 * @property Patient $patient
 * @property Service $service
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historial extends Model
{
    
    static $rules = [
		'full_name_of_patient' => 'required',
		'emergency_number_of_the_patient' => 'required',
		'info_of_patient' => 'required',
		'descripcion' => 'required',
		'recipe' => 'required',
		'patient_conditions' => 'required',
		'patient_addmission_date' => 'required',
		'patient_discharge_date' => 'required',
		'id_services' => 'required',
		'id_patients' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['full_name_of_patient','emergency_number_of_the_patient','info_of_patient','descripcion','recipe','patient_conditions','patient_addmission_date','patient_discharge_date','id_services','id_patients'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'id_patients');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'id_services');
    }
    

}
