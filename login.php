<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
        <form action="auth/loginfunctie.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="Username" id="username" required>
            <label for="password">Password</label>
            <input type="password" name="Password" id="password" required>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>