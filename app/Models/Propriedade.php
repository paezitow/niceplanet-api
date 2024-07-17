<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Propriedade extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'cadastroRural',
        'nomePropriedade'
    ];

    protected $primaryKey = 'idPropriedade';
}
