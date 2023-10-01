<?php
    $a=8;
    $b=6;
    $comp = $a <=> $b;

switch ($comp) {
    case 1:
        echo '$a est supérieur à $b';
        break;
    case 0:
        echo '$a est égal à $b';
        break;
    case -1:
        echo '$a est inférieur à $b';
        break;
    default:
        echo 'Erreur de comparaison';
        break;
}