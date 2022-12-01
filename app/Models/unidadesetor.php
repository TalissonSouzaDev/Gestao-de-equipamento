<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidadesetor extends Model
{
    use HasFactory;

    protected $table = 'unidadesetors';

    protected $fillable = ['setor','unidade'];


}
