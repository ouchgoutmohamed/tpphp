<?php
session_start();

$_SESSION['variable1'] = "Valeur dans le script 1";

echo "Variable de session modifiée dans le script 1.";

session_write_close();
?>
