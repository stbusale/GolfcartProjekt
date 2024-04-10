<?php
// Überprüfen, ob eine Sitzung bereits gestartet wurde
if (session_status() == PHP_SESSION_NONE) {
    // Sitzung starten, falls noch nicht gestartet
    session_start();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team ZIB</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Team ZIB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=tagebuch.php">Tagebuch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=auto.php">Auto</a>
        </li>
        <?php
    // Überprüfen, ob der Benutzer angemeldet ist und die erforderlichen Berechtigungen hat
    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
        // Menüpunkt nur anzeigen, wenn der Benutzer angemeldet ist und die Berechtigungen hat
        echo '
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=steuerung.php">Steuerung</a>
        </li>';
    }
    ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=kontakt.php">Kontakt</a>
        </li>
      </ul>

      <?php
      // Überprüfen, ob Benutzer angemeldet ist
      if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
          // Wenn Benutzer angemeldet ist, den Logout-Button anzeigen
          echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                </ul>';
      } else {
          // Wenn Benutzer nicht angemeldet ist, den Login-Button anzeigen
          echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                </ul>';
      }
      ?>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container mt-4">
    <?php
    // Standardseite, wenn keine Seite ausgewählt ist
    $page = isset($_GET['page']) ? $_GET['page'] : 'startseite.php';
    
    // Seiteninhalt einbinden
    include($page);
    ?>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
