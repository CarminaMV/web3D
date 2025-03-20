<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen con Enlace</title>
</head>
<body>
<style>
        /* Estilos para que la imagen ocupe toda la pantalla */
        body, html {
            
            justify-content: center;
            align-items: center;
            
        }
        
        a img {
            width: 100%;
            height: 100vh; /* 100% del alto de la pantalla */
            object-fit: cover; /* Hace que la imagen cubra todo sin deformarse */
        }
    </style>
    <!-- Enlace que contiene la imagen -->
    <a href="pagina-destino.html">
        <img src="alberca.jpg" alt="Descripción de la imagen" width="300">
    </a>

</body>
</html>
