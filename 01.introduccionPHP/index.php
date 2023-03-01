<?php

#declaraciones
$nombre= "gonzo hizo pierna hoy ";
$numero1= 63;
$boleana=true;
#arreglos
$lista= array("clase 1","clase 2");
echo "primero en la lista: $lista[0] ";
print "<br></br>";

##con propiedades

$miObjeto= array("nombre"=>"gonzalo","Edad"=>22);
echo "$miObjeto[nombre]";


###funciones

function saludo(){
    echo "Hola";
}
saludo();

function despedida($persona){
    echo "Adios ".$persona;
}
despedida("gonzo");

function darAlgo(){
    return "que qeres tuuuuuuuuuuu";
}
echo darAlgo();
?>



