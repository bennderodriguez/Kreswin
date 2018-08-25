<?php
include 'headers.php';
?>


<form class="form-horizontal" id="RealizarVenta" role="form" autocomplete="off"><br>
    <center><h5> Venta <span id="NumVent"></span> </h5></center>
    <div class="bkg-div">
        <div class="row">
            <div class="col-sm-6" id="Sec1">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre" placeholder="Nombre" title="Nombre del Cliente" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre2" name="Nombre2" placeholder="Nombre2" title="Negocio" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Calle" name="Calle" placeholder="Calle" title="Calle" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Colonia" name="Colonia" placeholder="Colonia" title="Colonia" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Ciudad" name="Ciudad" placeholder="Ciudad" title="Ciudad" readonly="true">
                </div>
            </div>
            <div class="col-sm-3" id="sec2">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" id="Cliente" name="Cliente" class="form-control form-control-sm" placeholder="Cliente" required readonly="true">
                        <div class="help-block with-errors text-danger"></div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" title="Ver lista de Clientes">Search <span class="pe-7s-search"></span></button> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Precio" name="Precio" placeholder="Precio" title="Precio" readonly="true" value="1">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Descuento" name="Descuento" placeholder="Descuento" required title="Decuento" value="0.00">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Tipo" name="Tipo" placeholder="Tipo" required title="Tipo">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Credito" name="Credito" placeholder="Credito" required title="Credito" value="8">
                    <div class="help-block with-errors text-danger"></div>
                </div>

            </div>
            <div class="col-sm-3" id="Sec3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Venta" name="Venta" placeholder="Venta" required title="Venta" readonly="true">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Estatus" name="Estatus" placeholder="Estatus" required title="Estatus" readonly="true">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" id="Fecha" name="Fecha" placeholder="Fecha" title="Fecha">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Sucursal" name="Sucursal" placeholder="Sucursal" required title="Sucursal" value="0">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Vendedor" name="Vendedor" placeholder="Vendedor" required title="Vendedor">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="switch">
                            <input type="checkbox" value="S" id="Cotizacion" name="Cotizacion" title="Cotizacion">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCotización
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" id="Ruta" name="Ruta" class="form-control form-control-sm" placeholder="Ruta">
                                <div class="help-block with-errors text-danger"></div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalRuta" title="Ver Lista de Rutas">Search <span class="pe-7s-search"></span></button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="switch">
                                    <input type="checkbox" value="Destino" id="Destino" name="Destino" title="Destino">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDestino
                                    <span class="slider round"></span>
                                </label>
                                <label class="switch">
                                    <input type="checkbox" value="Proyecto" id="Proyecto" name="Proyecto" title="Proyecto" >
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProyecto
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="switch">
                                    <input type="checkbox" value="Dolares" id="Dolares" name="Dolares" title="Dolares">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDolares
                                    <span class="slider round"></span>
                                </label>
                                <label class="switch">
                                    <input type="checkbox" value="S" id="Contado" name="Contado" title="Contado">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContado
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="switch">
                                    <input type="checkbox" value="Explorar" id="Explorar" name="Explorar" title="Explorar">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExplorar
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Nota1" name="Nota1" placeholder="Notas" title="Notas">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Nota2" name="Nota2" placeholder="Notas" title="Notas">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Nota3" name="Nota3" placeholder="Notas" title="Notas">
                        </div>
                        <!--p>Hide Data Form<p-->
                        <input type="hidden" class="form-control form-control-sm" id="Ruta" name="Ruta" placeholder="Ruta" title="Ruta">
                    </div>
                </div>
            </div>
        </div>
        <div id="demo2" class="collapse container" style="background-color: #FBFAFA">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Producto</label>
                        <div class="input-group mb-3">
                            <input type="hidden" id="idProd" name="idProd" class="form-control form-control-sm" required readonly="true">
                            <input type="text" id="DescripcionProd" name="DescripcionProd" class="form-control form-control-sm" required readonly="true">
                            <div class="help-block with-errors text-danger"></div>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalProductos" title="Ver lista de Productos">Search <span class="pe-7s-search"></span></button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" class="form-control form-control-sm" id="CantProd" name="CantProd" value name="CantProd" value="" min="1" required>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control form-control-sm" id="PrecioProd" name="PrecioProd" required readonly="true">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="number" class="form-control form-control-sm" id="DescuentoProd" name="DescuentoProd" required="" value="0" min="0" max="100">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="clearfix">
        <span class="float-right btn-group">
            <button type="button" class="btn btn-outline-info btn-sm" id="btnAgregar" data-toggle="collapse" data-target="#demo2" title="Agregar Producto">Agregar <span class="pe-7s-cart"></span></button>
            <button type="submit" class="btn btn-success btn-sm" title="Registar Venta" id="addProduct" >Guardar <span class="pe-7s-shopbag"></button>
        </span>
    </div>
    <div id="demo"></div>
