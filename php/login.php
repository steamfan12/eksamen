<?php
session_start();
include 'config.php';
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brukernavn = trim($_POST['brukernavn']);
    $passord = $_POST['passord'];

    $stmt = $conn->prepare("SELECT passord_hash FROM brukere WHERE brukernavn = ?");
    $stmt->bind_param("s", $brukernavn);
    $stmt->execute();
    $stmt->bind_result($hash);
    
    if ($stmt->fetch() && password_verify($passord, $hash)) {
        $_SESSION['brukernavn'] = $brukernavn;
        header("Location: loggetinn.php");
        exit;
    } else {
        echo "Feil brukernavn eller passord.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Logg inn</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="login">
    <form method="post">
        <h2>Logg inn</h2>
        <label for="brukernavn">Brukernavn:</label><br>
        <input type="text" name="brukernavn" required><br><br>
        <label for="passord">Passord:</label><br>
        <input type="password" name="passord" required><br><br>
        <input type="submit" value="Logg inn">
    </form>
</div>
</body>
</html>
