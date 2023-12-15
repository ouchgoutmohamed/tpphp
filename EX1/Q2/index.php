<?php
// Créer un cookie qui expire dans 10 jours
setcookie("monCookie", "Hello world", time() + (10 * 24 * 3600), "/");
echo "Cookie créé avec succès.";
?>
