<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email', 'password', 'address', 'city', 'district', 'uf', 'cnpj', 'logo'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function slots() {

        return $this->hasMany('App\Slots');

    }
}
