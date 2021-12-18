<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'username',
        'password',
        'dob',
        'email',
        'phone',
        'address',
        'company',
        'responsible_person',
        'designation',
        'company_registration_number',
        'company_address'
    ];
}
