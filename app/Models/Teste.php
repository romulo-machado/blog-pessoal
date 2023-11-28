<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = [
        "id", "nome", "sobrenome", "cover"
    ] ;

    protected $table = "teste";
    use HasFactory;
}
