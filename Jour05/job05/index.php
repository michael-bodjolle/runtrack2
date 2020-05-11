<?php
$str = "occurrances" ;
function occurrences ($str, $char)
{
    return substr_count ($str,$char ) ;
} 
echo occurrences ("occurrances", "r") ;

?>