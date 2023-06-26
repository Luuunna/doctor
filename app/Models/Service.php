<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $name
 * @property $type_of_services
 * @property $specification
 * @property $id_hospital
 * @property $created_at
 * @property $updated_at
 *
 * @property Historial[] $historials
 * @property Hospital $hospital
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type_of_services' => 'required',
		'specification' => 'required',
		'id_hospital' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type_of_services','specification','id_hospital'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historials()
    {
        return $this->hasMany('App\Models\Historial', 'id_services', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hospital()
    {
        return $this->hasOne('App\Models\Hospital', 'id', 'id_hospital');
    }
    

}
