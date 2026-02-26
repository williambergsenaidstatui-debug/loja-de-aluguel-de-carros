<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarroModel extends Model
{
    protected $table  ='carro'; 

    protected $fillable = [
        'modelo',
        'ano',
        'cor',
        'placa',
        'dono',
        'valor',
        'potencia',
        'fabricante',
        'tipo_gasolina',
        'sobre',
        'img',
    ];
}
