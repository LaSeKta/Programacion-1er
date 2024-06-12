<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sekta</title>
    <style>
        body {
            background-color: #e0f7fa;
            color: #00796b;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            text-align: center;
        }
        header, main, footer {
            margin: 20px 0;
        }
        h2 {
            color: #004d40;
        }
        label {
            color: #004d40;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        button {
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #004d40;
        }
        a {
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        a:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        </header>
        <main>
            <section>
                <h2>Hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aperiam dolores deserunt. Cumque voluptate, explicabo tenetur in assumenda porro quisquam aliquam! Fugit voluptas adipisci, blanditiis obcaecati numquam temporibus porro distinctio!</p>
            </section>
            <section>
                <h2>Conexion</h2>
                    <p>Testear Conexión a la Base de Datos:</p>
                    <a  href="conexionbd/conexion.php" >Testear</a>
            </section>
            <section>
                <h2>Cierra sesion</h2>
                <a href="login/logout.php">Cerrar sesión</a>
            </section>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>
