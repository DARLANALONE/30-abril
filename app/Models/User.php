<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthenticaMtable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    protected $table ='user';
    protected $primaryKey ='id';

    protected $fillable= [
        'name',
        'lastname',
        'email'
    ];
    }

