<?php
//pasamos el tema ya que lo necesitaremos para las preguntas
$tema = $_POST['tema'];
?>
<!--CARGO LOS BOTONES DEL TIPO DE JUEGO-->
<br>
                    <h2>Elige un tipo de juego</h2>
                    <br>
<div  class="botonesMenu">
                        <form role="form" class="form-horizontal">
                            <div class="form-group"align="center"> 
                                <button type="button" style="color:#404040; background:#40e0d0" onclick="clasico()" class="btn btn-success btn-block"><h4>Clásico</h4></button>
                            </div>
                            <div class="form-group"align="center"> 
                                <button type="button" style="color:#404040; background:#40e0d0" onclick="cronometrado()" class="btn btn-success btn-block"><h4>Cronometrado</h4></button>
                            </div>
                            
                        </form>
                    </div>
                     <br>
<script>
    //convierto la variable tema en variable php para pasarla con load 
    //y cargo la fucion correspondiente. Paso el tipo de juego para poder modifical el HUD
    var temaElegido =""+<?php echo json_encode($tema) ?>;
    function cronometrado(){
        $("#botones").load("preguntas.php",{
            tema:temaElegido,
            juego:"crono"
        }
        
        );
    }
    function clasico(){
        $("#botones").load("preguntas.php",{
            tema:temaElegido,
            juego:"clasic"
        }
        
        );
    }
    </script>