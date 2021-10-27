<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publica extends Model
{
    protected $table = 'publicacao';
    protected $fillable = ['nome', 'data', 'mensagem'];
}
