<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    
    protected $fillable = [
        'nomeUsuario',
        'senhaUsuario',
    ];

    
    protected $hidden = [
        'senhaUsuario',
    ];

    protected $primaryKey = 'idUsuario';
}
