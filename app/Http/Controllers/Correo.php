<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\User;
use DB;

class Correo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmailReminder($user_name,$correo)
    {
        $user = (object) array('name' => 'Oscar', 'email' => 'arayaos@icloud.com' );

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            
            //ocupo el id del usuario
            //localhost:8000/user/verificar/id_usuario

            $m->to($user->email, $user->name)->subject('Activacion de la Cuenta');
        });
    }
    public function index()
    {
        return view("correo.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("correo.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $destinatarios = explode(",",\Input::get('correo'));
            return $destinatarios;
              DB::table('correo')->insert(
                array('asunto' => \Input::get('nuevo'),'contenido' =>\Input::get('descripcion')));

            return view("correo.crear");
            }
        catch (\Exception $e)
        {


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
