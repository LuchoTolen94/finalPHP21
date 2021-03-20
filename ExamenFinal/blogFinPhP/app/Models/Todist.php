<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todist extends Model
{
    protected $fillable =['id', 'descripción', 'fecha vencimiento', 'estado', 'fecha creación', 'última fecha de modificación'];
}