</form><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm table-hover" id="loadProductosVendidos" >
                        <thead>
                            <tr class="table-primary">
                                <th>Producto</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Porcentaje</th>
                                <th>Importe</th>
                                <th>Neto</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="table-active">
                                <th>Total</th>
                                <th></th>
                                <th><span id="TCantidad"></span></th>
                                <th></th>
                                <th></th>
                                <th><span id="TImporte"></span></th>
                                <th><span id="TNeto"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4" id="iva-Box">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Suma</span>
                </div>
                <input type="text" class="form-control" id="Tieps" name="Tieps" readonly>
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">I.V.A</span>
                </div>
                <input type="text" class="form-control" id="Tiva" name="Tiva" readonly>
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Total</span>
                </div>
                <input type="text" class="form-control" id="Tsaldo"  name="Tsaldo" readonly>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clientes</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="example" >
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Nombre</th>
                                <th>Nombre2</th>
                                <th>Ciudad</th>
                                <th>Tipo</th>
                                <th>Vendedor</th>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="modalRuta">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ruta</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableRuta" >
                        <thead>
                            <tr>
                                <th>Ruta</th>
                                <th>Nombre</th>
                                <th>Id</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>



<!-- The Modal -->
<div class="modal fade" id="modalProductos">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Productos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableProducto" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>descripcion</th>
                                <th>precio</th>
                                <th>descuento</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalUpdateProd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Productos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableProducto" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>descripcion</th>
                                <th>precio</th>
                                <th>descuento</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

 <!-- The Modal -->
  <div class="modal fade" id="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Editar | Eliminar Producto</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form id="formaEditarProducto" role="form" autocomplete="off">
                <div class="form-group">
                  <label>Producto</label>
                  <input type="text" class="form-control form-control-sm" id="inputEditProduct" readonly="true">
                </div>
                <div class="form-group">
                  <label>Cantidad</label>
                  <input type="number" class="form-control form-control-sm" id="inputEditCantidad" required min="1" max="99" value="1">
                </div>
                <div class="form-group">
                  <label>Descuento</label>
                  <input type="number" class="form-control form-control-sm" id="inputEditDescuento" required min="0" max="100" value="0">
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm" id="editarProducto">Editar</button>
                <button type="button" class="btn btn-outline-danger btn-sm" id="eliminarProducto">Eliminar</button>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialog" style="display: none;" id="btnDialog">Open modal</button>
<?php include 'footer.php'; ?>
 <script type="text/javascript" src="asset/js/venta.js"></script>
<script>
    $(document).ready(function () {

        //Valida boton agregar
        ValidBtnProducto();
        //Carga lista de clientes
        LoadDataJson();
        //Carga Rutas
        LoadJsonRutas();
        //Carga Productos
        LoadJsonProductos();
        //Carga la fecha Actual
        LoadDataNow();

        var venta = "<?php echo $_GET["venta"] ?>";
        cargaPedido();
        //********************//
        loadProductosVendidos(venta);
        cargaTotales(venta);

    });

    function cargaTotales(venta) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
//                console.log(myObj.Total.TImporte);
//                console.log(myObj.Total.Tiva);
//                console.log(myObj.Total.TNeto);
                //document.getElementById("des").innerHTML = myObj.Total.Venta;
                document.getElementById("NumVent").innerHTML = venta;
                document.getElementById("TCantidad").innerHTML = myObj.Total.TCantidad;
                document.getElementById("TImporte").innerHTML = myObj.Total.TImporte;
                document.getElementById("TNeto").innerHTML = myObj.Total.TNeto;
                $('#Tieps').val(myObj.Total.TImporte);
                $('#Tiva').val(myObj.Total.Tiva);
                $('#Tsaldo').val(myObj.Total.TNeto);
            }
        };
        xmlhttp.open("GET", "json/vt" + venta + ".json", true);
        xmlhttp.send();
    }

    function loadProductosVendidos(venta) {
        var table = $('#loadProductosVendidos').DataTable({
            "ajax": "json/vt" + venta + ".json",
            "columns": [
                {"data": "Producto"},
                {"data": "Descripcion"},
                {"data": "Cantidad"},
                {"data": "Precio"},
                {"data": "Porcentaje"},
                {"data": "Importe"},
                {"data": "Neto"}
            ]
        });

        //al darle clic a un row invoca a saveVaClient()
        $('#loadProductosVendidos').on('click', 'tr', function () {
            var data = table.row(this).data();
            //alert('You clicked on set' + data.Producto + '\'s row');
            //eliminarProducto(data.Producto);
             //$("#btnDialog").click();
             confirma(venta, data.Producto, data.Descripcion, data.Cantidad);
//            if (confirm("¿Estás seguro que quieres eliminar el producto " + data.Descripcion + "?")) {
//                eliminarProducto(data.Producto);
//            } else {
//                return false;
//            }
//            falta implementar pop up para que decida si eliminar o actualizar
           // $("#optionDataRow").modal('show');
        });
    }
