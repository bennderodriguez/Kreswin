<?php include 'headers.php'; ?>


<form class="form-horizontal" id="crearPedido" role="form" autocomplete="off"><br>
    <center><h5> Pedido <span id="NumVent"></span> </h5></center>
    <div class="bkg-div">
        <div class="row">
            <div class="col-sm-6" id="Sec1">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre" placeholder="Nombre" title="Nombre del Cliente" readonly="true">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre2" name="Nombre2" placeholder="Nombre2" title="Negocio" readonly="true">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Calle" name="Calle" placeholder="Calle" title="Calle" readonly="true">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Colonia" name="Colonia" placeholder="Colonia" title="Colonia" readonly="true">
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Ciudad" name="Ciudad" placeholder="Ciudad" title="Ciudad" readonly="true">
                    <div class="help-block with-errors text-danger"></div>
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
                    <div class="help-block with-errors text-danger"></div>
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
                            <input type="text" class="form-control form-control-sm" id="Venta" name="Venta" placeholder="Venta" required title="Venta">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Estatus" name="Estatus" placeholder="Estatus" required title="Estatus" value="X">
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
                                <input type="text" id="Ruta" name="Ruta" class="form-control form-control-sm" placeholder="Ruta" required>
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
        <!--div id="demo2" class="collapse container" style="background-color: #FBFAFA">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Producto</label>
                        <div class="input-group mb-3">
                            <input type="hidden" id="idProd" name="idProd" class="form-control form-control-sm" required readonly="true">
                            <input type="text" id="DescripcionProd" name="DescripcionProd" class="form-control form-control-sm" required readonly="true">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalProductos" title="Ver lista de Productos">Search <span class="pe-7s-search"></span></button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" class="form-control form-control-sm" id="CantProd" name="CantProd" value name="CantProd" value="" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control form-control-sm" id="PrecioProd" name="PrecioProd" required readonly="true">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="number" class="form-control form-control-sm" id="DescuentoProd" name="DescuentoProd" required="" value="0" min="0">
                    </div>
                </div>
            </div>
        </div-->
    </div><br>

    <div class="clearfix">
        <span class="float-right btn-group">
            <button type="button" class="btn btn-outline-info btn-sm" id="btnAgregar" data-toggle="collapse" data-target="#demo2" title="Agregar Producto" disabled="true">Agregar <span class="pe-7s-cart"></span></button>
            <button type="submit" class="btn btn-success btn-sm" title="Registar Venta" id="addProduct" >Enviar</button>
        </span>
    </div>
    <div id="demo"></div>
</form><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped table-sm" id="detalleProducto">
                    <thead>
                        <tr class="table-primary">
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>%</th>
                            <th>Importe</th>
                            <th>Neto</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            meee
        </div>
        <div class="col-sm-4" id="iva-Box">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Suma</span>
                </div>
                <input type="text" class="form-control" id="Tieps" readonly>
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">I.V.A</span>
                </div>
                <input type="text" class="form-control" id="Tiva" readonly>
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Total</span>
                </div>
                <input type="text" class="form-control" id="Tsaldo" readonly>
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


<?php include 'footer.php'; ?>
<script type="text/javascript" src="asset/js/pedido.js"></script>
<script>
    $(document).ready(function () {
        //ValidBtnProducto();
        //Carga lista de clientes
        LoadDataJson();
        //Carga Rutas
        LoadJsonRutas();
        //Carga Productos
        //LoadJsonProductos();
        //Carga la fecha Actual
        LoadDataNow();
        //Carga numero consecutivo de la venta
        getNumeroVenta();
    });


    /**
     * Consulta el consecutivo de venta y lo coloca en el directorio json/NumeroVenta.json
     * @returns {undefined}
     */
    function getNumeroVenta() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var serverRequest = this.responseText;

                /*Este servicio contiene espam por lo que separamos en cadenas
                 * para extraer unicamente el numero del pedido
                 */
                //1. Separo con split todo lo que este entre [
                var str = serverRequest;
                var res = str.split("[");
                console.log(res[1]);
                //2. El resultado se parcea nuevamente pero ahoa con ]
                var str2 = res[1];
                var res2 = str2.split("]");
                console.log(res2[0]);
                //3. ahora se agregan corchetes
                var array = '{"data" : [';
                array += res2[0].replace("},]", "}]");
                //array += array.replace("{}", "");
                array += ']}';
                var array2 = array.replace(", {}", "");
                console.log(array2);

                document.getElementById("demo").innerHTML = array;
                //se guarda en un archivo json/NumeroVenta.json
                $.ajax({
                    type: "POST",
                    url: "clean-json/get-url.php",
                    data: "dataArray=" + array2 + "&fileName=NumeroVenta",
                    success: function (text) {
                        if (text == "success") {
                            //invoca funcion
                            setNumeroVenta();
                            document.getElementById("demo").innerHTML = '';
                        } else {
                            document.getElementById("demo").innerHTML = '<div class="alert alert-danger"><strong>Error</strong> Ocurrio un error presione F12</div>';

                        }
                    }
                });
            } else {
                document.getElementById("demo").innerHTML = '<div class="alert alert-info"><strong>Espere</strong> Cargando Contenido ... espere <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>';
            }

            return array;
        };
        xhttp.open("GET", "getJson/getConsecutivoVent.php", true);
        xhttp.send();
        // The function returns the product of p1 and p2
    }

    /**
     * lee Json con el numero de venta actual y lo setea en el input id="Venta"
     * */
    function setNumeroVenta() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                console.log(myObj.data);
                console.log(myObj.data[0].Pedido);

                $('#Venta').val(myObj.data[0].Pedido);
            }
            if (this.status == 404) {
                console.log("error setNumeroVenta()");
            }
        };
        xmlhttp.open("GET", "json/NumeroVenta.json", true);
        xmlhttp.send();
    }
</script>