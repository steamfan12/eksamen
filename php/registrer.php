<?php
session_start();


include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brukernavn = trim($_POST['brukernavn']);
    $passord = $_POST['passord'];

    if (!empty($brukernavn) && !empty($passord)) {
        // Sjekk om brukernavnet allerede finnes
        $stmt = $conn->prepare("SELECT id FROM brukere WHERE brukernavn = ?");
        $stmt->bind_param("s", $brukernavn);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 0) {
            // Hash passordet
            $hash = password_hash($passord, PASSWORD_DEFAULT);

            // Sett inn ny bruker
            $stmt = $conn->prepare("INSERT INTO brukere (brukernavn, passord_hash) VALUES (?, ?)");
            $stmt->bind_param("ss", $brukernavn, $hash);
            if ($stmt->execute()) {
                $_SESSION['brukernavn'] = $brukernavn;
                header("Location: loggetinn.php");
                exit;
            } else {
                echo "Noe gikk galt. Vennligst prøv igjen.";
            }
        } else {
            echo "Brukernavnet er allerede i bruk.";
        }
        $stmt->close();
    } else {
        echo "Vennligst fyll ut både brukernavn og passord.";
    }
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrer</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Registrer deg</h2>
    <form method="post" action="">
        <label for="brukernavn">Brukernavn:</label><br>
        <input type="text" id="brukernavn" name="brukernavn" required><br><br>
        <label for="passord">Passord:</label><br>
        <input type="password" id="passord" name="passord" required><br><br>
        <input type="submit" value="Registrer">
    </form>
</body>
</html>
