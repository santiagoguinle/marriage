@extends('layoutGame')

@section('title', 'Bienvenidos al Juego del casamiento')

@section('scripts')
<script type="text/javascript">
        var bar = new ProgressBar.Path('#heart-path', {
            easing: 'easeInOut',
            duration: 1400
        });
        bar.set(0);
        
        function animate(countAnswers){
            bar.animate(countAnswers);  // Number from 0.0 to 1.0
            $('#percent_answers')[0].innerHTML=Math.round(countAnswers*1000)/10 +"%";
        }
        function askBar(){
            $.get( "/main/ajaxConnected", { } )
            .done(function( data ) {
               animate(data.length/22);
               setTimeout("askBar()", 5000);
            });
        }
        
        animate(0);        
        setTimeout("askBar()", 5000);
</script>
@endsection

@section('styles')
<style type="text/css">
    #container {
        height: 300px;
        max-width: 800px;
        min-width: 420px;
        margin: 0 auto;
    }
    #heart {
        margin: 30px;
        width: 300px;
        height: 300px;
        position: relative;
    }
     #percent_answers{
        color: #ED6A5A;
        font-size: 48px;
        position: absolute;
        top:105px;
        text-align: center;
        width: 100%;
        display: block;
    }
</style>
@endsection

@section('content')

<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        El Juego del Casamiento de Luli y Santi
    </span>

    <span class="contact3-form-title">
        Mesas Conectadas
    </span>

    <div id="container">

    <div class="wrap-contact3-show-options">
        <div id="heart">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#ED6A5A" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
            </svg>
            <div id="percent_answers" style="animation-duration: 3s;
  animation-timing-function: cubic-bezier(0.650, -0.550, 0.250, 1.500);
  animation-iteration-count: infinite;
  animation-name: fade;
  ">0%</div>
        </div>
    </div>
        
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/clean" class="contact3-form-btn">
            Borrar Respuestas
        </a>
        <a href="/main/restart" class="contact3-form-btn">
            Reiniciar
        </a>
        <a href="/main/begin" class="contact3-form-btn">
            Empezar
        </a>
    </div>
</form>

@endsection
