<?php
$puntos = $_POST['puntos'];
$rango;
//En funcion de los puntos obtenidos hasta e gameOver le doy un valor al rango
if($puntos<=30){
    $rango="Eres un paquete sólo has conseguido";
} if (30<$puntos && $puntos<=50) {
    $rango="No está mal has conseguido";
} if (50<$puntos && $puntos<=100) {
    $rango="Bien! has conseguido";
} if ($puntos > 100) {
    $rango="Eres un empollón has conseguido";
}
?>
<div><h1>GAME OVER!</h1></div>
<br>
<!--Paso al h2 el rango y los puntos-->
<div><h2><?php echo $rango.' '.$puntos ?> puntos!!!</h2></div>
<br>
<!--Boton de volver a index.php-->
<div class="form-group"align="center"> 
    <button type="button" onclick="menu()" class="btn btn-success"><h4>volver</h4></button>
</div><br>
<script>
    //Escondo la progressbar 
    $("#barra").hide();
    //Funcion que se carga en el onclick del boton volver y que carga index.php
    function menu(){
        window.location = ('index.php');
    }
</script>