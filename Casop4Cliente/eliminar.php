<?php
$id=$_POST['id'];
$cliente=new SoapClient(
    null,array(
        'location'=>'http://localhost/Casop4SOAP/usuario.php',
        'uri'=>'http://localhost/Casop4SOAP/usuario.php',
        'trace'=>1
    )
);
try {
  $respuesta=$cliente-> __soapCall('EliminarRestaurante',[$id]);//permite mandar a llamar el metodo
  echo $respuesta;

} catch(SOAPFault $e) {
    echo 'error='.$e->getMessage();
}
?>