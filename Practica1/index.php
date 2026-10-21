<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>

    <?php

    // Mostrem el missatge quan el formulari s'ha enviat correctament.
    if (!empty($missatge)) {
        echo "<p>" . $missatge . "</p>";
    }

    // Mostrem els errors que hi hagi hagut durant la validació.
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }
    }

    ?>

    <!-- Formulari que envia les dades a formulari.php mitjançant POST -->
    <form action="formulari.php" method="post">

        <label for="nom">Nom:</label>
        <input
            type="text"
            id="nom"
            name="nom"
            placeholder="Nom"
            value="<?php echo htmlspecialchars($nom ?? ''); ?>">

        <br>

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            value="<?php echo htmlspecialchars($email ?? ''); ?>">

        <br>

        <label for="text">Text:</label>
        <textarea
            id="text"
            name="text"
            placeholder="Text"><?php echo htmlspecialchars($text ?? ''); ?></textarea>

        <input type="submit" name="btn-enviar" value="Enviar">

    </form>

</body>

</html>