<?php
session_start();
include('funciones.php');
$conexion = conectaBBDD();
$tema = $_SESSION['temaSesion'];
$juego = $_SESSION['juego'];
$correcto = $_POST['correcto'];
$puntos = $_POST['puntos'];
$vidas = $_POST['vida'];
$icono = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';

//Bucle for que carga las estrellas en funcion del numero de vidas
echo'<div class="col-sm-6">';
if($juego=="clasic"){
echo'<h2>Vidas</h2>';
echo '<p><h3>';
for ($i = 1; $i <= $vidas; $i++) {
    echo $icono;
}
echo '</p></h3>';
}
echo '</div><div class="col-sm-6"><h2>Puntos</h2><h2>' . $puntos.'</h2></div>';

$color = "success";
$colorR1 = "default";
$colorR2 = "default";
$colorR3 = "default";
$colorR4 = "default";
$gana = "Correcto!";
//Hay que crear una variable de session con el tema

if (($correcto === "si") || ($correcto === "nueva")) {
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
} else {
    //asocio el numero de la pregunta a la pregunta correcta
    $numero = $_POST['pregunta'];
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
    echo'<br>';
    //Descomentar la fila de abajo para entrar en modo prueba y ver la respuesta correcta
//        echo $respuesta;
    //Compruebo la respuesta correcta 
    if ($correcto == "no") {
//Si no es correcta devuelvo el boton danger y señalo la correcta
        $color = "danger";
        $gana = "Incorrecto! La respuesta correcta es:";
        if ($respuesta == 1) {

            $rCorrecta = $r1;
        } else if ($respuesta == 2) {

            $rCorrecta = $r2;
        } else if ($respuesta == 3) {

            $rCorrecta = $r3;
        } else if ($respuesta == 4) {

            $rCorrecta = $r4;
        }
        //Cargo los botones de respuesta incorrecta con la respuesta correcta
        echo '<div id="botones">
    <form role="form" class="form-horizontal">
   
                    <div class="form-group"align="center"> 
                <button type="button" class="btn btn-' . $color . ' btn-block"><h5>' . $gana . '</h5></button>
                    </div>
            <div class="form-group"align="center"> 
                <button type="button"  class="btn btn-default btn-block"><h5>' . $rCorrecta . '</h5></button>
                    </div>
 
                     <div class="form-group"align="center"> 
            <button type="button" onclick="continuar()" class="btn btn-warning "><h5>Continuar</h5></button>
                     </div>
                </form>
        </div>';
        //Estos son los botones que se cargan despues de una respuesta incorrecta
    } else if ($correcto == "nueva") {
        echo '<div id="botones">
    <form role="form" class="form-horizontal">
    <div class="form-group"align="center"> 
   
                <center><button type="button"  class="btn" style="background:#ba55d3"><h5>' . $pregunta . '</h5></button><center>
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
        //Estos son los botones que se cargan cuando acierto una pregunta
    } else if ($correcto == "si") {
        echo '<div id="botones">
    <form role="form" class="form-horizontal">
    
                     <div class="form-group" align="center"> 
                <button type="button" class="btn btn-' . $color . ' btn-block"><h5>' . $gana . '</h5></button>
                    </div>
                    <div class="form-group" align="center"> 
              <button  class="btn" type="button" style="background:#ba55d3" ><h5>' . $pregunta . '</h5></button>
                    </div>
            <div class="form-group" align="center"> 
                <button type="button" onclick="comprueba(' . $respuesta . ',1)" class="btn btn-default btn-block"><h5>' . $r1 . '</h5></button>
                    </div>
        <div class="form-group" align="center"> 
                    <button type="button" onclick="comprueba(' . $respuesta . ',2)" class="btn btn-default btn-block"><h5>' . $r2 . '</h5></button>
                     </div>
        <div class="form-group" align="center"> 
            <button type="button" onclick="comprueba(' . $respuesta . ',3)" class="btn btn-default btn-block"><h5>' . $r3 . '</h5></button>
                     </div>
       <div class="form-group" align="center"> 
            <button type="button" onclick="comprueba(' . $respuesta . ',4)" class="btn btn-default btn-block"><h5>' . $r4 . '</h5></button>
                     </div>
                </form>
        </div>';
    }
}
?><br>
<br>

<script>
    var contador =<?php echo $puntos; ?>;
    //convierto en variables js las variales del tipo del juego y el número 
    //de pregunta correcta
    var vidas = ""+<?php echo json_encode($vidas); ?>;
    var numero = ""+<?php echo json_encode($numero); ?>;
    var juego = ""+<?php echo json_encode($juego); ?>;
    if (vidas <= 0) {
        $('#botones').load('gameOver.php',{
            puntos:contador
        });
    }
    //Función que chequea si es correcta o no la pregunta
    // y resta o no vidas y suma o no puntos
    function comprueba(correcta, seleccionada) {
        if (correcta === seleccionada) {

            contador += 10;
            $('#botones').load('recargaRespuesta.php', {
                vida: vidas,
                puntos: contador,
                correcto: "si"
            });

        } else {
            if(juego==="clasic"){
            vidas--;
        }
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
    //Funcion asociada al botón continuar que aparece al fallar una pregunta
    //pasa las variables y recarga las preguntas 
    function continuar() {
        $('#botones').load('recargaRespuesta.php', {
            vida: vidas,
            puntos: contador,
            correcto: "nueva",
            pregunta: numero
        });
    }
</script>




