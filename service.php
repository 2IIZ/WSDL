<?php

include_once 'lib/nusoap.php';
require 'functions.php';

$namespace = "urn:demo";

$server = new soap_server();
$server->configureWSDL("demo", $namespace); // name of webservice, namespace
$server->schemaTargetNamespace = $namespace;

$server->register(
          "price", // name of the function in functions.php
          array("name"=>"xsd:string"), // inputs
          array("return"=>"xsd:string"), // outputs
          $namespace
);

$server->register(
        "allUsers",
        array(),
        array("return"=>"xsd:string"),
        $namespace
);

// $server->register(
//         "Db.getAll",
//         array(),
//         array("return"=>"xsd:string"),
//         $namespace
// );

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service(file_get_contents("php://input"));
