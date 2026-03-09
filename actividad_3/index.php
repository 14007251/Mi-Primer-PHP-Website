<?php
    
    $image_url = 'images/image1.png';
    $img_description = "Imagen Generada por IA";
    $hola_mundo = "Hola Mundo";
    $Nombre = "Soy Jose Carlos Roque Iriarte";
?>

<!DOCTYPE html>
<html lang= "es">
<head>
    <meta charset="UFT-8">
    <title>Activida 3 - PHP Page</title>
    <style>
        body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Esto asegura que NADA se salga de la pantalla */
}
        #column{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: radial-gradient(circle, #c1ff72 0%, #7aa445 100%);
            font-family: sans-serif;
        }

        #image{
            height: 40em;
            width: 60em;
            border-radius: 10px;

        }
    </style>
</head>
<body>
    <div id="column">
        <h1>
            <?= $hola_mundo ?>
        </h1>
        <h2>
            <?= $Nombre ?>
        </h2>
        <img id="image" src="<?= $image_url ?>" alt="<?= $img_description ?>">
    </div>
</body>
</html>