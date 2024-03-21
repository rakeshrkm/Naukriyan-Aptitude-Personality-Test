<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'user_type',
        'password',
        'user_id',
        'mobile',
        'address',
        'location',
        'contact_person',
        'created_by'
    ]
}
