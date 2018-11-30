@extends('layoutGame')

@section('title', 'Tu Respuesta #1')

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Pregunta N°1
    </span>

    <span class="contact3-form-title">
        ¿Como se conocieron Santiago y Lourdes?
    </span>


    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        <div class="contact3-form-radio m-r-42">
            <label class="label-radio3">
                Elegiste: En unas vacaciones.
            </label>
        </div>
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/play/question" class="contact3-form-btn">
            Ir a siguiente pregunta
        </a>
    </div>
</form>
@endsection
