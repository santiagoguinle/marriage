@extends('layoutGame')

@section('title', 'Pregunta #1')

@section('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var bar = new ProgressBar.Path('#heart-path', {
            easing: 'easeInOut',
            duration: 1400
        });

        bar.set(0);
        bar.animate(0.50);  // Number from 0.0 to 1.0
    })
</script>
@endsection

@section('styles')
<style type="text/css">
    #heart {
        margin: 20px;
        width: 200px;
        height: 200px;
        position: relative;
    }
    #percent_answers{
        color: #ED6A5A;
        font-size: 48px;
        position: absolute;
        top:65px;
        text-align: center;
        width: 100%;
        display: block;
    }
    .label-radio3::before {
        display: none;
    }
</style>
@endsection

@section('content')
<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Pregunta #1
    </span>

    <span class="contact3-form-title">
        ¿COMO SE CONOCIERON SANTIAGO Y LOURDES?
    </span>

    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        <div class="contact3-form-radio m-r-42">
            <label class="label-radio3" for="radio1">
                A) En unas vacaciones.
            </label>
        </div>

        <div class="contact3-form-radio">
            <label class="label-radio3" for="radio2">
                B) En el club
            </label>
        </div>

        <div class="contact3-form-radio">
            <label class="label-radio3" for="radio3">
                C) Son Primos
            </label>
        </div>

        <div class="contact3-form-radio">
            <label class="label-radio3" for="radio4">
                D) En una cita a ciegas.
            </label>
        </div>
    </div>

    <div class="wrap-contact3-show-options">

        <div id="heart">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#ED6A5A" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
            </svg>
            <div id="percent_answers">50%</div>
        </div>
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/answers" class="contact3-form-btn">
            Ver resultados
        </a>
    </div>
</form>
@endsection
