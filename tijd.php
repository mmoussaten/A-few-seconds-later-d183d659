<?php


$seconden = 0;
$minuten = 0;
$uren = 0;
$dagen = 0;
$totaal = 0;

$explInput = explode(" ", $argv[1]);

for ($i = 0; $i < count($explInput); $i++) {
    $split = substr($explInput[$i], -1);
    switch ($split) {
        case "s":
            $seconden = (int) $explInput[$i];
            break;
        case "m":
            $minuten = (int) $explInput[$i] * 60;
            break;
        case "u":
            $uren = (int) $explInput[$i] * 3600;
            break;
        case "d":
            $dagen - (int) $explInput[$i] * 86400;
            break;
    }
    $totaal = $seconden + $minuten + $uren + $dagen;
}
echo $totaal . " seconden" . PHP_EOL;