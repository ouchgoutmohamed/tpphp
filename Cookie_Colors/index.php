<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer la color</title>
</head>
<body>
    <?php
    // Vérifie si la requête est de type POST (après soumission du formulaire)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupère la couleur sélectionnée dans le formulaire
        $my_color = $_POST['my-color'];
         // Crée un cookie pour stocker la couleur sélectionnée pendant 1 heure
        setcookie('selected_color', $my_color, time() + 3600, '/');
          // Redirige vers la page.php après avoir enregistré la couleur dans le cookie
        header('Location: page.php');
    }
    ?>

    <form method="post" enctype="multipart/form-data">
        <label for="file">Sélectionner la color:</label>
        <input type="color" name="my-color" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
