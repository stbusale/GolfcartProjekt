<?php
// Pfad zur JSON-Datei
$jsonFile = 'json/kontakt.json';

// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular abrufen
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Daten in ein Array speichern
    $data = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );

    // Überprüfen, ob die JSON-Datei bereits existiert
    if (file_exists($jsonFile)) {
        // JSON-Datei lesen und vorhandene Daten abrufen
        $existingData = json_decode(file_get_contents($jsonFile), true);

        // Neuen Eintrag hinzufügen
        $existingData[] = $data;

        // JSON-Formatierung
        $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

        // Daten in die JSON-Datei schreiben
        if (file_put_contents($jsonFile, $jsonData)) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        // JSON-Datei erstellen und Daten hinzufügen
        $jsonData = json_encode(array($data), JSON_PRETTY_PRINT);

        // Daten in die JSON-Datei schreiben
        if (file_put_contents($jsonFile, $jsonData)) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
}
?>
