<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    use HasFactory;

    protected $table = 'localizaciones';
    protected $primaryKey = 'localiz_id';

    protected $fillable = [
        'localiz_nombre',
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'localiz_id');
    }
}
