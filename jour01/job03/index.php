<?php
$var1 = true;
$var2 = 10;
$var3 = "Vive Laplateforme";
$var4 = 1.234;
echo "<table>
    <thead>
        <tr>
            <th> Type </th>
            
            <th> Nom </th>
            
            <th> Valeur </th>
            
        </tr>
    </thead>";
echo "<tbody>
          <tr>
            <td> booléen </td> 
            <td> var1 </td> 
            <td> " . $var1 ." </td> 
          </tr>
          <tr>
            <td> entier </td> 
            <td> var2 </td> 
            <td> " . $var2 ." </td> 
          </tr>
          <tr>
            <td> chaîne de caractères </td> 
            <td> var3 </td> 
            <td> " . $var3 ." </td> 
          </tr>
          <tr>
            <td> nombre à virgule flottante </td> 
            <td> var4 </td> 
            <td> " . $var4 ." </td>
          </tr>
    </tbody>";
echo "</table>";

