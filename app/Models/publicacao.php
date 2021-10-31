<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacao extends Model
{
    protected $table = 'publicacao';
    protected $fillable = ['titulo', 'data', 'mensagem'];
}

