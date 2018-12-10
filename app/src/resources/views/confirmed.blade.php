<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nos casamos y queremos invitarte">
        <meta name="author" content="Luli &amp; Santi">

        <link rel="shortcut icon" href="/invite/img/favicon.ico" type="image/x-icon">
        <title>Luli &amp; Santi: Confirmados</title>

        <!-- Bootstrap Core CSS -->
        <link href="/invite/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/invite/css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/invite/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .table img{
                max-height: 70px;
                max-width: 150px;
            }
            th{
                text-align: center
            }
            .table{
                background: white;
            }
            
        </style>
    </head>

    <body>
        <div class="site">

            <div class="content-section-d wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="section-heading" style="line-height:30px;margin-top:30px;margin-bottom:15px;">¡Invitados confirmados!</h2>
                            <div style="border: 12px #ffe083;border-style: double;padding: 15px;">
                                <table style="    max-width: 520px;margin: 0 auto;" class="table" >
                                    <thead>
                                        <tr>
                                            <th>
                                                Nombre
                                            </th>
                                            <th>
                                                Apellido
                                            </th>
                                            <th>
                                                Menú
                                            </th>
                                            <th>
                                                Foto
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($confirmed as $invited)
                                        <tr>
                                            <td>{{ $invited['name'] }}</td>
                                            <td>{{ $invited['lastname'] }}</td>
                                            <td>{{ $invited['diet'] }}</td>
                                            <td><a href="{{ $invited['image'] }}" target="_blank"><img src="{{ $invited['image'] }}" /></a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="section-heading" style="line-height:30px;margin-top:30px;margin-bottom:15px;">¡mensajes de cancelacion!</h2>
                            <div style="border: 12px #ffe083;border-style: double;padding: 15px;">
                                <table style="    max-width: 520px;margin: 0 auto;" class="table" >
                                    <thead>
                                        <tr>
                                            <th>
                                                mensaje
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cancelled as $invited)
                                        <tr>
                                            <td>{{ $invited['message'] }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-b -->


            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p class="copyright">Diseño y desarrollo con ♥ por <a href="javascript:alert('Esta es nuestra página!')" target="_blank">Luli y Tati</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="/invite/js/clipboard.min.js"></script>

        <script src="/invite/js/jquery.js"></script>
        <script src="/invite/js/bootstrap.min.js"></script>

        <script>$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        </script>
    </body></html>