<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_form extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Full name', 'email' , 'message'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
