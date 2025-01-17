<?php
$config = include('includes/config.php');

// Sicherstellen, dass die Konfigurationsvariable existiert und ein Array ist
if (!is_array($config) || !isset($config['layout']['footer'])) {
    die('Footer-Konfiguration konnte nicht geladen werden.');
}

include($config['layout']['footer']);
?>
