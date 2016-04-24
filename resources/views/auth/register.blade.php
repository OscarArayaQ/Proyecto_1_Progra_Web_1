@extends('layouts.master')
@section('content')
    <div class="form_register">
        <div class="register">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div class="form-control_p">
                    Usuario
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-control_p">
                    Correo
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-control_p">
                    Contraseña
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="form-control_p">
                    Confirmar Contraseña
                    <input type="password" name="password_confirmation" class="form-control"
                           value="{{ old('password_confirmation') }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
@endsection