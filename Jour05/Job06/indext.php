<?php

function leetspeak($str)
{
    $alphabet = ["a", "b", "e", "g", "l", "s", "t", "A", "B", "E", "G", "L", "S", "T"];
    $chiffre = ["4", "8", "3", "6", "1", "5", "7","4", "8", "3", "6", "1", "5", "7"];
    return str_replace ($alphabet, $chiffre, $str );
}
echo leetspeak("Aller");
