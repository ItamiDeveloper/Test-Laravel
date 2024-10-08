<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'usuario_id', // Campo que se puede llenar
    ];

    protected $dates = ['deleted_at'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'conversacion_id');
    }
}
