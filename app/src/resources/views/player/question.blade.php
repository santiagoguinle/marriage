@extends('layoutGame')

@section('title')
Pregunta #{{ $question->order }}
@endsection('title')

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
<form class="contact3-form validate-form" action="/play/answer" method="post">
    {{ csrf_field() }}
    <input id="question" type="hidden" name="question" value="{{ $question->id }}" />
    <span class="contact3-form-subtitle">
        Pregunta N°{{ $question->order }}
    </span>

    <span class="contact3-form-title">
        {{ $question->question }}
    </span>

    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        @foreach ($question->options as $option)
        <div class="contact3-form-radio m-r-42">
            <input class="input-radio3" id="radio{{ $option->id }}" type="radio" name="choice" value="{{ $option->id }}">
            <label class="label-radio3" for="radio{{ $option->id }}">
                {{ $option->option }}
            </label>
        </div>
        @endforeach
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <input type="submit" class="contact3-form-btn" value="Enviar respuesta" />
    </div>
</form>
@endsection
