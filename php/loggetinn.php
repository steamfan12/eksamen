<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Logget inn</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="container">
        <h2>
            Hei <?php echo htmlspecialchars($_SESSION['brukernavn'] ?? ''); ?>, nå er du logget inn.
        </h2>
    </div>
</body>
</html>
