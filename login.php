<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="loginPost.php" method="POST">
        <!-- EMAIL -->
        <label for="email">Adresse email :</label>
        <input type="email" name="email" required/><br><br>

        <!-- PASSWORD -->
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required/><br><br>

        <!-- BUTTON -->
        <input type="submit" value="Se connecter"/>
    </form>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>