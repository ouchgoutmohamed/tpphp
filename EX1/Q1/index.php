<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un fichier PDF</title>
</head>
<body>
    <?php
      // Vérifie si la requête est de type POST (après soumission du formulaire)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         // Récupère l'extension du fichier
        $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // Vérifie si l'extension est différente de "pdf"
        if (strtolower($fileExtension) != "pdf") {
            echo "Seuls les fichiers PDF sont autorisés.";
        } 
        // Vérifie si la taille du fichier dépasse 1Mo
        elseif ($_FILES['file']['size'] > 1000000) { 
            echo "Le fichier ne doit pas dépasser 1Mo.";
        } 
         // Si le fichier est un PDF et sa taille est inférieure à 1Mo, le télécharge dans le dossier "uploads"
        else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
            echo "Le fichier a été téléchargé avec succès.";
        }
    }
    ?>
    <!-- Formulaire permettant d'envoyer un fichier PDF -->
    <form action="" method="post" enctype="multipart/form-data">
         <!-- Champ permettant de sélectionner un fichier PDF -->
        <label for="file">Sélectionner un fichier PDF :</label>
        <input type="file" name="file" accept=".pdf" required>
         <!-- Bouton d'envoi du formulaire -->
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
