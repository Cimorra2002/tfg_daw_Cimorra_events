<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $primaryKey = 'contactanos_id'; // Clave primaria

    protected $fillable = [
        'contact_nombre',
        'contact_apellido',
        'contact_correo',
        'contact_mensaje',
        'usu_id',
    ];

    /**
     * Define la relación con el modelo Usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'usu_id');
    }
}
