<?php
session_start();

// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Benutzername und Passwort überprüfen
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'Leumas5002') {
        // Anmeldung erfolgreich, Sitzungsvariable setzen
        $_SESSION['username'] = $_POST['username'];
        // Weiterleitung zur Startseite
        header("location: index.php");
        exit;
    } else {
        // Anmeldung fehlgeschlagen
        $error = "Ungültiger Benutzername oder Passwort";
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Login</h1>
        <form method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Benutzername:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwort:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Anmelden</button>
            <?php if(isset($error)) { ?>
                <div class="text-danger"><?php echo $error; ?></div>
            <?php } ?>
        </form>
    </div>
</body>
</html>
