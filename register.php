<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta> name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Inscription</title>
</head>
<body>
  <h1>Inscription</h1>
  <form action="register.php" method="POST">
    <label for="name">Nom : </label>
    <input type="text" name="name" required/><br><br>

    <label for="surname">Prenom : </label>
    <input type="test" name="surname"/><br><br>

    <label for="pseudo">Pseudo : </label>
    <input type="test" name="pseudo"/><br><br>

    <label for="email">Adresse email : </label>
    <input type="email" name="email" required/><br><br>

    <label for="password">Mot de passe : </label>
    <input type="password" name="password" required/><br><br>

    <input type="submit" value="S’inscrire">
  </form>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>