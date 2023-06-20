var dataTable;
var i = 1;

function ta() {
    MostrarLineas();
    // MostrarModelos();

    dataTable = $('#dt_Inventarios').DataTable({
        destroy: true,
        searching: false,
        paging: true,
        ajax: {
            url: "controlador/inv.php?page=1",
            type: "POST",
            data: function () { return $('#filter-form').serialize(); }
        },
        columns: [
             
          
            { data: "Carro" },
            { data: "Modelo" },
            { data: "Sleeve" },
            { data: "Rango" },
            { data: "Linea" },
            { data: "Core" },
            { data: "Plunger" },
            { data: "Shaft" },
            { data: "Spring" },
            { data: "Plate_a" },
            { data: "Plate_wave" },
            { data: "Base" },
            { data: "Yoke" },
            { data: "Coil" },
            { data: "Screw" },
            { data: "Hora_llenado" },
            { data: "Hora_lavado" },
            { data: "Hora_ensamble" },
            {
                data: "Fechas",
                render: function (data, type, row, meta) {
                    return moment(row.Fechas).format('DD/MM/YY');
                }
            },
        ]
    });

    //     $('#filter-form').submit(function(e){
    //         e.preventDefault();

    //         var linea = $("#selectLinea").val();
    //         var modelo = $("#selectModelo").val();
    //         var fecha = $("#fecha").val();

    //         if (linea == "" && modelo == "" && fecha == "") {
    //             sweetAlert("", "Debe ingresar al menos un valor para aplicar un filtro al inventario", "warning");
    //             return false;
    //         }

    //         i = 1;
    //         dataTable.ajax.reload();
    //     });
};

function MostrarLineas() {
    $.ajax({
        url: "controlador/inv.php?page=2",
        type: "post",
        dataType: "json",
        success: function (data) {
            var stdBody = "";
            for (var key in data) {
                stdBody += `<option value="${data[key]['Fechas']}">${data[key]['Fechas']}</option>`;
            }
            $("#selectLinea").append(stdBody);
        }
    });
}

function MostrarModelos() {
    $.ajax({
        url: "controlador/inv.php?page=3",
        type: "post",
        dataType: "json",
        success: function (data) {
            var resBody = "";
            for (var key in data) {
                resBody += `<option value="${data[key]['Modelo']}">${data[key]['Modelo']}</option>`;
            }
            $("#selectModelo").append(resBody);
        }
    });
}

function limpiar() {
    // $("#selectLinea").html(`<option value="">Seleccione una línea</option>`);
    // $("#selectModelo").html(`<option value="">Seleccione un modelo</option>`);
    $("#Fechas").val('');
    $("#dt_Inventarios").hidden();

    MostrarModelos();
    MostrarLineas();
};

function restaurar() {
    limpiar();
    i = 1;
    dataTable.ajax.reload();
};