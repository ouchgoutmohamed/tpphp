<?php
// Démarre une nouvelle session ou reprend la session existante
session_start();

// Modifie la variable de session dans le script 1
$_SESSION['variable1'] = "Valeur dans le script 1";

// Affiche un message indiquant la modification de la variable de session
echo "Variable de session modifiée dans le script 1.";

// Enregistre les changements de la session et ferme la session
session_write_close();
?>
