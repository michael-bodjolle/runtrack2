<?php
session_start();

if (isset($_POST["reset"])) 
{
    $_SESSION["nbvisites"] = 0;
}
if (empty($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
}

if (isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"]++;
}
echo $_SESSION["nbvisites"];
?>

<form action="index.php" method="POST">
    <input type="submit" value="reset" name="reset"> 
</form>