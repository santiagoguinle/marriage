@extends('layoutGame')

@section('title', 'Tu Respuesta #{{ $question->order }}')

@section('scripts')
@endsection

@section('styles')
<style>
    .label-radio3:before{
        display:none
    }
    .label-radio3.fail{
        text-decoration: line-through;
    }
    .label-radio3.correct{
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Pregunta N°{{ $question->order }}
    </span>

    <span class="contact3-form-title">
        {{ $question->question }}
    </span>


    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        @foreach($question->options as $option) 
            @if($option->id==$question->question_option_id) 
                <div class="contact3-form-radio m-r-42">
                    <label class="label-radio3 correct">
                        -> {{ $option->option }} <-
                    </label>
                </div>
            @else
                <div class="contact3-form-radio m-r-42">
                    <label class="label-radio3 fail" >
                        {{ $option->option }}
                    </label>
                </div>
            @endif 
        @endforeach
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/play/question" class="contact3-form-btn">
            Ir a la siguiente pregunta
        </a>
    </div>
</form>
@endsection
