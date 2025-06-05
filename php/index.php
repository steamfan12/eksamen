<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Havgløtt Camping</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <h2>Havgløtt camping</h2>
    <?php include 'header.php';
    include 'config.php';

    $sql = "SELECT bilde_sti FROM attraksjoner ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $bilde_sti = $row['bilde_sti'];
        echo "<div id=bilde>";
        echo "<img src='../" . htmlspecialchars($bilde_sti) . "' alt='Tilfeldig bilde' style='width:300px'>";
        echo "<a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio, repudiandae hic quo id nostrum quis natus provident ea nemo officiis, repellendus amet? Culpa voluptatum odio accusantium corporis maxime sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio, repudiandae hic quo id nostrum quis natus provident ea nemo officiis, repellendus amet? Culpa voluptatum odio accusantium corporis maxime sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio, repudiandae hic quo id nostrum quis natus provident ea nemo officiis, repellendus amet? Culpa voluptatum odio accusantium corporis maxime sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio, repudiandae hic quo id nostrum quis natus provident ea nemo officiis, repellendus amet? Culpa voluptatum odio accusantium corporis maxime sint?</a>";
        echo "</div>";
    } else {
        echo "Ingen bilde funnet.";
    }
?>

<div id="container">
    <div>
        <h3>litt info om oss</h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio, repudiandae hic quo id nostrum quis natus provident ea nemo officiis, repellendus amet? Culpa voluptatum odio accusantium corporis maxime sint?
    </div>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ratione aut odio doloremque laborum reiciendis aperiam hic natus nobis facilis ab maxime ex commodi ut, voluptates id repudiandae optio! Aliquid!

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi molestias numquam cupiditate voluptates quas possimus expedita! Sapiente maxime labore fuga, enim dolorum odio sed a tempora ratione excepturi laborum quod.
        
    </div>

    <div>
        <h3>ofte stilte spørsmål</h3>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, magni optio harum inventore iste eum voluptatem explicabo? Quo et architecto mollitia incidunt quos ad ullam ipsum explicabo, voluptatibus quisquam nobis.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum suscipit repellendus recusandae atque, impedit placeat, optio magnam sed odio dolore rerum harum cupiditate minus repudiandae omnis minima. Laboriosam, neque non?
    </div>

    <div>
        <h3>kontakt info</h3>
        <ul>
            <li>+47 922 968 37</li>
            Havgløtt@hotmail.com
        </ul>
    </div>

    <?php

    ?>
</div>

    <?php include 'config.php';?>
</body>
</html>