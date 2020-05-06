<?php

$str= "Tous ces instants seront perdus dans le temps comme des larmes sous la pluie." ;
foreach ( str_split ($str) as $k => $value )  
{   
    if ( $k % 2 == 0 )
    {
        echo "" ;
    
    }
    else 
    {
        echo $value ;
    }
 
}
  
?>