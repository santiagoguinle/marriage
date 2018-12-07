<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nos casamos y queremos invitarte">
        <meta name="author" content="Luli &amp; Santi">

        <link rel="shortcut icon" href="/invite/img/favicon.ico" type="image/x-icon">

        <title>Luli &amp; Santi</title>

        <!-- Bootstrap Core CSS -->
        <link href="/invite/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/invite/css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/invite/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/invite/css/css" rel="stylesheet" type="text/css">

        <link href="/invite/css/animate.css" rel="stylesheet">
        <link href="/invite/fileinput/css/fileinput.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css" rel="stylesheet" >    

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="site">

            <!-- Header -->
            <div class="intro-header">

                <div class="intro-message wow fadeInDown">
                </div>


                <a href="#menu"><div class="mouse-icon wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    </div></a>


                <!-- /.container -->

            </div>
            <!-- /.intro-header -->

            <!-- Page Content -->

            <!-- Navigation -->
            <a name="menu"></a>
            <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
                <div class="container topnav">

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#quien">Quién</a>
                            </li>
                            <li>
                                <a href="#como">Cómo</a>
                            </li>
                            <li>
                                <a href="#donde">Dónde</a>
                            </li>
                            <li>
                                <a href="#rsvp">RSVP</a>
                            </li>
                            <li>
                                <a href="#regalo">Regalo</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>



            <!-- Page Content -->

            <a name="quien"></a>
            <div class="content-section-a wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="section-heading">¿Quiénes?</h2>
                        </div>
                        <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 text-center">
                            <img class="img-responsive circles" src="/invite/img/novio.jpg" alt="Santi Guinle" style="    background: transparent url(/invite/img/circulo.png) no-repeat center center;
                                 padding: 50px;
                                 background-size: 255px;">
                            <h4>Él</h4>
                            <p>Es "de sistemas" y tiene 33 años. <br>
                                Marvelcinéfilo, workaholic y un poco geek.<br>
                                Fan de PHP y de casi todo. <br>
                                Quizo pedirle casamiento mientras buceaban! <br> 
                                #PuedeFallar y #LaSegundaEsLaVencida
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-5 text-center">
                            <img class="img-responsive circles" src="/invite/img/novia.jpg" alt="Luli Paz" style="    background: transparent url(/invite/img/circulo.png) no-repeat center center;
                                 padding: 50px;
                                 background-size: 255px;">
                            <h4>Ella</h4>
                            <p>Es ñoña y tiene 27 años.<br>
                                Abogada y medio artista.<br>
                                Fan de Harry Potter, Star Wars y Gilmore Girls.<br>
                                Cumple el 21 de Mayo, todos los años.<br> #El110EsMuyGrande y #VióUnSeñorConBarba
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-a -->

            <a name="como"></a>
            <div class="content-section-b wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">

                    <div class="row" >
                        <div class="col-lg-12 col-sm-12 text-center">
                            <img src="/invite/img/rings3.png">
                            <h2 class="section-heading">¿Cómo Fue?</h2>
                        </div>

                        <div class="col-md-12 text-left">

                        </div>

                        <div style="clear:both"></div>

                        <div class="col-md-offset-3 col-md-6 text-center">
                            <a href="javascript:startChat()" target="_blank" class="btn btn-verde btn-lg">Ver Conversacion</a> 
                        </div>
                    </div>


                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-b -->

            <a name="donde"></a>
            <div class="content-section-a wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <img src="/invite/img/marker.png" width="25">
                            <h2 class="section-heading">¿Dónde?</h2>
                        </div>
                        <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 text-center">
                            <img class="img-responsive circles" src="/invite/img/parroquia.png" alt="Iglesia" style="border: 12px #ffe083;padding: 10px;border-style: solid;">
                            <h4>La Iglesia</h4>
                            <p>Pqia. Espíritu Santo (Villa Urquiza)<br>
                                Pacheco 2089<br>  
                                Buenos Aires, Argentina <br>
                                24 de Febrero, 09:30 hs.
                            </p>
                            <a href="https://goo.gl/maps/fkWhqvyAFpq" target="_blank" class="btn btn-verde btn-lg">Ver Mapa</a>  
                        </div>
                        <div class="col-lg-5 col-md-5 text-center">
                            <img class="img-responsive circles" src="/invite/img/fiesta.png" alt="Madero Tango" style="border: 12px #bcb562;padding: 10px;border-style: solid;">
                            <h4>La Fiesta</h4>
                            <p>Madero Tango (Puerto Madero)<br>
                                Av. Alicia Moreau de Justo 2150<br>
                                Buenos Aires, Argentina <br>
                                24 de Febrero, 11:00 hs.    
                            </p>
                            <a href="https://goo.gl/maps/MMvoMWooRr82" target="_blank" class="btn btn-verde btn-lg">Ver Mapa</a>  
                        </div>
                    </div>

                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-a -->

            <a name="rsvp"></a>
            <div class="content-section-b wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">

                    <div class="row" >
                        <div class="col-lg-12 col-sm-12 text-center">
                            <img src="/invite/img/banderines.png">
                            <h2 class="section-heading">RSVP</h2>
                        </div>
                        <div class="col-md-offset-3 col-md-6 text-center choose_rsvp">
                            <p>Por favor, confirmanos tu asistencia!</p>
                            <a href="javascript:$('.choose_rsvp').hide();$('#confirm_rsvp').show()" target="_blank" class="btn btn-verde btn-lg">Confirmar Asistencia</a> 
                        </div>
                        <div class="col-md-offset-3 col-md-6 text-center choose_rsvp">
                            <a href="mailto:marialourdespaz@gmail.com?Subject=Casamiento%20Lali%20y%20Tuti" target="_blank" class="btn  btn-lg"> <svg class="broken" viewBox="0 0 24 24">
                                <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C8.17,3 8.82,3.12 9.44,3.33L13,9.35L9,14.35L12,21.35V21.35M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L11,14.35L15.5,9.35L12.85,4.27C13.87,3.47 15.17,3 16.5,3Z" /> </svg> No puedo ir <svg class="broken" viewBox="0 0 24 24">
                                <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C8.17,3 8.82,3.12 9.44,3.33L13,9.35L9,14.35L12,21.35V21.35M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L11,14.35L15.5,9.35L12.85,4.27C13.87,3.47 15.17,3 16.5,3Z" />
                                </svg></a> 
                        </div>

                        <div class="col-md-offset-3 col-md-6 text-center " id="confirm_rsvp" style="display:none">
                            <p>Por favor completar una vez por cada persona!</p>
                            <form action="/rsvp">  
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="center-block" >
                                            <input id="name" name="name" type="input" class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div><div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="center-block" >
                                            <input id="lastname" name="lastname" type="input" class="form-control"  placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="center-block" >
                                            <select class="custom-select form-control" id="dieta">
                                                <option value="comun" >Menú Comun</option>
                                                <option value="celiaco">Menú Celíaco</option>
                                                <option value="vegetariano">Menú Vegetariano</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div id="kv-avatar-errors" class="center-block col-sm-6" style="display:none"></div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="kv-avatar center-block" >
                                            <input id="autofoto" name="autofoto" type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-b -->

            <a name="regalo"></a>
            <div class="content-section-c wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <img src="/invite/img/regalo.png">
                            <h2 class="section-heading">El Regalo</h2>
                        </div>
                        <div class="col-md-offset-3 col-md-6 text-center">
                            <p>Para nosotros, lo importante es que puedas acompañarnos. Pero, si además podes ayudarnos con la luna de miel soñada, te dejamos nuestro CBU.</p>

                            <h5>
                                Paz Maria Lourdes, Banco Santander Río<br>
                                Número de cuenta (en Pesos): 415-337741/9<br>
                                CBU: 0720415388000033774190<br>
                                Alias:&nbsp;REINA.TORNEO.CADENA
                            </h5>

                            <a class="btn btn-verde btn-lg" data-clipboard-text="0110599530000065546551">Copiar Número de CBU</a> 
                        </div>
                    </div>

                </div>
                <!-- /.container -->

            </div>
            <!-- /.content-section-a -->


            <div class="content-section-d wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="section-heading" style="line-height:30px;margin-top:30px;margin-bottom:15px;">¡VAMOS a tener un hashtag!<br>subí todas las fotos</h2>
                            <h1>#24F #LuliySanti #PanceLove</h1>
                            <img class="loscos" src="/invite/img/panceta.jpg" style="    border: 12px #ffe083;border-style: double;padding: 15px;">
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

        <div class="page" style="display:none;position:fixed;top:0;left:0;">
            <div class="marvel-device nexus5">
                <div class="top-bar"></div>
                <div class="sleep"></div>
                <div class="volume"></div>
                <div class="camera"></div>
                <div class="screen">
                    <div class="screen-container">
                        <!--div class="status-bar">
                          <div class="time"></div>
                          <div class="battery">
                            <i class="zmdi zmdi-battery"></i>
                          </div>
                          <div class="network">
                            <i class="zmdi zmdi-network"></i>
                          </div>
                          <div class="wifi">
                            <i class="zmdi zmdi-wifi-alt-2"></i>
                          </div>
                          <div class="star">
                            <i class="zmdi zmdi-star"></i>
                          </div>
                        </div-->
                        <div class="chat">
                            <div class="chat-container">
                                <div class="user-bar">
                                    <div class="back">
                                        <i class="zmdi zmdi-arrow-left"></i>
                                    </div>
                                    <div class="avatar">
                                        <img src="/invite/img/novio.jpg" alt="Avatar">
                                    </div>
                                    <div class="name">
                                        <span>Santi Guinle</span>
                                        <span class="status">online</span>
                                    </div>
                                    <div class="actions more">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </div>
                                    <div class="actions attachment">
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                    </div>
                                    <div class="actions">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                </div>
                                <div class="conversation">
                                    <div class="conversation-container">


                                    </div>
                                    <form class="conversation-compose">
                                        <div class="emoji">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"/></svg>
                                        </div>
                                        <input class="input-msg" name="input" placeholder="Type a message" autocomplete="off" ></input>
                                        <div class="photo">
                                            <i class="zmdi zmdi-camera"></i>
                                        </div>
                                        <button class="send">
                                            <div class="circle">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="/invite/js/wow.min.js"></script>
        <script>
