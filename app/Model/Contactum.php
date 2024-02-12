<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contactu extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone'
    ];

 
}
