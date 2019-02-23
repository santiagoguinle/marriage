@extends('layoutGame')

@section('title', 'Fin del Juego')

@section('scripts')

@endsection

@section('styles')
<style type="text/css">
    @import 'https://code.highcharts.com/css/highcharts.css';

    #container {
        height: 400px;
        max-width: 800px;
        min-width: 420px;
        margin: 0 auto;
    }
    .label-radio3::before{
        border: none;
        background: none;
    }
</style>
@endsection

@section('content')

<form class="contact3-form validate-form">
    <span class="contact3-form-title">
        Resultados Finales
    </span>
    
    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        @foreach ($scores as $key=>$score)
        <div class="contact3-form-radio m-r-42">
            <label class="label-radio3" for="radio1">
                  Puesto {{ $key+1}}: {{ $score->player }}
            </label>
        </div>
        @endforeach
    </div>
    

    <div id="container"></div>

    <div class="wrap-contact3-show-options">
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        
    </div>
</form>

@endsection
