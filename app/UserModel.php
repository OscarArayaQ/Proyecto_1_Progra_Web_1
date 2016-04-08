<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $fillable = ['nombre,correo,contrasenna,verificado'];
    protected $table = 'usuarios';
    public $timestamps = false;

    public static function contrasenna_cifrada($contrasenna)
    {
      return(sha1(md5($contrasenna)));

    }
}
