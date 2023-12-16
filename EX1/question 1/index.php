<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un fichier PDF</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
     
        if (strtolower($fileExtension) != "pdf") {
            echo "Seuls les fichiers PDF sont autorisés.";
        } 
        // Vérifie si la taille du fichier 
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
    
    <form action="" method="post" enctype="multipart/form-data">
         <!-- Champ permettant de sélectionner un fichier PDF -->
        <label for="file">Sélect un fichier PDF </label>
        <input type="file" name="file" accept=".pdf" required>
         <!-- Bouton d'envoi du formulaire -->
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
