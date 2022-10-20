<?php
    $cliente=new SoapClient(
        null,array(
            'location'=>'http://localhost/Casop4SOAP/usuario.php',
            'uri'=>'http://localhost/Casop4SOAP/usuario.php',
            'trace'=>1
        )
    );
    try {
      $respuesta=$cliente-> __soapCall('ObtenerRestaurante',[]);//permite mandar a llamar el metodo
      $result=json_encode($respuesta);
      var_dump($result);
    } catch(SOAPFault $e) {
        echo 'error='.$e->getMessage();
    }
?>