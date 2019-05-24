<?php require("sesiones.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("app/header.php") ?>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img class="logo" src="assets/logo.png" />
        <a class="navbar-brand" href="#">
            Donut Store
        </a>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#" onclick="enviarPedido()">Enviar pedido</a>
            <a class="nav-item nav-link" href="#" onclick="verPédido()">Ver mi pedido</a>
            <a class="nav-item nav-link" href="app/salir.php">Salir </a>
        </div>
    </nav>
    <h1 class="title display-1 text-center">¡Añada donas a su pedido!</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card " style="width: 18rem;">
                    <img class="card-img-top" src="assets/donas/nevadas.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nevadas</h5>
                        <p class="card-text">Donas rellenas de arequipe o chocolate con glaceado de azucar pulverizada en la parte de arriba</p>
                        <a href="#" class="btn btn-primary" onclick="añadirDonas('nevadas')">Añadir al pedido</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="width: 18rem;">
                    <img class="card-img-top" src="assets/donas/decoradas.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Decoradas</h5>
                        <p class="card-text">Tambien conocidas como aros son donas con un hueco en el medio y se le suele colocar en la parte superior chispas de colores,chocolate,galleta o cualquier tipo de adorno para hacerlas mas vistosas. Estas donas no poseen relleno</p>
                        <button class="btn btn-primary" onclick="añadirDonas('decoradas')">Añadir al pedido</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="width: 18rem;">
                    <img class="card-img-top" src="assets/donas/boston.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Boston</h5>
                        <p class="card-text">Donas cubiertas de chocolate rellenas de arequipe chocolate o crema pastelera,suelen ser las mas demandadas.</p>
                        <button class="btn btn-primary" onclick="añadirDonas('boston')">Añadir al pedido</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>