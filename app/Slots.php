<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
    protected $fillable = ['name', 'type', 'description', 'booking', 'company_id'];

    protected $dates = ['deleted_at'];

    function company() {

        return $this->belongsTo('App\Company');

    }
}
