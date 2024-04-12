<?php
// Empfangen des Video-Streams
$video_data = file_get_contents('php://input');

// Wenn Video-Daten empfangen wurden
if ($video_data !== false) {
    // Header setzen, um das Bild als JPEG zu senden
    header('Content-Type: video/mp4');
    // Video-Daten ausgeben
    echo $video_data;
} else {
    // Fehlermeldung ausgeben, wenn keine Daten empfangen wurden
    http_response_code(400);
    echo "Keine Daten empfangen.";
}
?>
