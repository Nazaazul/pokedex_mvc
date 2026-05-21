<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokédex Equipo</title>
    <style>
       
     body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            padding: 20px; 
            /* Degradado de negro a gris oscuro azulado */
            background: linear-gradient(135deg, #1f1c2c 0%, #928dab 100%);
            min-height: 100vh;
        }
        
        /* Contenedor blanco tipo tarjeta para el contenido */
        .container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 900px;
            margin: 0 auto;
        }

        /* Barra de navegación */
        nav { 
            background: #d32f2f; 
            padding: 15px; 
            margin-bottom: 20px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        nav a { 
            color: white; 
            margin-right: 15px; 
            text-decoration: none; 
            font-weight: bold; 
            padding: 5px 10px;
            border-radius: 4px;
        }
        nav a:hover { background: #b71c1c; }

        /* Estilos de la tabla */
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; vertical-align: middle; }
        th { background-color: #f5f5f5; color: #333; }
        
        /* Estilo para los botones del buscador */
        button, .btn-limpiar {
            padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;
        }
        button { background: #2196F3; color: white; font-weight: bold; }
        .btn-limpiar { background: #9e9e9e; color: white; text-decoration: none; font-weight: bold; margin-left: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="index.php?seccion=listar">🏠 Inicio</a>
            <a href="index.php?seccion=nuevo">➕ Cargar Nuevo</a>
            <a href="index.php?seccion=login" style="float:right;">🔑 Login</a>
        </nav>