<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("app/header.php") ?>
    <!-- estilos locales -->
    <link rel="stylesheet" href="css/login.css" />
    <!-- js local -->
    <script src="js/app.js"></script>
    <script src="js/login.js"></script>
</head>

<body>
    <div class="container">
        <form class="form-signin" action="index.php" method="POST" autocomplete="off">
            <h1 class="form-signin-heading">Donut Store</h1>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required autofocus="" />
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required />

            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        </form>
        <!-- <p class="text-center sign-up"><strong><a href="registrar.php">Registrate</a></strong> como un nuevo usuario</p> -->
    </div>
</body>

</html>