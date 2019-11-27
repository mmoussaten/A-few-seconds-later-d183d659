<?php


$staan = "s";
$input = $argv[1];

$plek = strpos ( $input , $staan);
var_dump($plek);

if ($plek == false ) {
    echo "Geen tijd gevonden.";
    exit();
}
$aantalseconden = (int)$input;

echo $aantalseconden . " Seconden";