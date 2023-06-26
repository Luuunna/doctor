<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $identification_card
 * @property $phone_number
 * @property $birthdate
 * @property $age
 * @property $gender
 * @property $address
 * @property $email
 * @property $hospital_taht_attends
 * @property $workstation
 * @property $specialty
 * @property $turn
 * @property $created_at
 * @property $updated_at
 *
 * @property Hospital[] $hospitals
 * @property MedicalVisit[] $medicalVisits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'identification_card' => 'required',
		'phone_number' => 'required',
		'birthdate' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'address' => 'required',
		'email' => 'required',
		'hospital_taht_attends' => 'required',
		'workstation' => 'required',
		'specialty' => 'required',
		'turn' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','identification_card','phone_number','birthdate','age','gender','address','email','hospital_taht_attends','workstation','specialty','turn'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hospitals()
    {
        return $this->hasMany('App\Models\Hospital', 'id_doctors', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalVisits()
    {
        return $this->hasMany('App\Models\MedicalVisit', 'id_doctors', 'id');
    }
    

}
