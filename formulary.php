<?php
$NOM=$_POST["Nombre"];
$AP=$_POST["Apellido"];
$TEl=$_POST["Telef"];
$COR=$_POST["Correo"];
$ASUNT=$_POST["Asunt"];
$COR=$_POST["Mensaje"];

if($NOM=="" || $NOM==null || $AP=="" || $AP==null || $TEl=="" || $TEl==null || $COR=="" || $COR==null || $ASUNT=="" || $ASUNT==null || $COR=="" || $COR==null){
    echo "Ingrese la información correspondiente en cada casilla.";
} else {
    echo "Formulario recibido";
}

?>