<?php
$nombre = 0 ;
while($nombre <= 100)
{
    if($nombre % 3 == 0 && $nombre != 0 && $nombre % 5 == 0 )
    {
        echo "FizzBuzz" ;
    }
    else if($nombre % 3 == 0 && $nombre != 0 ){
       
        echo "Fizz" ;
     
    }
    else if($nombre % 5 ==  0 && $nombre != 0 )
    {
        echo "Buzz" ;
    }

    else
    {
        echo $nombre ;
    }
        echo "<br>" ;
    
   
    $nombre = $nombre+1;
}
?>