<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Descent extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    // Aquellos atributos que modificaremos de forma manual (insert, por ejemplo)
    // NO incluimos, por ejemplo, ID porque es autoincremental
    protected $fillable = [
        'nombre_partida',
        'oro',
    ];

    // Para que no utilice las columnas de “updated_at” y “created_at”
    public $timestamps = true;

    // Para evitar que la peticion use un nombre erroneo de tabla por el plural de las migraciones
    public $table = "descents";

    public function cartas(){
        return $this->belongsToMany(CartaOverlordDc::class);
    }
}
