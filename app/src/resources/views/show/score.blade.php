@extends('layoutGame')

@section('title', 'Pregunta #1')

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
                    'Mesa 1',
                    'Mesa 2',
                    'Mesa 3',
                    'Mesa 4',
                    'Mesa 5',
                    'Mesa 6',
                    'Mesa 7',
                    'Mesa 8',
                    'Mesa 9',
                    'Mesa 10',
                    'Mesa 11',
                    'Mesa 12',
                    'Mesa 13',
                    'Mesa 14',
                    'Mesa 15',
                    'Mesa 16',
                    'Mesa 17',
                    'Mesa 18',
                    'Mesa 19',
                    'Mesa 20',
                    'Mesa 21',
                    'Mesa 22',
                    'Mesa 23',
                    'Mesa 24'
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
                    data: [2, 4, 5, 6, 7, 8, 3, 2, 4, 2, 9, 3, 2, 4, 0, 6, 7, 8, 3, 2, 0, 2, 8, 3],
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
        1° Puesto: Mesa 11
    </span>

    <div id="container"></div>

    <div class="wrap-contact3-show-options">
    </div>

    <div class="container-contact3-form-btn wrap-contact3-show-options">
        <a href="/main/question" class="contact3-form-btn">
            Siguiente pregunta
        </a>
    </div>
</form>

@endsection
