@extends('layoutGame')

@section('title', 'Ya está por comenzar')

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<form class="contact3-form validate-form" action="/play" method="post">
    {{ csrf_field() }}
    <span class="contact3-form-title">
        ¡Bienvenido al juego del casamiento!
    </span>

    <span class="contact3-form-subtitle">
        Te logeaste como "{{ $player->name }}" <br>
        <br>
        Cuando esten listos para empezar presiona el boton debajo.
    </span>
    
    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <input type="submit" class="contact3-form-btn" value="Comenzar"/>
    </div>
</form>
@endsection
