<?php include 'headers.php'; ?>


<form class="form-horizontal" id="RealizarVenta" role="form" autocomplete="off"><br>
    <center><h5> Venta <span id="NumVent"></span> </h5></center>
    <div id="demo"></div>
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
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" title="Ver lista de Clientes">Search <span class="pe-7s-search"></span></button> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Precio" name="Precio" placeholder="Precio" title="Precio" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Descuento" name="Descuento" placeholder="Descuento" required title="Decuento" value=" 0.00">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Tipo" name="Tipo" placeholder="Tipo" required title="Tipo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Credito" name="Credito" placeholder="Credito" required title="Credito" value="8">
                </div>

            </div>
            <div class="col-sm-3" id="Sec3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Venta" name="Venta" placeholder="Venta" required title="Venta" value="0051995">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" id="Fecha" name="Fecha" placeholder="Fecha" title="Fecha">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Sucursal" name="Sucursal" placeholder="Sucursal" required title="Sucursal" value="0">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Vendedor" name="Vendedor" placeholder="Vendedor" required title="Vendedor">
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
                                    <input type="checkbox" value="20" id="Destino" name="Destino" title="Destino">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDestino
                                    <span class="slider round"></span>
                                </label>
                                <label class="switch">
                                    <input type="checkbox" value="20" id="Proyecto" name="Proyecto" title="Proyecto" >
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProyecto
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="switch">
                                    <input type="checkbox" value="20" id="Dolares" name="Dolares" title="Dolares">
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
                                    <input type="checkbox" value="20" id="Explorar" name="Explorar" title="Explorar">
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
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <?php include './carrito.php'; ?>
        </div>
    </div>
    <div class="clearfix">
        <span class="float-right btn-group">
            <button type="button" class="btn btn-outline-info btn-sm" id="btnAgregar" data-toggle="collapse" data-target="#demo2" title="Agregar Producto">Agregar <span class="pe-7s-cart"></span></button>
            <button type="submit" class="btn btn-success btn-sm" title="Registar Venta" id="addProduct" >Enviar</button>
        </span>
    </div>

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

<script>
    $(document).ready(function () {
        ValidBtnProducto();
        //Carga lista de clientes
        LoadDataJson();
        //Carga Rutas
        LoadJsonRutas();
        //Carga Productos
        LoadJsonProductos();
        //Carga la fecha Actual
        LoadDataNow();
    });
</script>