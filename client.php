<?php
ini_set("soap.wsdl_cache_enabled", "0");

$opts = array(
          'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
      );

$client = new SoapClient("http://localhost/WSDL/service.php?wsdl",
  array('encoding' => 'UTF-8',
        'trace' => 1,
        'exeptions' => 0,
        'soap_version' => SOAP_1_1));

var_dump($client->__getFunctions()); // show all functions in the WSDL

var_dump($client->__soapCall('price', array('name'=>'abc'))); // arguments passed through here
// var_dump($client->__getLastRequestHeaders());
// var_dump($client->__getLastResponse());

var_dump($client->__soapCall('allUsers', array()));
