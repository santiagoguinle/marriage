@extends('layoutGame')

@section('title', 'Tabla de posiciones')

@section('scripts')
<script src="https://code.highcharts.com/js/highcharts.js"></script>
<script src="https://code.highcharts.com/js/modules/exporting.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    @foreach ($score as $cat) 
                            @if ($loop->first)
                                    '{{ $cat->player }}'
                            @else
                                    , '{{ $cat->player }}'
                            @endif
                        @endforeach
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Respuestas correctas'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Correctas',
                    data: [
                        @foreach ($score as $cat) 
                            @if ($loop->first)
                                    {{ $cat->score }} 
                            @else
                                    , {{ $cat->score }} 
                            @endif
                        @endforeach
                    ],
                    showInLegend: false,
                    colorIndex:0
                }]
        });

    })
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
    .highcharts-color-0{
        fill:#dc3945;
    }
</style>
@endsection

@section('content')

<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Puntajes
    </span>

    <span class="contact3-form-title">
        1° Puesto: @if($score[0]) {{ $score[0]->player }} @endif 
    </span>

    <div id="container"></div>

    <div class="wrap-contact3-show-options">
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/previous" class="contact3-form-btn">
            Anterior pregunta
        </a>
        @if ($question->order < 15)
        <a href="/main/next" class="contact3-form-btn">
            Siguiente pregunta
        </a>
        @endif
        @if ($question->order == 15)
        <a href="/main/close" class="contact3-form-btn">
            Finalizar
        </a>
        @endif
    </div>
</form>

@endsection
