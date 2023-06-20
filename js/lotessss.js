function insertar() {
    var Carro = $("#Carro").val();
    var Modelo = $("#Modelo").val();
    var Linea = $("#Linea").val();
    var Core = $("#Core").val();
    var Plunger = $("#Plunger").val();
    var Shaft = $("#Shaft").val();
    var Spring = $("#Spring").val();
    var Plate_a = $("#Plate_a").val();
    var Plate_wave = $("#Plate_wave").val();
    var Base = $("#Base").val();
    var Yoke = $("#Yoke").val();
    var Coil = $("#Coil").val();
    var Screw = $("#Screw").val();
    var Hora_llenado = $("#Hora_llenado").val();
    $.ajax({
        url: 'controlador/controlador.php?page=1',
        method: 'POST',
        data: {
            Carro: Carro,
            Modelo: Modelo,
            Core: Core,
            Plunger: Plunger,
            Shaft: Shaft,
            Spring: Spring,
            Plate_a: Plate_a,
            Plate_wave: Plate_wave,
            Base: Base,
            Yoke: Yoke,
            Coil: Coil,
            Screw: Screw,
            Hora_llenado: Hora_llenado
        },
        success: function (data) {
            alert(data);
            location.reload('../logistica.php',19000);
        }
    });
};

function Actualizar() {
    var Carro = $("#Carro").val();
    var Sleeve = $("#Sleeve").val();
    var Rango = $("#Rango").val();
    var Linea = $("#Linea").val();
    var Hora_lavado = $("#Hora_lavado").val();
    $.ajax({
        url: 'controlador/controlador.php?page=2',
        method: 'POST',
        data: {
            Carro: Carro,
            Sleeve: Sleeve,
            Rango: Rango,
            Linea: Linea,
            Hora_lavado: Hora_lavado
        },
        success: function (data) {
            alert(data);
            location.reload('../Lav_At.php', 19000);
        },
    });
};
function Actualizar1() {
    var Carro1 = $("#Carro1").val();

    var Hora_ensamble = $("#Hora_ensamble").val();
    $.ajax({
        url: 'controlador/controlador.php?page=3',
        method: 'POST',
        data: {
            Carro1: Carro1,
            Hora_ensamble: Hora_ensamble
        },
        success: function (respose) {
            alert(respose);
            location.reload('../Lav_At.php', 19000);
            // location.reload('19/lav.php', 19000);
        },
        error: function (error) {
            swal("Superas el máximo de cajas ",
                "Hubo un error en la petición",
                "error");

        },
    });
};


