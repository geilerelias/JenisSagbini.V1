$(document).ready(function() {
    cargaTabla();
});
////////////////////EliminarSinPreguntar
function EliminarSinPreguntar(idR) {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=EliminarSinPreguntar&idR=" + idR
        })
        .done(function(r) {
            alert(r);
            cargaTabla();
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    return false;
}
////////////
function Modificar(idR) {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=Modificar&ide=" + $("#txt_id").val() + "&nom=" + $("#txt_nom").val() + "&cel=" + $("#txt_cel").val() + "&idR=" + idR,
        })
        .done(function(r) {
            alert(r);
            cargaTabla();
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


    return false;
}
////////////
function Registrar() {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=Registrar&ide=" + $("#txt_id").val() + "&nom=" + $("#txt_nom").val() + "&cel=" + $("#txt_cel").val(),
        })
        .done(function(r) {
            alert(r);
            cargaTabla();
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


    return false;
}
////////////////////////
function FormularioModificar(ide, identif, nombre, cel) {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=FormularioModificar&ide=" + ide + "&identif=" + identif + "&nom=" + nombre + "&cel=" + cel,
        })
        .done(function(r) {
            $("#d_info").html(r);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


}
////////////////////////
function FormularioNuevo() {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=FormularioNuevo",
        })
        .done(function(r) {
            $("#d_info").html(r);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


}
/////////////////
function cargaTabla() {
    $.ajax({
            type: "POST",
            url: "utilidades.php",
            data: "procedimientos=cargaTabla",
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    $.ajax({
        type: "POST",
        url: "utilidades.php",
        data: "procedimientos=cargaTabla",
        success: function(r) {
            $("#d_info").html(r);
        }
    });
}