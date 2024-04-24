<?php
// Überprüfen, ob eine Sitzung bereits gestartet wurde
if (session_status() == PHP_SESSION_NONE) {
    // Sitzung starten, falls noch nicht gestartet
    session_start();
}

// Verbindung zur Datenbank herstellen und alle Einträge abrufen
$host = 'localhost'; // Ihre Hostadresse
$dbname = 'tagebuch'; // Ihr Datenbankname
$benutzername = 'admin'; // Ihr Datenbank-Benutzername
$passwort = 'Leumas5002'; // Ihr Datenbank-Passwort

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $benutzername, $passwort);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Alle Einträge aus der Datenbank abrufen
    $stmt = $pdo->query("SELECT * FROM Einträge");
    $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Verbindung zur Datenbank fehlgeschlagen ");
}

// Überprüfen, ob Benutzer angemeldet ist
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Weiterleitung zur Index-Seite
    /*header("location: index.php");
    exit;*/
} else {
    // Neue Einträge hinzufügen
    if (isset($_POST['submit_new'])) {
        $datum = $_POST['datum'];
        $eintrag = $_POST['eintrag'];
        $query = "INSERT INTO Einträge (datum, eintrag) VALUES (:datum, :eintrag)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':datum', $datum);
        $stmt->bindParam(':eintrag', $eintrag);
        $stmt->execute();
        // Nach dem Hinzufügen aktualisieren, um die Änderungen anzuzeigen
        header("Refresh:0");
    }

    // Eintrag bearbeiten
    if (isset($_POST['submit_edit'])) {
        $id = $_POST['edit_entry'];
        $neuer_eintrag = $_POST['neuer_eintrag'];
        $query = "UPDATE Einträge SET eintrag = :neuer_eintrag WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':neuer_eintrag', $neuer_eintrag);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // Nach dem Bearbeiten aktualisieren, um die Änderungen anzuzeigen
        header("Refresh:0");
    }

    // Eintrag löschen
    if (isset($_POST['delete'])) {
        $id = $_POST['delete_entry'];
        $query = "DELETE FROM Einträge WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // Nach dem Löschen aktualisieren, um die Änderungen anzuzeigen
        header("Refresh:0");
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenbankverwaltung</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 0px;
        }
        .accordion-item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Einträge verwalten</h1>

        <div class="accordion mt-3" id="accordionExample">
            <!-- Alle Einträge -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Alle Einträge
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Hier den Code für die Anzeige aller Einträge einfügen -->
                        <ul class="list-group">
                            <?php foreach ($entries as $entry): ?>
                                <li class="list-group-item">Datum: <?php echo $entry['datum']; ?> - Eintrag: <?php echo $entry['eintrag']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <?php if(isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
            <!-- Neuen Eintrag hinzufügen -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Neuen Eintrag hinzufügen
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Hier den Code für das Formular zum Hinzufügen eines neuen Eintrags einfügen -->
                        <form method="post">
                            <!-- Formular zum Hinzufügen eines neuen Eintrags -->
                            <div class="mb-3">
                                <label for="datum" class="form-label">Datum:</label>
                                <input type="date" id="datum" name="datum" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="eintrag" class="form-label">Eintrag:</label>
                                <textarea id="eintrag" name="eintrag" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" name="submit_new" class="btn btn-primary">Eintrag hinzufügen</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Eintrag bearbeiten -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Eintrag bearbeiten
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Hier den Code für das Formular zum Bearbeiten eines Eintrags einfügen -->
                        <form method="post">
                            <!-- Formular zum Bearbeiten eines vorhandenen Eintrags -->
                            <div class="mb-3">
                                <label for="edit_entry" class="form-label">Eintrag auswählen:</label>
                                <select class="form-select" id="edit_entry" name="edit_entry" required>
                                    <option selected disabled>Wähle einen Eintrag</option>
                                    <?php foreach ($entries as $entry): ?>
                                        <option value="<?php echo $entry['id']; ?>"><?php echo $entry['datum'] . " - " . $entry['eintrag']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="neuer_eintrag" class="form-label">Neuer Eintrag:</label>
                                <textarea id="neuer_eintrag" name="neuer_eintrag" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" name="submit_edit" class="btn btn-primary">Eintrag bearbeiten</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Eintrag löschen -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Eintrag löschen
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Hier den Code für das Formular zum Löschen eines Eintrags einfügen -->
                        <form method="post">
                            <!-- Formular zum Löschen eines Eintrags -->
                            <div class="mb-3">
                                <label for="delete_entry" class="form-label">Eintrag auswählen:</label>
                                <select class="form-select" id="delete_entry" name="delete_entry" required>
                                    <option selected disabled>Wähle einen Eintrag</option>
                                    <?php foreach ($entries as $entry): ?>
                                        <option value="<?php echo $entry['id']; ?>"><?php echo $entry['datum'] . " - " . $entry['eintrag']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" name="delete" class="btn btn-danger">Eintrag löschen</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
