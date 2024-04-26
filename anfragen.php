<?php

// Prüfen, ob eine Sitzung noch nicht gestartet wurde
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Überprüfen, ob der Benutzer angemeldet ist
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Benutzer ist nicht angemeldet oder hat nicht die erforderlichen Berechtigungen
    // Hier können Sie eine Weiterleitung zur Anmeldeseite oder eine Fehlermeldung einfügen
    header("Location: index.php"); // Beispiel für eine Weiterleitung zur Index-Seite
    exit; // Beenden der weiteren Ausführung des Skripts
}

?>

<?php

// Pfad zur JSON-Datei
$jsonFile = 'json/kontakt.json';

// Überprüfen, ob die JSON-Datei vorhanden ist
if (file_exists($jsonFile)) {
    // JSON-Daten lesen
    $jsonData = file_get_contents($jsonFile);
    // JSON-Daten in ein Array umwandeln
    $anfragen = json_decode($jsonData, true);
} else {
    $anfragen = array(); // Leeres Array, wenn die Datei nicht existiert
}

// Überprüfen, ob ein POST-Request zum Löschen einer Anfrage gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $indexToDelete = $_POST['delete'];
    if (array_key_exists($indexToDelete, $anfragen)) {
        unset($anfragen[$indexToDelete]); // Anfrage löschen
        // Aktualisierte Daten in die JSON-Datei schreiben
        file_put_contents($jsonFile, json_encode($anfragen, JSON_PRETTY_PRINT));
        // Weiterleitung zur aktualisierten Seite, um ein erneutes Absenden des Formulars zu verhindern
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anfragen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Eigene CSS -->
    <link href="styles/startseite.css" rel="stylesheet">
</head>

<header>
    <div class="fade-in zoom no-select">
        <h1 class="main-title">Anfragen</h1>
    </div>
</header>

<body>
    <div class="fade-in zoom container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Nachricht</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($anfragen)): ?>
                        <?php foreach ($anfragen as $index => $anfrage): ?>
                            <tr>
                                <td><?php echo $anfrage['name']; ?></td>
                                <td><?php echo $anfrage['email']; ?></td>
                                <td><?php echo $anfrage['message']; ?></td>
                                <td>
                                    <button onclick="reply('<?php echo $anfrage['email']; ?>')" class="btn btn-primary">Antworten</button>
                                    <form method="post" class="d-inline">
                                        <input type="hidden" name="delete" value="<?php echo $index; ?>">
                                        <button type="submit" class="btn btn-danger">Löschen</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">Es liegen keine Anfragen vor.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="fade-in zoom text-center">
        <img src="images/anfragen.png" alt="Anfragen Bild" class="img-fluid mt-5" style="max-width: 400px; user-select: none; pointer-events: none;" oncontextmenu="return false;">
    </div>

    <script>
        function reply(email) {
            window.location.href = "mailto:" + email;
        }
    </script>
</body>
</html>
