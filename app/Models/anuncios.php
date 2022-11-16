<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'anuncio',
        'data_inicio',
        'data_fim',
        'caminho_imagem'
    ];
}
