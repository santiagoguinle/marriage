@extends('layoutGame')

@section('title', 'Pregunta #1')

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<form class="contact3-form validate-form" action="/play">
    <span class="contact3-form-title">
        ¡Bienvenido al juego del casamiento!
    </span>

    <span class="contact3-form-subtitle">
        La Mesa ganadora recibirá grandes premios <br>
        <br>
        Para representar a tu mesa ingresá el código de mesa aqui:
    </span>

    <div class="wrap-input3 validate-input wrap-contact3-show-options" data-validate="Ingresa el codigo de tu mesa">
        <input class="input3" type="text" name="name" placeholder="ingresar aqui el codigo de tu mesa">
        <span class="focus-input3"></span>
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <input type="submit" class="contact3-form-btn" value="Enviar"/>
    </div>
</form>
@endsection
