<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reporte extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'descripcion_reporte',
        'imagen',
        'cuidad',
        'user_id',
    ];


    //Para hacer la relaciuon de uno a muchos (de forma inversa) muchos a uno.
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
