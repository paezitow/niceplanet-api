<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Produtor extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'cpfProdutor',
        'nomeProdutor'
    ];

    protected $table = 'produtores';
    

    protected $primaryKey = 'idProdutor';
}
