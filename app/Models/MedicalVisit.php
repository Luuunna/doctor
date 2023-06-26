<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicalVisit
 *
 * @property $id
 * @property $date
 * @property $hour
 * @property $location
 * @property $city
 * @property $id_patients
 * @property $id_doctors
 * @property $id_hospital
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor $doctor
 * @property Hospital $hospital
 * @property Patient $patient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicalVisit extends Model
{
    
    static $rules = [
		'date' => 'required',
		'hour' => 'required',
		'location' => 'required',
		'city' => 'required',
		'id_patients' => 'required',
		'id_doctors' => 'required',
		'id_hospital' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','hour','location','city','id_patients','id_doctors','id_hospital'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'id_doctors');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hospital()
    {
        return $this->hasOne('App\Models\Hospital', 'id', 'id_hospital');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'id_patients');
    }
    

}
