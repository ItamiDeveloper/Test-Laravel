<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Mensaje extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'conversacion_id',
        'remitente',
        'contenido', // Campos que se pueden llenar
    ];

    protected $dates = ['deleted_at'];

    public function conversacion()
    {
        return $this->belongsTo(Conversacion::class, 'conversacion_id');
    }
}
