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
                        data: [['A) En unas vacaciones.', 29.9, false, false, 0],
                            ['B) En el club', 71.5, false, true, 2],
                            ['C) Son Primos', 106.4, false, false, 1],
                            ['D) En una cita a ciegas.', 129.2, false, false, 3],
                        ],
                        showInLegend: false
                    }],
                tooltip: {
                    formatter: function () {
                        //console.log(this);
                        if (this.colorIndex == 2) {
                            return 'Respuesta correcta';
                        }
                        return 'Respuesta incorrecta';
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
            stroke: white;
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
