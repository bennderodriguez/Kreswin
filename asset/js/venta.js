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

    $.ajax({
        type: "POST",
        url: "getJson/setProducto.php",
        data: 'cVenta22=' + Venta + '&xClie22=' + Cliente + '&nCant22=' + CantProd + '&PROD22=' + idProd,
        success: function (text) {
            //alert(text);
            console.log(text);
            var n = text.includes("impuesto");
            if (n) {
                document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Producto Agregado</div>';
                addRow();
                creaVentaTotalJson(text, Venta)
            } else {
                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> Producto no Agregado </div>';

            }
        }, error: function (jqXHR, textStatus, errorThrown) {
            document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> Operacion no realizada Presione F12</div>';
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

function creaVentaTotalJson(data, filename) {
    var array = '{"data" : ';
    array += data.replace("},]", "}]");
    //array += array.replace("{}", "");
    array += '}';
    var array2 = array.replace(", {}", "");
    console.log(array2);
    //document.getElementById("demo").innerHTML = array;
    $.ajax({
        type: "POST",
        url: "clean-json/get-url.php",
        data: "dataArray=" + array2 + "&fileName=vt" + filename,
        success: function (text) {
            if (text == "success") {
                document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Pedido asignado </div>';
                //location.href = "venta.php?venta=" + filename;
                cargaVentaTotal(filename);
            } else {
                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> Operacion no realizada Presione F12</div>';
            }
        }
    });

}
