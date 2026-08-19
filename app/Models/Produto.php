<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    //Campos que podem ser preenchidos
    protected $fillable = ['nome','descricao','preco','status'];
}
