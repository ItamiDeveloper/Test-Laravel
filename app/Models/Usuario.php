<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'email', // Campos que se pueden llenar
    ];

    // SoftDeletes almacenará la fecha de eliminación en esta columna
    protected $dates = ['deleted_at'];

    public function conversaciones()
    {
        return $this->hasMany(Conversacion::class, 'usuario_id');
    }
}
