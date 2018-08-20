$("#RealizarVenta").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Todos los campos sondd requeridos");
        alert("Todos los campos son requeridos");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
        document.getElementById("demo").innerHTML = '<div class="alert alert-info"><strong>Espere</strong> Porcesando Solicitud ...</div>';
    }
});


function submitForm() {

    // Initiate Variables With Form Content
    var Cliente = $("#Cliente").val();
    var Descuento = $("#Descuento").val();
    var Tipo = $("#Tipo").val();
    var Credito = $("#Credito").val();
    var Venta = $("#Venta").val();
    var Sucursal = $("#Sucursal").val();
    var Vendedor = $("#Vendedor").val();
    var Precio = $("#Precio").val();
    var Cotizacion = $("#Cotizacion").val();
    var Ruta = $("#Ruta").val();
    var Destino = $("#Destino").val();
    var Proyecto = $("#Proyecto").val();
    var Dolares = $("#Dolares").val();
    var Contado = $("#Contado").val();
    var Explorar = $("#Explorar").val();
    var Nota1 = $("#Nota1").val();
    var Nota2 = $("#Nota2").val();
    var Nota3 = $("#Nota3").val();
    var idProd = $("#idProd").val();
    var CantProd = $("#CantProd").val();
    var PrecioProd = $("#PrecioProd").val();
    var DescuentoProd = $("#DescuentoProd").val();

    console.log("Cliente " + Cliente);
    console.log("Descuento " + Descuento);
    console.log("Tipo " + Tipo);
    console.log("Credito " + Credito);
    console.log("Venta " + Venta);
    console.log("Sucursal " + Sucursal);
    console.log("Vendedor " + Vendedor);
    console.log("Precio " + Precio);
    console.log("Ruta " + Ruta);
    console.log("Cotizacion " + Cotizacion);
    console.log("Destino " + Destino);
    console.log("Proyecto " + Proyecto);
    console.log("Dolares " + Dolares);
    console.log("Contado " + Contado);
    console.log("Explorar " + Explorar);
    console.log("Nota1 " + Nota1);
    console.log("Nota2 " + Nota2);
    console.log("Nota3 " + Nota3);
    console.log('idProd ' + idProd);
    console.log('CantProd ' + CantProd);
    console.log("PrecioProd " + PrecioProd);
    console.log("DescuentoProd " + DescuentoProd);

    addRow();

    $.ajax({
        type: "POST",
        url: "sendDataKC/index.php",
        data: 'cVenta22=' + Venta + '&xClie22=' + Cliente + '&nCant22=' + CantProd + '&PROD22=' + idProd,
        success: function (text) {
            //alert(text);
            console.log(text);
            var n = text.includes("Modificado");
//            if (n) {
//                document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Actualización realizada </div>';
//                myFunction(Cliente, Venta);
//                formSuccess();
//            } else {
//                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> Actualización no realizada </div>';
//
//            }
        }, error: function (jqXHR, textStatus, errorThrown) {
            document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> Actualización no realizada </div>';
        }, complete: function (jqXHR, textStatus) {
            document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Actualización realizada </div>';

        }
    });
}

function formSuccess() {
    $("#RealizarVenta")[0].reset();
    submitMSG(true, "Bienvenido!")
}

function formError() {
    $("#RealizarVenta").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function myFunction(Cliente, Perdido) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var serverRequest = this.responseText;
            var array = '{"data" : ';
            array += serverRequest.replace("},]", "}]");
            //array += array.replace("{}", "");
            array += '}';
            var array2 = array.replace(", {}", "");
            console.log(array2);
            //document.getElementById("demo").innerHTML = array;
            $.ajax({
                type: "POST",
                url: "clean-json/get-url.php",
                data: "dataArray=" + array2 + "&fileName=Pedido",
                success: function (text) {
                    if (text == "success") {
                        document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Actualización realizada </div>';
                        //LoadVenta();
                        loadVentas();
                        LoadPedido();
                    } else {
                        document.getElementById("demo").innerHTML = '<div class="alert alert-danger"><strong>Error</strong> Ocurrio un error presione F12</div>';
                    }
                }
            });
        } else {
            document.getElementById("demo").innerHTML = '<div class="alert alert-warning"><strong>Espere</strong> Cargando Contenido ... espere</div>';
        }

        return array;
    };
    xhttp.open("GET", 'http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/Oscar/SwPedidoDat_fc.bwp?xVenta2=' + Perdido + '&xClie2=' + Cliente, true);
    xhttp.send();
    // The function returns the product of p1 and p2
}