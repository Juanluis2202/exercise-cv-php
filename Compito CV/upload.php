<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV aggiornato</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>CV Aggiornato</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="experiences">Esperienze Lavorative:</label><br>
            <textarea name="experiences" id="experiences" rows="10" cols="50"></textarea><br>
            <input type="submit" name="submit" value="Carica">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $experiences = $_POST['experiences'];
            file_put_contents('data/experiences.txt', $experiences);
            echo "<p>Dati caricati con successo!</p>";
        }
        ?>
    </div>
</body>
</html>
