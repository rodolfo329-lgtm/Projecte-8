<?php
$nom = "Andres";
$data = date("d/m/Y");
$missatge = "Hola $nom, benvingut a la teva targeta personal!";
$imatge = "https://via.placeholder.com/150"; // Pots posar una URL o ruta local
?>
<!DOCTYPE html>
<html>
<head>
    <title>Targeta Personal</title>
    <style>
        .targeta {
            border: 2px solid #333;
            padding: 20px;
            width: 300px;
            text-align: center;
            font-family: Arial;
        }
        .targeta img {
            width: 100px;
            height: auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="targeta">
        <img src="<?php echo $imatge; ?>" alt="Foto">
        <h2><?php echo $nom; ?></h2>
        <p><?php echo $data; ?></p>
        <p><?php echo $missatge; ?></p>
    </div>
</body>
</html>
