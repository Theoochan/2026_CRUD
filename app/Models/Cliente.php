<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Campos que podem ser preenchidos
    protected $fillable = ['nome', 'cpfcnpj', 'telefone', 'email', 'endereco', 'cidade', 'estado', 'observacao'];
}
