<?php
session_start();

$_SESSION['variable1'] = "Valeur  script 2";

echo "Variable de session modifiée script 2.";

session_write_close();
?>
