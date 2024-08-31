<?php
// Enregistrement de la visite dans un fichier log
$logFile = "redirect_log.txt";
$logEntry = date("Y-m-d H:i:s") . " - Redirected to YouTube\n";
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Redirection vers la chaîne YouTube
$youtubeUrl = "https://www.youtube.com/votre-chaine"; // Remplacez par l'URL de votre chaîne
header("Location: " . $youtubeUrl);
exit();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection vers YouTube</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Redirection en cours...</h1>
        <p>Vous allez être redirigé vers notre chaîne YouTube dans quelques secondes.</p>
    </div>

    <script src="script.js"></script>

    <?php
    // Délai de 5 secondes avant la redirection (si nécessaire)
    header("refresh:5;url=$youtubeUrl");
    ?>
</body>
</html>


