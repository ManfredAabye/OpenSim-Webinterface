<?php
$config = include('includes/config.php');

// Sicherstellen, dass die Konfigurationsvariable existiert und ein Array ist
if (!is_array($config) || !isset($config['layout']['header'])) {
    die('Header-Konfiguration konnte nicht geladen werden.');
}

include($config['layout']['header']);
?>
