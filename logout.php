<?php
session_start();

// Sitzung beenden
session_unset();
session_destroy();

// Weiterleitung zur Index-Seite
header("location: index.php");
exit;
?>
