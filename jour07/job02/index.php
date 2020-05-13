<?php
// setcookie("nbvisites");
setcookie ("nbvisites",$value = 0) ;

if (isset($_POST["reset"])) 
{
    $_COOKIE["nbvisites"] = 0;
}
if (empty($_COOKIE["nbvisites"])) {
    $_COOKIE["nbvisites"] = 0;
}

if (isset( $_COOKIE["nbvisites"])) {
    $_COOKIE["nbvisites"]++;
}
echo $_COOKIE["nbvisites"];

?>

<form action="index.php" method="POST">
    <input type="submit" value="reset" name="reset"> 
</form>