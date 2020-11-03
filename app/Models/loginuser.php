<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class loginuser extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'user';
    protected $guard = 'user';
}
