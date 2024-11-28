<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos'; // Nombre de la tabla
    protected $primaryKey = 'evento_id'; // Clave primaria personalizada

    protected $fillable = [
        'evento_nombre',
        'evento_fecha',
        'evento_hora_inicio',
        'evento_hora_fin',
        'evento_precio',
        'evento_descripcion',
        'localiz_id',
    ];

    /**
     * Relación inversa: un evento pertenece a una localización.
     */
    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class, 'localiz_id');
    }

    /**
     * Relación muchos a muchos con usuarios.
     */
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_eventos', 'evento_id', 'usu_id');
    }
}
