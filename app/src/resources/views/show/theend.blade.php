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
    <span class="contact3-form-title" style="padding-bottom:10px">
        Resultados Finales
    </span>
    
    <div class="wrap-contact3-form-radio wrap-contact3-show-options">
        @foreach ($scores as $key=>$score)
        <div class="contact3-form-radio m-r-42" style="padding-bottom:0px;">
            <label class="label-radio3" for="radio1">
                  Puesto {{ $key+1}}: {{ $score->player }}
            </label>
        </div>
        @endforeach
    </div>

</form>

@endsection
