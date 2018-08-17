<?php include 'headers.php'; ?>

<form class="form-horizontal" id="ActualizaPedido" role="form" autocomplete="off"><br>
    <div id="demo"></div>
    <center><h5>Consulta de Venta Número <span id="NumVent"></span> </h5></center>
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
                            <button type="button" class="btn btn-primary btn-sm">Search <span class="pe-7s-search"></span></button> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Precio" name="Precio" placeholder="Precio" title="Precio" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Descuento" name="Descuento" placeholder="Descuento" required title="Decuento">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Tipo" name="Tipo" placeholder="Tipo" required title="Tipo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Credito" name="Credito" placeholder="Credito" required title="Credito">
                </div>

            </div>
            <div class="col-sm-3" id="Sec3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Venta" name="Venta" placeholder="Venta" required title="Venta" readonly="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Fecha" name="Fecha" placeholder="Fecha" title="Fecha">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Sucursal" name="Sucursal" placeholder="Sucursal" required title="Sucursal">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Vendedor" name="Vendedor" placeholder="Vendedor" required title="Vendedor">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Precio" name="Factura" placeholder="Factura" title="Factura">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="20" id="Destino" name="Destino" title="Destino">Destino
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="20" id="Proyecto" name="Proyecto" title="Proyecto">Proyecto
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="20" id="Dolares" name="Dolares" title="Dolares">Dolares
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="S" id="Contado" name="Contado" title="Contado">Contado
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="20" id="Explorar" name="Explorar" title="Explorar">Explorar
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
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
    </div>
    <div class="clearfix">
        <span class="float-right">
            <button type="submit" class="btn btn-outline-success btn-sm">Actualizar</button>
        </span>
    </div>
</form>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group float-right">
            <button type="button" class="btn btn-outline-info btn-sm" id="btnAgregar" data-toggle="collapse" data-target="#demo" onclick="ValidBtnProducto()" title="Agregar Producto" disabled>Agregar <span class="pe-7s-cart"></span></button>
            <button type="button" class="btn btn-outline-info btn-sm" id="del" onclick="delRow()">Eliminar</button>
            <button type="submit" class="btn btn-outline-info btn-sm">Salir</button>
        </div>
        <br><hr>
        <?php include './carrito.php'; ?>
        <hr>
        <div class="table-responsive">
            <div class="table-responsive-sm">
                <table class="table table-striped table-sm" id="ventas" >
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
    <div></div>
</div><br>
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
        LoadVenta();
        loadVentas();
        LoadPedido();
    });
</script>