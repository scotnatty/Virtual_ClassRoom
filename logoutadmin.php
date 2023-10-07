<?php
session_start();
?>
<?php
$_SESSION["umail"]=="";
session_unset();

header('Location:index.php');
?>