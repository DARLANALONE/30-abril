<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeed extends Model
{
    use HasFactory;
    protected $table = 'employeed';
    protected $primaryKey = 'id';

    protected $fillable= [
        'name',
        'lastname',
        'email',
        'document',
        'gender'
    ];
}

