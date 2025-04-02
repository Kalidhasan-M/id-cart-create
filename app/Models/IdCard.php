<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'id_number',
        'dob',
        'gender',
        'blood_group',
        'phone_number',
        'email',
        'address',
        'photo',
        'department',
        'issue_date',
        'expiry_date'
    ];
}