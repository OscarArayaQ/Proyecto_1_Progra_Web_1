<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserModel;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\Correo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $mysql;
    public function index()
    {
        //return "hola";
        return view('user.index');
    }

    /* *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
            $cifrado = UserModel::contrasenna_cifrada(\Input::get('contrasenna'));
            DB::table('usuarios')->insert(
                array('nombre' => \Input::get('user_name'), 'contrasenna' => $cifrado, 'correo' => \Input::get('correo')));

            $this->Correo = new Correo();
            $this->Correo->sendEmailReminder(\Input::get('user_name'),\Input::get('correo'));

            return "se mando el correo";
            //return redirect('user');
            
        }
        catch (\Exception $e)
        {

            
        }
    }

    public function verificar_usuario(Request $request)
    {

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
