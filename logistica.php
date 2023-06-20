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
    <script src="js/lotessss.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
<nav class="nav justify-content-center  ">
    <a class="nav-link " href="#" aria-current="page">Logistica
    </a>
    <a class="nav-link" href="Lav_At.php">Lavadoras/AT</a>
    <a class="nav-link" href="inv.php">Inventario</a>

</nav>

<body>
    <div class="container" style="min-height:500px;">
        <div class=" container" style="background:aqua;width:370px;">
            <div class="col-md-3" style="text-align: center;width:350px;">
                <div class="form-group" style="text-align: center;">
                    <label>Numero de carros</label>
                    <input type="Number" name="Carro" id="Carro" placeholder="Numero de carro" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Modelo en linea</label>
                    <input type="Number" name="Modelo" id="Modelo" placeholder="Modelo en linea" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Core</label>
                    <input type="text" name="Core" id="Core" placeholder="Core" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Plunger</label>
                    <input type="text" name="Plunger" id="Plunger" placeholder="Plunger" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Shaft</label>
                    <input type="text" name="Shaft" id="Shaft" placeholder="Shaft" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Spring</label>
                    <input type="text" name="Spring" id="Spring" placeholder="Spring" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Plate A</label>
                    <input type="text" name="Plate_a" id="Plate_a" placeholder="Plate_A" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Plate wave</label>
                    <input type="text" name="Plate_wave" id="Plate_wave" placeholder="Plate_wave" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Base</label>
                    <input type="text" name="Base" id="Base" placeholder="Base" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Yoke</label>
                    <input type="text" name="Yoke" id="Yoke" placeholder="Yoke" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Coil</label>
                    <input type="text" name="Coil" id="Coil" placeholder="Coil" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <label>Screw</label>
                    <input type="text" name="Screw" id="Screw" placeholder="Screw" required
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"
                        autocomplete="off" />
                    <br>
                    <div class="form-group" style="text-align: center;">
                        <input type="submit" id="subir" value="subir" class="btn btn-success" onclick="insertar()" />
                    </div>

                </div>
            </div>
        </div>
</body>

</html>