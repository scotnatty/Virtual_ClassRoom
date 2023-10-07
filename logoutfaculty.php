<?php
session_start();
?>
<?php
$_SESSION["fidx"]=="";
session_unset();
header('Location:index.php');
?>