<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CorreoModel extends Model
{
    protected $fillable = ['asunto,contenido,borrador,enviado,salida'];
    protected $table = 'correo';
    public $timestamps = false;

    public static function select_correos_salida()
    {
        return DB::table('correo')->where('salida', '1')->get();

    }

    public static function select_correos_enviado()
    {
        return DB::table('correo')->where('enviado', '1')->get();
    }

    public static function select_correos_borrador()
    {
        $x = [];
        $correos = DB::table('correo')
            ->join('destinatarios', 'destinatarios.id_correo', '=', 'correo.id')
            ->select('destinatarios.correo_destinatario', 'destinatarios.id_correo'
                , 'correo.contenido', 'correo.asunto')
            ->where('correo.borrador', '=', '1')
            ->get();

        //foreach ($correos as $i) {
        //    $x[$i->correo_destinatario] = $i->id_correo;
        //}

        return $correos;
    }
}