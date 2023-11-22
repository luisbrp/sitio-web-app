<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descripcion',
        'fecha_limite',
        'estado',
        'creado_en',
        'actualizado_en'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

