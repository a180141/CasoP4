<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$cliente=new SoapClient(
    null,array(
        'location'=>'http://localhost/Casop4SOAP/usuario.php',
        'uri'=>'http://localhost/Casop4SOAP/usuario.php',
        'trace'=>1
    )
);
try {
  $respuesta=$cliente-> __soapCall('ModificarRestaurante',[$id,$nombre,$direccion,$telefono]);//permite mandar a llamar el metodo
  echo $respuesta;

} catch(SOAPFault $e) {
    echo 'error='.$e->getMessage();
}
?>