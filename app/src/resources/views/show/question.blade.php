@extends('layoutGame')

@section('title', 'Pregunta #{{ $question->order }}')

@section('scripts')
<script type="text/javascript">
        var bar = new ProgressBar.Path('#heart-path', {
            easing: 'easeInOut',
            duration: 1400
        });

        bar.set(0);
        
        function animate(Answers){
            countAnswers=Answers.length/$('.playeranswer').length;
            bar.animate(countAnswers);  // Number from 0.0 to 1.0
            $('#percent_answers')[0].innerHTML=Math.round(countAnswers*1000)/10 +"%";
            
            $('.playeranswer').hide();
            $('.playerunanswer').show();
            $(Answers).each(function(i,e){
                $(".playerunanswer."+e.player_id).hide();
                $(".playeranswer."+e.player_id).show();
            })
        }
        function askBar(){
            $.get( "/main/ajaxanswered", { "question":{{ $question->id }} } )
            .done(function( data ) {
               animate(data);
               setTimeout("askBar()", 5000);
            });
        }
        
        animate({!! $answers !!});        
        setTimeout("askBar()", 5000);
    
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
        
        animation-duration: 3s;
          animation-timing-function: cubic-bezier(0.650, -0.550, 0.250, 1.500);
          animation-iteration-count: infinite;
          animation-name: fade;
          
    }
    .label-radio3::before {
        display: none;
    }
    .label-radio3 {
        font-size: 24px;
    }
    .playerunanswer ,
    .playeranswer{
        color: #48788c;
        display: block;
        font-family: Poppins-Bold;
        line-height: 1.2;
        text-align: center;
        text-transform: uppercase;
        padding-bottom: 10px;
        float: left; 
        margin: 10px;
    }
    .playerunanswer{
        float: right; 
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
        @foreach ($question->options as $key=>$option)
        <div class="contact3-form-radio m-r-42">
            <label class="label-radio3" for="radio1">
                  Opcion {{ $key+1}}: {{ $option->option }}
            </label>
        </div>
        @endforeach
    </div>
    
    <div class="row">
        <div class="col-4" style="text-align:right">
            <span class="contact3-form-subtitle">
                No Respondieron
            </span>
            <ul>
                @foreach ($players as $player)
                <li id="playerunanswer_{{ $player->id }}" class="playerunanswer {{ $player->id }}">{{ $player->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-4">
            <div class="wrap-contact3-show-options">

                <div id="heart">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                        <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                        <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#ED6A5A" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                    </svg>
                    <div id="percent_answers" style="">0%</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <span class="contact3-form-subtitle">
                Respondieron
            </span>
            <ul>
                @foreach ($players as $player)
                <li id="playeranswer_{{ $player->id }}" class="playeranswer {{ $player->id }}">{{ $player->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/previous" class="contact3-form-btn">
            Anterior pregunta
        </a>
        <a href="/main/answers" class="contact3-form-btn">
            Ver resultados
        </a>
    </div>
</form>
@endsection
