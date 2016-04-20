@extends('layouts.master')
@section('content')
    <div class="login">
        <div class="form">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="usr">Correo:</label>
                    <input typoe="email" name="email" class="form-control" id="usr" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="pass">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">Remember Me</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
@endsection