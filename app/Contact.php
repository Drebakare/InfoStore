<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'fullname',
        'phoneNumber',
        'emailAddress',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
