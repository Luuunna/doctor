<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hospital
 *
 * @property $id
 * @property $name
 * @property $type_of_services
 * @property $bed_number_aviable
 * @property $address
 * @property $location
 * @property $emergency_number
 * @property $id_patients
 * @property $id_doctors
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor $doctor
 * @property MedicalVisit[] $medicalVisits
 * @property Patient $patient
 * @property Service[] $services
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hospital extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type_of_services' => 'required',
		'bed_number_aviable' => 'required',
		'address' => 'required',
		'location' => 'required',
		'emergency_number' => 'required',
		'id_patients' => 'required',
		'id_doctors' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type_of_services','bed_number_aviable','address','location','emergency_number','id_patients','id_doctors'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'id_doctors');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalVisits()
    {
        return $this->hasMany('App\Models\MedicalVisit', 'id_hospital', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'id_patients');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'id_hospital', 'id');
    }
    

}
