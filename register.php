<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/auth.cs">
</head>
<body>
    <div class="register-form">
        <h1>Register form</h1>
        <form action="auth/registerfunctie.php" method="post">
            <label for="naam">Naam</label>
            <input type="text" name="Naam" >
            <label for="contact gegevens">Contact gegevens</label>
            <input type="text" name="Contactgegevens">
            <label for="username">Gebruikersnaam *</label>
            <input type="text" name="Username" required>
            <label for="password">Wachtwoord *</label>
            <input type="password" name="Password" required>
            <input type="submit" name="submit" >
        </form>
    </div>
</body>
</html>