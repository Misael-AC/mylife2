<html>
<style type="text/css">
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

<head>
    <title>Control de lotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css/">
    <script src="js/lotessss.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
<nav class="nav justify-content-center  ">
    <a class="nav-link " href="logistica.php" aria-current="page">Logística
    </a>
    <a class="nav-link" href="Lav_At.php">Lavadoras/AT</a>
    <a class="nav-link" href="inv.php">Inventario</a>

</nav>

<body>
    <div class="container">
        <div class=" container" style="background:aqua;width:370px;">
            <div class="col-md-3" style="text-align: center;width:350px;">
                <div class=" form-group">
                    <label>Numero de carro</label>
                    <input type="number" name="Carro" id="Carro" placeholder="Numero de carro" required
                        class="form-control" autocomplete="off" />

                    <label>Sleeve</label>
                    <input type="text" name="Sleeve" id="Sleeve" placeholder="Sleeve" class="form-control"
                        autocomplete="off" />
                    <label>Rango del Sleeve</label>
                    <input type="text" name="Rango" id="Rango" placeholder="Rango del Sleeve" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <label>Linea del Sleeve</label>
                    <input type="text" name="Linea" id="Linea" placeholder="Linea del Sleeve" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />


                </div>
                <br>
                <div class="form-group" style="text-align: center;">
                    <input type="submit" name="sbt-btn" value="Subir" class="btn btn-success" onclick="Actualizar()" />
                </div>
                <br>
                <div class="form-group" style="text-align: center;">
                    <label>Numero de carro</label>
                    <input type="Number" name="Carro1" id="Carro1" placeholder="Numero de carro" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />


                </div>
                <br>
                <div class="form-group" style="text-align: center;">
                    <input type="submit" name="sbt-btn" value="Subir" class="btn btn-success" onclick="Actualizar1()" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>