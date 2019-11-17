<?php

$workTime = microtime(true);

if (!valuesPresented()) {
    include 'templates/empty-result.html';
    return;
}

$X = $_GET['X_parameter'];
$Y = $_GET['Y_parameter'];
$R = $_GET['R_parameter'];

if ((($X >= 0) && ($Y >= 0) && (($X + $Y) <= $R)) ||
    (($X >= 0) && ($Y <= 0) && ((($X ** 2) + ($Y ** 2)) <= $R)) ||
    (($X <= 0) && ($Y <= 0) && (abs($X) <= $R) && (abs($Y) <= $R))) {
    $hit = 'Да';
} else {
    $hit = 'Нет';
}

$workTime = round(microtime(true) - $workTime, 6);
$workTime = sprintf('%f с', $workTime);

include_once 'templates/result-table.html';

function valuesPresented()
{
    return (isset($_GET['X_parameter'], $_GET['Y_parameter'], $_GET['R_parameter']));
}