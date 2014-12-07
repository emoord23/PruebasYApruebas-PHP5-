
<?php
//Sólo Emilio puede realizar cambios aquí
//
//
//Iniciamos la sesion
session_start();
include('funciones.php');
$conexion = conectaBBDD();
$tema = $_POST['tema'];
$juego = $_POST['juego'];
$_SESSION['juego'] = $juego;
$vidas = 3;
$puntos = 0;
if ($juego == "clasic") {
    $icono = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
  echo'<div class="col-sm-6"><h2>Vidas</h2>';
  echo '<p><h3>';
    for ($i = 1; $i <= $vidas; $i++) {
        echo $icono;
    }
    echo '</p></h3></div>';
}

echo '<div class="col-sm-6"><h2>Puntos</h2><h2>0</h2></div>';


if (isset($_POST['tema'])) {
    //Es nesarios crear el tema con variable de sesion para mantener el tema al 
    //recargar los botones
    $_SESSION['temaSesion'] = $tema;
    //en funcion del tema seleccionamos una pregunta random entre el valor de id de las 
    //preguntas de un tema.
    //Uso mt_rand ya que es más eficiente que rand, aconsejado por Dani Casals ;)
    if ($tema == "Historia") {
        $numero = mt_rand(1000, 1128);
    } else if ($tema == "Filosofia") {
        $numero = mt_rand(4000, 4111);
    } else if ($tema == "Lengua") {
        $numero = mt_rand(3000, 3099);
    } else if ($tema == "Economia") {
        $numero = mt_rand(2000, 2105);
    } else if ($tema == "Ingles") {
        $numero = mt_rand(5000, 5092);
    }


    //Hacemos la consulta para cargar las preguntas en funcion del tema seleccionado
    $consulta = $conexion->query("SELECT * FROM Preguntas WHERE tema = '$tema' AND numero = '$numero'");
    $fila = $consulta->fetch_assoc();
    if ($fila) {
        //pasamos a variables los valores del array de la consulta
        $pregunta = $fila['enunciado'];
        $r1 = $fila['r1'];
        $r2 = $fila['r2'];
        $r3 = $fila['r3'];
        $r4 = $fila['r4'];
        $respuesta = $fila['correcta'];
        //Descomentar la fila de abajo para entrar en modo prueba y ver la respuesta correcta
        //echo $respuesta;
        
        //Cargo los botones y les paso a comprueba() el entero del numero de la 
        //pregunta y el entero de la pregunta correcta
        echo '<div>
    <form role="form" class="form-horizontal">
    <div class="form-group"align="center"> 
                <button type="button" class="btn btn-warning btn-block "><h5>Elige la respuesta correcta</h5></button>
                    </div><br>
    <div class="form-group"align="center"> 
                <button  type="button" class="btn" style= " background:#ba55d3"><h5>' . $pregunta . '</h5></button>
                
                    </div>
            <div class="form-group"align="center"> 
                <button type="button" onclick="comprueba(' . $respuesta . ',1)" class="btn btn-default btn-block"><h5>' . $r1 . '</h5></button>
                    </div>
        <div class="form-group"align="center"> 
                    <button type="button" onclick="comprueba(' . $respuesta . ',2)" class="btn btn-default btn-block"><h5>' . $r2 . '</h5></button>
                     </div>
        <div class="form-group"align="center"> 
            <button type="button" onclick="comprueba(' . $respuesta . ',3)" class="btn btn-default btn-block"><h5>' . $r3 . '</h5></button>
                     </div>
       <div class="form-group"align="center"> 
            <button type="button" onclick="comprueba(' . $respuesta . ',4)" class="btn btn-default btn-block"><h5>' . $r4 . '</h5></button>
                     </div>
                </form>
        </div>';
    }
}
?>
<br>

<br>

<script>
    var contador = 0;
    var vidas = 3;
    //convierto en variables js las variales del tipo del juego y el número 
    //de pregunta correcta
    var numero = "" +<?php echo json_encode($numero) ?>;
    var juego = "" +<?php echo json_encode($juego) ?>;
    $("#barra").show();
    //Si es juego cronometrado activo el timeout que ejecutara el gameOver al
    //pasar x milisegundos
    if(juego==="crono"){
        
    var tiempo = setTimeout(function () {
        $('#botones').load('gameOver.php', {
            puntos:contador
        
        });
    }, 60000);
     
    }
/*
 * Funcion que chuequea la pregunta correcta y la seleccionada
 * si coinciden suma 10 puntos y los carga en recargaRespuesta
 * si no, resta vidas
 */
    function comprueba(correcta, seleccionada) {
        
        if (correcta === seleccionada) {

            contador += 10;
            $('#botones').load('recargaRespuesta.php', {
                vida: vidas,
                puntos: contador,
                correcto: "si"
            });

        } else {

            vidas--;
            $('#botones').load('recargaRespuesta.php', {
                vida: vidas,
                puntos: contador,
                correcto: "no",
                pregunta: numero
            });

        }

    }
</script>

<script>
    //si el juego es crono actiba la barra y si no la oculta
   if(juego==="crono"){
    tiempo();
    function tiempo() {
        $('.progress .progress-bar').progressbar();
    }
   }else{
       $('#barra').hide();
   }
</script>

