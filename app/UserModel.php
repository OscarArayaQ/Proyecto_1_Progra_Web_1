<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $fillable = ['Nombre,Correo,Contraseña,Verificado'];
    protected $table = 'usuarios';
    public $timestamps = false;
}
