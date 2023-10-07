<?php
session_start();
?>
<?php
$_SESSION["sidx"]=="";
session_unset();
header('Location:index');
?>