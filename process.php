<?php 


$payloads = [];
foreach ($_GET as $key => $value) { 

    array_push($payloads,[$key => $value]);
}

$payloads = json_encode($payloads);
var_dump($payloads);


$myfile = fopen("database.txt", "w") or die("Unable to open file!");
$txt = $payloads;
fwrite($myfile, $txt);
fclose($myfile);
