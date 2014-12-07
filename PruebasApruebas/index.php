


       
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Enigma</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap-progressbar-3.2.0.min.css" rel="stylesheet">
    <link href="css/bootstrap-progressbar-3.2.0.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    </head>
    <body>
        <?php
        ?>

        <!-- Navigation -->
        <a id="menu-toggle" href="#" style="color:#ba55d3" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" style="color:#40e0d0" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a style="color:#ba55d3" href="index.php"> [?¿Enigma¿?]</a>
                </li>
                <li>
                    <a style="color:#40e0d0" href="index.php">Home</a>
                </li>

                <li>
                    <a id="contacto" style="color:#40e0d0" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>

        <!--BOTONES DE LOS TEMAS-->
        <!-- Header -->
        <header id="top" class="header" >
            <div class="text-vertical-center ">
                <div class="fondo">
                    <div  id="botones" class="botonesMenu">
                        <br>   
                        <h1 style="color:#ba55d3">[?¿Enigma¿?]</h1>
                        <h3>El juego que pone a prueba tus conocmientos</h3>
                        <br><br>
                        <!--LISTA DESPLEGABLE CON BOTONES DENTRO-->
                        <div  class="botonesMenu">

                            <button type="button"  class="btn btn-block" style="background:#ba55d3" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1"><h3>Elige un tema</h3></button>

                            <div id="collapseListGroup1" class="panel-collapse collapse"  role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                                <ul class="list-group">
                                    <li class="list-group-item"  style=""><form role="form" class="form-horizontal">
                                            <div class="form-group"align="center"> 
                                                <button type="button" class="btn btn-success btn-block" style="color:#404040; background:#40e0d0" onclick="historia()"><h4>Historia</h4></button>
                                            </div>
                                            <div class="form-group"align="center"> 
                                                <button type="button" style="color:#404040; background:#40e0d0" onclick="lengua()" class="btn btn-success btn-block"><h4>Lengua y Literatura</h4></button>
                                            </div>
                                            <div class="form-group"align="center"> 
                                                <button type="button"style=" color:#404040; background:#40e0d0"  onclick="filosofia()" class="btn btn-success btn-block"><h4>Filosofia</h4></button>
                                            </div>
                                            <div class="form-group"align="center"> 
                                                <button type="button" style=" color:#404040; background:#40e0d0" onclick="economia()" class="btn btn-success btn-block"><h4>Economía</h4></button>
                                            </div>
                                            <div class="form-group"align="center"> 
                                                <button type="button" style=" color:#404040; background:#40e0d0" onclick="ingles()" class="btn btn-success btn-block"><h4>Inglés</h4></button>
                                            </div>

                                        </form>
                                </ul>

                            </div>


                        </div>

                        <br><br>
                    </div>
                    <!--ESTO ES EL PROGRESS BAR PERO LO TENGO ESCONDIDO-->
                    <div id="barra" class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%" data-transitiongoal="100">
                            <span class="sr-only"></span>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- About -->
        <section>

        </section>




        <!-- Call to Action -->
        <aside >
        </aside>






        <!-- Footer -->
        <footer>
            <div class="container"><a id="contact"></a>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h4><strong>Emilio Moreno Orduña</strong>
                        </h4>
                        <p>Contact me!</p>

                        <ul class="list-unstyled">

                            <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:emoord@gmail.com">emoord@gmail.com</a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        <p class="text-muted">Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.1.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-progressbar.js"></script>
        <script>
                                                    // Closes the sidebar menu
                                                    $("#menu-close").click(function (e) {
                                                        e.preventDefault();
                                                        $("#sidebar-wrapper").toggleClass("active");
                                                    });

                                                    // Opens the sidebar menu
                                                    $("#menu-toggle").click(function (e) {
                                                        e.preventDefault();
                                                        $("#sidebar-wrapper").toggleClass("active");
                                                    });

                                                    // Scrolls to the selected menu item on the page
                                                    $(function () {
                                                        $("#contacto").click(function () {
                                                            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                                                                var target = $(this.hash);
                                                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                                                if (target.length) {
                                                                    $('html,body').animate({
                                                                        scrollTop: target.offset().top
                                                                    }, 1000);
                                                                    return false;
                                                                }
                                                            }
                                                        });
                                                    });
        </script>
        <script>
            //Estas funciones cargan el tema seleccionado y lo pasan por post a tipoJuego.php
            $("#barra").hide();
            function historia() {

                $('#botones').load("tipoJuego.php", {
                    tema: "Historia"
                });


            }
            function economia() {

                $('#botones').load("tipoJuego.php", {
                    tema: "Economia"
                });


            }
            function lengua() {

                $('#botones').load("tipoJuego.php", {
                    tema: "Lengua"
                });


            }
            function filosofia() {

                $('#botones').load("tipoJuego.php", {
                    tema: "Filosofia"
                });


            }
            function ingles() {

                $('#botones').load("tipoJuego.php", {
                    tema: "Ingles"
                });


            }

        </script>

    </body>
</html>
