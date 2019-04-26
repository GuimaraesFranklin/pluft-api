<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'birth', 'password', 'company_id'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function clients() {
        return $this->hasMany('App\Client');
    }
}
