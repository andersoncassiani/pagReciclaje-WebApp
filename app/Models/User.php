<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'nombre_usuario',
        'email',
        'password',
        'password_confirmation',
    ];

    /**Esto es para encriptar la contraseña en la BD, aqui solo la encripto en la columna pass */
    public function setPassAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }


    //Para hacer la relaciuon de uno a muchos
    public function reportes(){
        return $this->hasMany('App\Models\Reporte');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
