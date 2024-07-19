<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Gianluigi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Su di me</h1>
        <h2>Gianluigi Turrà</h2>
        <p>Email: gianluigi.turra@gmail.com</p>
        <p>Telefono: 3202299477</p>
        <h3>Web developer</h3>
        <ul>
            <?php
            $experiences = file_get_contents('data/experiences.txt');
            echo nl2br($experiences);
            ?>
        </ul>
        <h3>Progetti</h3>
        <?php include 'projects.php'; ?>
    </div>
</body>
</html>
