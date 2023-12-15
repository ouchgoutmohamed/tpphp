<?php
// Démarre une nouvelle session ou reprend la session existante
session_start();
// Détruit toutes les données de session
session_destroy();


// Affiche un message indiquant que la session a été détruite avec succès
echo "Session détruite avec succes.";
?>
