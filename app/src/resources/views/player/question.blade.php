@extends('layoutGame')

@section('title', 'Pregunta #1')

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
<form class="contact3-form validate-form" action="/play/answer">

    <span class="contact3-form-subtitle">
        Pregunta N°1
    </span>

    <span class="contact3-form-title">
        ¿Como se conocieron Santiago y Lourdes?
    </span>


    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        <div class="contact3-form-radio m-r-42">
            <input class="input-radio3" id="radio1" type="radio" name="choice" value="A" checked="checked">
            <label class="label-radio3" for="radio1">
                En unas vacaciones.
            </label>
        </div>

        <div class="contact3-form-radio">
            <input class="input-radio3" id="radio2" type="radio" name="choice" value="B">
            <label class="label-radio3" for="radio2">
                En el club
            </label>
        </div>

        <div class="contact3-form-radio">
            <input class="input-radio3" id="radio3" type="radio" name="choice" value="C">
            <label class="label-radio3" for="radio3">
                Son Primos
            </label>
        </div>

        <div class="contact3-form-radio">
            <input class="input-radio3" id="radio4" type="radio" name="choice" value="D">
            <label class="label-radio3" for="radio4">
                En una cita a ciegas.
            </label>
        </div>
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <input type="submit" class="contact3-form-btn" value="Enviar respuesta" />
    </div>
</form>
@endsection
