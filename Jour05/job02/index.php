<?php
function bonjour($jr)
{
    if ($jr == TRUE) {
        echo "bonjour ";
    } elseif ($jr == FALSE) {
        echo "bonsoir";
    }
}
bonjour(0);
