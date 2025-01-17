<?php
// Lade die Konfiguration
$config = include('includes/config.php');

// Sicherstellen, dass die Konfiguration geladen wird und ein Array ist
if (!is_array($config)) {
    die('Konfigurationsdatei konnte nicht geladen werden.');
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenSimulator Webinterface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: <?= $config['theme']['font_family']; ?>;
            font-size: <?= $config['theme']['font_size']; ?>;
            <?php if ($config['theme']['background_type'] === 'color') : ?>
                background-color: <?= $config['theme']['background_color']; ?>;
            <?php elseif ($config['theme']['background_type'] === 'image') : ?>
                background-image: url('assets/img/<?= $config['theme']['background_image']; ?>');
                background-size: cover;
                background-repeat: no-repeat;
            <?php endif; ?>
        }
        .custom-primary {
            background-color: <?= $config['theme']['primary_color']; ?>;
            color: #fff;
        }
        .custom-secondary {
            background-color: <?= $config['theme']['secondary_color']; ?>;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include('templates/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <?php include('templates/navleft.php'); ?>
            </div>
            <div class="col-8">
                <!-- Hauptinhalt hier -->
                <h1>Willkommen im OpenSimulator Webinterface</h1>
                <p>Hier können Sie die virtuelle Welt verwalten.</p>
            </div>
            <div class="col-2">
                <?php include('templates/navright.php'); ?>
            </div>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