new WOW().init();
        </script>
        <script src="/invite/js/clipboard.min.js"></script>


        <!-- jQuery -->
        <script src="/invite/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/invite/js/bootstrap.min.js"></script>


        <script src="/invite/fileinput/fileinput.min.js"></script>
        <script src="/invite/fileinput/locales/es.js"></script>


        <script>
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
        </script>

        <script>
            new Clipboard('.btn');
        </script>

        <script type="text/javascript">
            var fileinpu;
            document.addEventListener('DOMContentLoaded', function (event) {

                fileinpu = $("#autofoto").fileinput({
                    uploadUrl: '/rsvp',
                    uploadAsync: true,
                    language: 'es',
                    overwriteInitial: true,
                    maxFileSize: 8000,
                    browseClass: "btn btn-verde btn-lg",
                    showUpload: true,
                    showClose: false,
                    showCaption: false,
                    browseLabel: '',
                    removeLabel: 'Quitar',
                    browseIcon: '<i class="glyphicon glyphicon-picture"></i> Confirmar', /*<i class="glyphicon glyphicon-picture"></i>'*/
                    removeIcon: '', /*'<i class="glyphicon glyphicon-trash"></i>'*/
                    removeTitle: '', /*'Cancel or reset changes'*/
                    elErrorContainer: '#kv-avatar-errors',
                    msgErrorClass: 'alert alert-block alert-danger',
                    defaultPreviewContent: '<br>', /*'<img src="' + (typeof avatar !== 'undefined' && avatar !== '/img/avatar/' ? avatar : '/invite/fileinput/img/default_avatar_male.jpg') + '" alt="Your Avatar" style="width:160px">',*/
                    layoutTemplates: {main2: '<div class="kv-upload-progress kv-hidden"></div>  {browse}'/*'{preview} {remove} {browse}'*/},
                    allowedFileExtensions: ["jpg", "png", "gif", "jpeg"],
                    uploadExtraData: function () {
                        return {'name': $('#name').val(), 'lastname': $('#lastname').val(), 'dieta': $('#dieta').val()};
                    }
                }).on("filebatchselected", function (event, files) {
                    if (validForm()) {
                        fileinpu.fileinput("upload");
                    } else {
                        // fileinpu.fileinput('reset');
                    }
                }).on('fileuploaded', function (event, data, previewId, index) {
                    if (data.response.uploaded) {
                        confirmAndReset(data.response);
                    } else {
                        showError(data.response);
                    }
                });
            });


            function validForm() {
                if ($('#name').val() == '') {
                    fileinpu.fileinput('clear');
                    $('#kv-avatar-errors').html("<p>Te olvidaste de indicar tu nombre</p>");
                    $('#name').focus();
                    $('#kv-avatar-errors').show();
                    return false;
                }
                if ($('#lastname').val() == '') {
                    fileinpu.fileinput('clear');
                    $('#kv-avatar-errors').html("<p>Te olvidaste de indicar tu apellido</p>");
                    $('#lastname').focus();
                    $('#kv-avatar-errors').show();
                    return false;
                }
                $('#kv-avatar-errors').html("");
                $('#kv-avatar-errors').hide();
                return true;
            }

            function confirmAndReset(response) {
                $('#name').val('');
                $('#lastname').val('');
                $('#kv-avatar-errors').removeClass("alert-danger");
                $('#kv-avatar-errors').addClass("alert-success");
                $('#kv-avatar-errors').html("<p> " + response.name + " Gracias por confirmarnos tu presencia </p>");
                $('#kv-avatar-errors').show();
                setTimeout(
                        function () {
                            $('#kv-avatar-errors').hide();
                            $('#kv-avatar-errors').addClass("alert-danger");
                            $('#kv-avatar-errors').removeClass("alert-success");
                            fileinpu.fileinput('clear');
                        }, 5000);

                return true;
            }

            function showError() {

            }

            var me = {};
            me.avatar = "/invite/img/novio.jpg";

            var you = {};
            you.avatar = "/invite/img/novia.jpg";

            function formatAMPM(date) {
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12; // the hour '0' should be '12'
                minutes = minutes < 10 ? '0' + minutes : minutes;
                var strTime = hours + ':' + minutes + ' ' + ampm;
                return strTime;
            }

            //-- No use time. It is a javaScript effect.
            function insertChat(who, text, time) {
                if (time === undefined) {
                    time = 0;
                }
                var control = "";
                var date = formatAMPM(new Date());

                if (who == "me") {
                    control = '<div class="message received">' +
                            text +
                            '<span class="metadata"><span class="time">' + date + '</span></span>' +
                            '</div>';
                } else {
                    control = '<div class="message sent">' +
                            text +
                            '<span class="metadata">' +
                            '<span class="time">' + date + '</span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg></span>' +
                            '</span>' +
                            '</div>';
                }
                setTimeout(
                        function () {
                            $("div.conversation-container").append(control).scrollTop($("div.conversation-container").prop('scrollHeight'));
                        }, time);

            }

            function resetChat() {
                $("div.conversation-container").empty();
            }

            $(".mytext").on("keydown", function (e) {
                if (e.which == 13) {
                    var text = $(this).val();
                    if (text !== "") {
                        insertChat("me", text);
                        $(this).val('');
                    }
                }
            });

            $('body > div > div > div:nth-child(2) > span').click(function () {
                $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
            })

            resetChat();

            function startChat() {
                $('div.site').hide();
                $('div.page').show();
                resetChat();
                insertChat("me", "Lulindi...", 0);
                insertChat("you", "Hola Tatito, como estas?", 1500);
                insertChat("me", "bien, acá... ", 3500);
                insertChat("me", "che... estaba pensando...", 4500);
                insertChat("me", "Te querés casar conmigo?", 5500);
                insertChat("you", "...", 7000);
                insertChat("you", "Vos estás loco?", 9000);
                insertChat("me", "<svg style='width:24px;height:24px' viewBox='0 0 24 24'><path fill='#000000' d='M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C8.17,3 8.82,3.12 9.44,3.33L13,9.35L9,14.35L12,21.35V21.35M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L11,14.35L15.5,9.35L12.85,4.27C13.87,3.47 15.17,3 16.5,3Z' /></svg>", 10000);
                insertChat("me", "que? como? pero, para, porque...", 11000);
                insertChat("you", "Era chiste!", 12000);
                insertChat("you", "Obvio que si.", 13000);
                insertChat("me", ":) :) :)", 13500);
                insertChat("me", "Genial! Cuando te parece? Febrero está ok?", 15000);
                insertChat("you", "Si, me encanta, Cuando abren el parque de Star Wars?", 16000);
                insertChat("you", "Panceta viene no?", 18000);
                insertChat("you", "Qué aros me voy a poner?", 20000);
                insertChat("me", "Vemos...", 21000);
                insertChat("me", "Vos encargate de pedirle a todos que confirmen", 21500);
                insertChat("me", "y de que suban fotos lindas", 22000);
                insertChat("you", "Dale, buenisimo!", 23000);
                setTimeout(function () {
                    $('div.site').show();
                    $('div.page').hide();
                }, 26000);
            }

        </script>

        <script>$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body></html>