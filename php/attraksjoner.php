<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attraksjoner</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="container">
    <h2>Attraksjoner</h2>
    <?php include 'header.php';?>
    <div>
        <h3>Attraksjonene våre</h3>
        
    </div>
    <div>
    <?php 
    include 'config.php';
    $sql = "SELECT id, navn, beskrivelse, pris, bilde_sti FROM attraksjoner";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>" . $row["navn"] . "</h2>";
    echo "<p>" . $row["beskrivelse"] . "</p>";
    echo "<p>Pris: " . $row["pris"] . " kr</p>";
    echo "<img src='../" . $row["bilde_sti"] . "' alt='" . $row["navn"] . "' style='width:200px'><br>";
    echo "</div><hr>";
  }
} else {
  echo "Ingen attraksjoner funnet.";
}?>
    </div>
    <div>
        <h3>kontakt info</h3>
        <ul>
            <li>+47 922 968 37</li>
            <a>Havgløtt@hotmail.com</a>
        </ul>
    </div>

    <?php

    ?>
</div>

    <?php include 'config.php';?>
</body>
</html>