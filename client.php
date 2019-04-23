<?php

$opts = array(
          'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
      );

  $client = new SoapClient("http://localhost/WSDL/service.php?wsdl",
    array('encoding' => 'UTF-8',
          'verifypeer' => false,
          'verifyhost' => false,
          'soap_version' => SOAP_1_1,
          'trace' => 1,
          'exceptions' => 1,
          "connection_timeout" => 180,
          'stream_context' => stream_context_create($opts)));


var_dump($client->__getFunctions()); // show all functions in the WSDL

var_dump($client->__soapCall('price', array('name'=>'def')));

 ?>
