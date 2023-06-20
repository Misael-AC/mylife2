<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title>INVENTARIO</title>
</head>
<nav class="nav justify-content-center  ">
    <a class="nav-link " href="logistica.php" aria-current="page">Logistica
    </a>
    <a class="nav-link" href="Lav_At.php">Lavadoras/AT</a>
    <a class="nav-link" href="inv.php">Inventario</a>

</nav>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Inventario</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div id="content" class="content">
                    <!-- begin breadcrumb -->

                    <!-- end breadcrumb -->
                    <!-- begin page-header -->

                    <!-- end page-header -->

                    <!-- begin row -->
                    <div class="row" id="filtro">
                        <!-- begin col-12 -->
                        <div class="col-md-12">
                            <!-- begin panel -->
                            <div class="panel panel-inverse">
                                <div class="panel-heading">

                                    <h3 class="panel-title"><i class="fa fa-filter" aria-hidden="true"></i> Filtros</h3>
                                </div>

                                <div class="panel-body">


                                    <form id="filter-form">
                                        <div class="row filter-elements">
                                            <div class="col-sm-3 elements">
                                                <label>Fecha:</label>
                                                <input type="date" class="form-control" id="Fechas" name="Fechas">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 elements" style="padding-top: 1.5em;">
                                            <!-- <button id="btn-filtro" type="submit" name="submit" class='btn btn-md btn btn-primary'
                                        style="margin-top: 4px;"><i class='fa fa-search' aria-hidden='true'></i>
                                        Filtrar</button> -->
                                            <button id="btn-limpiar" type='button' class='btn btn-md btn btn-primary'
                                                onclick="ta()" style="margin-top: 4px;"><i class='fa fa-eraser'
                                                    aria-hidden='true'></i> Filtro</button>
                                            <button id="btn-limpiar" type='button' class='btn btn-md btn btn-primary'
                                                onclick="limpiar()" style="margin-top: 4px;"><i class='fa fa-eraser'
                                                    aria-hidden='true'></i> Limpiar campos</button>

                                            <button id="btn-restaurar" type='button' class='btn btn-md btn btn-primary'
                                                onclick="restaurar()" style="margin-top: 4px;"><i class='fa fa-table'
                                                    aria-hidden='true'></i> Restaurar
                                                tabla</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3 mb-3">
                                    <!-- Table -->
                                    <style>
                                    .table {
                                        width: 100%;
                                        height: 100%;
                                        float: left !important;

                                    }
                                    </style>
                                    <!-- begin row -->
                                    <div class="row" id="rowTable">
                                        <!-- begin col-12 -->
                                        <div class="col-md-12">
                                            <!-- begin panel -->
                                            <div class="panel panel-inverse">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table id="dt_Inventarios" class="table table-bordered"
                                                            style=" font-size: 1.1em; color: #000">
                                                            <thead>
                                                                <th>Carro</th>
                                                                <th>Modelo</th>
                                                                <th>Sleeve</th>
                                                                <th>Rango</th>
                                                                <th>Linea</th>
                                                                <th>Core</th>
                                                                <th>Plunger</th>
                                                                <th>Shaft</th>
                                                                <th>Spring</th>
                                                                <th>Plate_a</th>
                                                                <th>Plate_wave</th>
                                                                <th>Base</th>
                                                                <th>Yoke</th>
                                                                <th>Coil</th>
                                                                <th>Screw</th>
                                                                <th>Hora_llenado</th>
                                                                <th>Hora_lavado</th>
                                                                <th>Hora_ensamble</th>
                                                                <th>Fechas</th>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end panel -->
                                        </div>
                                        <!-- end col-12 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end col-12 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/inv1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Moment Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>



</body>

</html>