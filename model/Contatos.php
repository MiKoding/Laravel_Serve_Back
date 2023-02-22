<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $table = 'contatos';
    protected $primarykey = 'id';
    protected $fillable = ['Nome', 'Email', 'Numero', 'Foto'];
    use HasFactory;
}
