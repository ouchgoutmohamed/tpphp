<?php
// Vérifie si le cookie 'selected_color' existe
if (isset($_COOKIE['selected_color'])) {
    // Récupère la couleur sélectionnée depuis le cookie
    $selectedColor = $_COOKIE['selected_color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        body {
            background-color: <?php echo $selectedColor; ?>;
        }
    </style>
</head>
<body>

</body>
</html>