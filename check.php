<?php

$workTime = microtime(true);

if (!valuesPresented()) {
    include 'templates/empty-result.html';
    return;
}

$X = $_GET['X-parameter'];
$Y = $_GET['Y-parameter'];
$R = $_GET['R-parameter'];

if (( ($X >= 0) && ($Y >= 0) && ((-1 * $X) <= $R)) ||
    ( ($X <= 0) && ($Y <= 0) && (abs( $X ) <= $R) && (abs( $Y ) <= $R) ) ||
    ( ($X >= 0) && ($Y <= 0) && ($Y <= -0.5*$X + 0.5*$R) )) { /* Последнюю формулу нужно проверить, я в ней очень не уверен */
    $hit = "Да";
} else {
    $hit = "Нет";
}

$workTime = round(microtime(true) - $workTime, 6);
$workTime = sprintf('%f с', $workTime);

include_once 'templates/result-table.html';

function valuesPresented() {
    return (isset($_GET['X-parameter'], $_GET['Y-parameter'], $_GET['R-parameter']));
}