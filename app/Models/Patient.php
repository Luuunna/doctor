<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
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
 * @property $info_of_patient
 * @property $created_at
 * @property $updated_at
 *
 * @property Historial[] $historials
 * @property Hospital[] $hospitals
 * @property MedicalVisit[] $medicalVisits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patient extends Model
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
		'info_of_patient' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','identification_card','phone_number','birthdate','age','gender','address','email','info_of_patient'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historials()
    {
        return $this->hasMany('App\Models\Historial', 'id_patients', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hospitals()
    {
        return $this->hasMany('App\Models\Hospital', 'id_patients', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalVisits()
    {
        return $this->hasMany('App\Models\MedicalVisit', 'id_patients', 'id');
    }
    

}
