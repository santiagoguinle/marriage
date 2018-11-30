@extends('layoutGame')

@section('title', 'Respuestas #1')

@section('scripts')
<script src="https://code.highcharts.com/js/highcharts.js"></script>
    <script src="https://code.highcharts.com/js/modules/exporting.js"></script>
     <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            Highcharts.chart('container', {

                title: {
                    text: ''
                },

                xAxis: {
                    categories: ['A', 'B', 'C', 'D']
                },

                series: [{
                        type: 'pie',
                        allowPointSelect: true,
                        keys: ['name', 'y', 'selected', 'sliced', 'colorIndex'],
                        data: [['A) En unas vacaciones.', 6, false, false, 0],
                            ['B) En el club', 12, false, false, 1],
                            ['C) Son Primos', 24, false, false, 2]
                        ],
                        showInLegend: false
                    }],
                tooltip: {
                    formatter: function () {
                        //console.log(this);
                        if (this.point.options.sliced) {
                            return this.point.options.y +' Respuestas correctas';
                        }
                        return this.point.options.y +' Respuestas incorrectas';
                    }
                }
            });

        })
    </script>
</script>
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
        .highcharts-pie-series .highcharts-point {
            stroke: #EDE;
            stroke-width: 2px;
        }
        .highcharts-pie-series .highcharts-data-label-connector {
            stroke: #dc3545;;
            stroke-dasharray: 4, 4;
            stroke-width: 4px;
        }
        .highcharts-exporting-group{
            display: none;
        }
        .highcharts-background{
            fill: transparent;
        }
        .highcharts-credits{
            display: none;
        }
        tspan{
            font-size: 16px;
        }
        
        .highcharts-color-0{
            fill:#dc3545;
        }
        .highcharts-color-1{
            fill:#4CAF50;
        }
        .highcharts-color-2{
            fill:#009688;
        }
        .highcharts-color-3{
            fill:#9ae1ff;
        }
    </style>

@endsection

@section('content')
<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Respuestas #1
    </span>

    <span class="contact3-form-title">
        ¿COMO SE CONOCIERON SANTIAGO Y LOURDES?
    </span>

    
    
    <div id="container"></div>



    <div class="wrap-contact3-show-options">
    </div>

   
   







    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/score" class="contact3-form-btn">
            Ver Puntajes
        </a>
        <a href="/main/question" class="contact3-form-btn">
            Siguiente pregunta
        </a>
    </div>
</form>
@endsection
