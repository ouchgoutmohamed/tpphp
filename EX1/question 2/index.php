<?php
setcookie("Cookie", "Hello world", time() + (10 * 24 * 3600), "/");
echo "Cookie créé avec succès.";
?>
