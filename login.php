<?php
session_start();

// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verbindung zur Datenbank herstellen
    $servername = "localhost";
    $username_db = "admin";
    $password_db = "Kennwort0";
    $dbname = "users"; // Name der Datenbank, in der Benutzer gespeichert sind

    $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
    if (!$conn) {
        die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
    }

    // Benutzername und Passwort aus dem Formular abrufen
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL-Abfrage vorbereiten und ausführen
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Anmeldung erfolgreich, Sitzungsvariable setzen
        $_SESSION['username'] = $username;
        // Weiterleitung zur Startseite
        header("location: index.php");
        exit;
    } else {
        // Anmeldung fehlgeschlagen
        $error = "Ungültiger Benutzername oder Passwort";
    }

    // Verbindung schließen
    mysqli_close($conn);
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
