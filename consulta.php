<?php include 'headers.php'; ?>
<div id="des"></div>
<div class="container">
    <center><h4>Consulta de Venta Número <span id="NumVent"></span> </h4></center>
    <form action="" method="GET" class="form-horizontal">
        <div class="row jumbotron">
            <div class="col-sm-6" id="Sec1">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" id="Cliente" name="Cliente" class="form-control form-control-sm" placeholder="Cliente" required readonly="true">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalVenta" onclick="LoadVenta()" title="Ver lista de ventas">Search <span class="pe-7s-search"></span></button> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Nombre2" name="Nombre2" placeholder="Nombre2" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Ciudad" name="Ciudad" placeholder="Ciudad" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Tipo" name="Tipo" placeholder="Tipo" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="Vendedor" name="Vendedor" placeholder="Vendedor" required>
                </div>
            </div>
            <div class="col-sm-3">vent</div>
            <div class="col-sm-3" id="Sec3">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" id="Ruta" name="Ruta" class="form-control form-control-sm" placeholder="Ruta" required readonly="true">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group float-right">
                    <button type="button" class="btn btn-outline-info btn-sm" id="btnAgregar" data-toggle="collapse" data-target="#demo" onclick="ValidBtnProducto()" title="Agregar Producto" disabled>Agregar <span class="pe-7s-cart"></span></button>
                    <button type="button" class="btn btn-outline-info btn-sm" id="del" onclick="delRow()">Eliminar</button>
                    <button type="button" class="btn btn-outline-info btn-sm">Salir</button>
                </div>
                <br><hr>
                <?php include './carrito.php'; ?>
                <hr>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-striped" id="ventas" >
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
        </div>
        <div class="row">
            <div class="col-sm-8">nana</div>
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
    </form>
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
    });
</script>