function confirma(Venta, producto, descripcion, cantidad){
    //set input form
    var str = cantidad;
    var Cliente = $("#Cliente").val();
    $('#inputEditProduct').val(descripcion);
    $('#inputEditCantidad').val(str.trim());
    //open dialog window
    $("#btnDialog").click();
    
    $("#eliminarProducto").on('click', function (){
            if (confirm("¿Estás seguro que quieres eliminar el producto?")) {
                eliminarProducto(producto);
            } else {
                return false;
            }
    });
    $("#editarProducto").on('click', function (){
            document.getElementById("demo").innerHTML = '<div class="alert alert-info alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Espere!</strong> Procesando producto <i class="pe-7s-close-circle pe-spin pe-2x pe-va"></i></div>';
            var newDescuento = $("#inputEditDescuento").val();
            var newCantidad = $("#inputEditCantidad").val();
            $.ajax({
            type: "POST",
            url: "getJson/deleteProducto.php",
            data: "Actualiza=true&cVenta22=" + Venta + "&xClie22=" + Cliente + "&nCant22="+ newCantidad +"&PROD22=" + producto + "&xdes22=" + newDescuento,
            success: function (text) {
                consultaVentaTotal(Venta);
                console.log(text);
            },
            error: function (request, status, error) {
                alert(request.responseText);
                console.log(request.responseText);
                console.log(request.status);
                console.log(request.error);
                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> La acción terminó con un error Fatal presione F12</div>';

            }
        });
            
    });
    
}
    function eliminarProducto(Producto) {
        document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Espere!</strong> Eliminando producto <i class="pe-7s-close-circle pe-spin pe-2x pe-va"></i></div>';
        var Venta = $("#Venta").val();
        var Cliente = $("#Cliente").val();
        var cantidad = 0;
        console.log(Producto);
        console.log(Venta);
        console.log(cantidad);
        $.ajax({
            type: "POST",
            url: "getJson/deleteProducto.php",
            data: "elimina=true&cVenta22=" + Venta + "&xClie22=" + Cliente + "&nCant22=0&PROD22=" + Producto,
            success: function (text) {
                consultaVentaTotal(Venta);
                console.log(text);
            },
            error: function (request, status, error) {
                alert(request.responseText);
                console.log(request.responseText);
                console.log(request.status);
                console.log(request.error);
                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> La acción terminó con un error Fatal presione F12</div>';

            }
        });
    }

    function cargaPedido() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);

                document.getElementById("NumVent").innerHTML = myObj.data[0].Pedido;
                $('#Nombre').val(myObj.data[0].Nombre);
                $('#Nombre2').val(myObj.data[0].Nombre2);
                $('#Calle').val(myObj.data[0].Calle);
                $('#Colonia').val(myObj.data[0].Colonia);
                $('#Ciudad').val(myObj.data[0].Ciudad);


                $('#Venta').val(myObj.data[0].Pedido);
                $('#Estatus').val(myObj.data[0].Estatus);
                $('#Cliente').val(myObj.data[0].Cliente);
                $('#Vendedor').val(myObj.data[0].Vendedor);
                $('#Sucursal').val(myObj.data[0].Sucursal);
                //estatus
                $('#Precio').val(myObj.data[0].Precio);
                $('#Descuento').val(myObj.data[0].Descuento);
                $('#Tipo').val(myObj.data[0].Tipo);
                $('#Credito').val(myObj.data[0].Credito);
                $('#Ruta').val(myObj.data[0].Ruta);
                //destino
                //Proyecto
                //Dolares
                //contado
                //Explorar
                $('#Nota1').val(myObj.data[0].Nota1);
                $('#Nota2').val(myObj.data[0].Nota3);
                $('#Nota3').val(myObj.data[0].Nota3);


                console.log(myObj.data);
            }
            if (this.status == 404) {
                console.log("error cargaPedido()");
                document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong>  Numero de venta Inexistente </div>';

            }
        };
        var pedido = "<?php echo $_GET["venta"] ?>";
        xmlhttp.open("GET", "json/" + pedido + ".json", true);
        xmlhttp.send();
    }

</script>
