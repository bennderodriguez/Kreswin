<?php include 'headers.php'; ?>

<div class="container" style="margin-top:60px">
    <h2>Consulta de Ventas</h2>
    <p></p>
    <div id="demo"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm table-hover" id="tablaVentas" >
                        <thead>
                            <tr class="table-primary">
                                <th># Venta</th>
                                <th># Cliente</th>
                                <th>Estatus</th>
                                <th># Pedido</th>
                                <th>ID Vendedor</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Cancelar | Eliminar Venta</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="formaEditarProducto" role="form" autocomplete="off">
                    <div class="form-group">
                        <label># Venta</label>
                        <input type="text" class="form-control form-control-sm" id="inputVenta" readonly="true">
                    </div>
                    <div class="form-group">
                        <label># Cliente</label>
                        <input type="text" class="form-control form-control-sm" id="inputCliente" readonly="true">
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-success btn-sm" id="btnConsulta">Consultar Venta</button>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="btnCancela">Cancelar Venta</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" id="btnElimina">Eliminar Venta</button>
                        <button type="button" class="btn btn-outline-info btn-sm" id="btnRemisiona">Remisionar|Facturar Venta</button>
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="ModalRemisionar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Remisionar | Facturar Venta</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="formaEditarProducto" role="form" autocomplete="off">
                    <div class="form-group">
                        <label># Venta</label>
                        <input type="text" class="form-control form-control-sm" id="inputVenta2" readonly="true">
                    </div>
                    <div class="form-group">
                        <label># Cliente</label>
                        <input type="text" class="form-control form-control-sm" id="inputCliente2" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Seleccione el método de Pago</label>
                        <select class="form-control" id="sel1">
                            <option value="1">Efectivo</option>
                            <option value="2" selected="true">T. Debito</option>
                            <option value="3">Visa</option>
                            <option value="4">Mastercard</option>
                            <option value="5">American Express</option>
                            <option value="6">Dinners</option>
                            <option value="7">Dolares</option>
                            <option value="8">Otros</option>
                            <option value="9">CS SHBC</option>
                            <option value="10">CB Banamex</option>
                            <option value="11">CV BBV-Bancomer</option>
                            <option value="12">Dolares</option>
                            <option value="13">CI BBV-Scotia Inverlay</option>
                            <option value="14">CX Santander</option>
                            <option value="15">CN Banorte</option>
                            <option value="16">CE IXE</option>
                            <option value="17">CT Inbursa</option>
                            <option value="18">CH Otros Bancos</option>
                        </select>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-success btn-sm" id="btnRemisionaNow">Remisionar Venta</button>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="btnFacturarNow">Facturar Venta</button>
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialog" style="display: none;" id="btnDialog">Open modal</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRemisionar" style="display: none;" id="btnRem">Open modal</button>
<script>
    $(document).ready(function () {
        consultaVentas();
    });

    function consultaVentas() {
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
                //console.log(res[1]);
                //2. El resultado se parcea nuevamente pero ahoa con ]
                var str2 = res[1];
                var res2 = str2.split("]");
                //console.log(res2[0]);
                //3. ahora se agregan corchetes
                var array = '{"data" : [';
                array += res2[0].replace("},]", "}]");
                //array += array.replace("{}", "");
                array += ']}';
                var array2 = array.replace(", {}", "");
                //console.log(array2);

                document.getElementById("demo").innerHTML = "";
                //se guarda en un archivo json/NumeroVenta.json
                $.ajax({
                    type: "POST",
                    url: "clean-json/get-url.php",
                    data: "dataArray=" + array2 + "&fileName=Ventas",
                    success: function (text) {
                        console.log("************************** consultaVentas Success ************************");
                        loadTablaVentas();
                    }
                });
            } else {
                document.getElementById("demo").innerHTML = '<div class="alert alert-info"><strong>Espere</strong> Cargando Contenido ... espere <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>';
            }

            return array;
        };
        xhttp.open("GET", "getJson/getVentas.php", true);
        xhttp.send();
        // The function returns the product of p1 and p2
    }

    function loadTablaVentas() {
        var table = $('#tablaVentas').DataTable({
            "ajax": "json/Ventas.json",
            "columns": [
                {"data": "venta"},
                {"data": "Cliente"},
                {"data": "Estatus"},
                {"data": "Pedido"},
                {"data": "Vendedor"},
                {"data": "Total"}
            ]
        });

        //al darle clic a un row invoca a saveVaClient()
        $('#tablaVentas').on('click', 'tr', function () {
            var data = table.row(this).data();
            //alert('You clicked on ' + data.Cliente + '\'s row');
            EliminaCancelaPedido(data.venta, data.Cliente);
        });
    }

    function EliminaCancelaPedido(Venta, Cliente) {
        $('#inputVenta').val(Venta);
        $('#inputCliente').val(Cliente);
        $("#btnDialog").click();

        $("#btnCancela").on('click', function () {
            if (confirm("¿Estás seguro que quiere Cancelar la Venta?")) {
                CancelaVenta(Venta);
            } else {
                return false;
            }
        });
        $("#btnElimina").on('click', function () {
            if (confirm("¿Estás seguro que quiere Eliminar la Venta?")) {
                EliminaVenta(Venta);
            } else {
                return false;
            }
        });

        $("#btnConsulta").on('click', function () {
            location.href = "venta.php?venta=" + Venta + "&cliente=" + Cliente + "&gc=true";
        });

        $("#btnRemisiona").on('click', function () {
            $("#btnDialog").click();
            $("#btnRem").click();
            preRemision(Venta, Cliente);
        });
    }

    function preRemision(Venta, Cliente) {
        $('#inputVenta2').val(Venta);
        $('#inputCliente2').val(Cliente);

        $("#btnRemisionaNow").on('click', function () {
            if (confirm("¿Estás seguro que quiere Remisionar la Venta?")) {
                //sel1
                var tipop = $("#sel1").val();
                var Accion = "R";
                $('#inputCliente2').val(Cliente);
                console.log(Venta);
                console.log(Accion);
                console.log(tipop);
                Remisiona(Venta, Accion, tipop);
            } else {
                return false;
            }
        });
        $("#btnFacturarNow").on('click', function () {
            if (confirm("¿Estás seguro que quiere Facturar la Venta?")) {
                //sel1
                var tipop = $("#sel1").val();
                var Accion = "F";
                $('#inputCliente2').val(Cliente);
                console.log(Venta);
                console.log(Accion);
                console.log(tipop);
                Remisiona(Venta, Accion, tipop);
            } else {
                return false;
            }
        });
    }

    function Remisiona(Venta, accion, tipop) {
        $("#btnRem").click();
        document.getElementById("demo").innerHTML = '<div class="alert alert-info alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Espere!</strong> Procesando Solicitud <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>';
        $.ajax({
            type: "POST",
            url: "getJson/remisionaVenta.php",
            data: "RemisionaVenta=true&cVenta22=" + Venta + "&cPago=" + tipop + "&cTipop=" + accion,
            success: function (text) {
                console.log(text);
                if (text.includes("Remision")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Acción realizada  <i class="pe-7s-check pe-2x pe-va"></i></div>';
                    //location.reload();
                } else if (text.includes("La venta ya esta Remisionada")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-warning alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Warning!</strong> La venta ya esta Remisionada  <i class="pe-7s-shield pe-2x pe-va"></i></div>';
                    //location.reload();
                } else if (text.includes("La venta ya esta Facturada")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-warning alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Warning!</strong> La venta ya esta Facturada  <i class="pe-7s-shield pe-2x pe-va"></i></div>';
                    //location.reload();
                } else if (text.includes("Factura")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Acción realizada  <i class="pe-7s-check pe-2x pe-va"></i></div>';
                    //location.reload();
                } 
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
    function EliminaVenta(Venta) {
        document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Espere!</strong> Eliminando venta <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>';
        $.ajax({
            type: "POST",
            url: "getJson/deleteVenta.php",
            data: "eliminaVenta=true&cVenta22=" + Venta,
            success: function (text) {
                console.log(text);
                if (text.includes("Exito")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Acción realizada  <i class="pe-7s-check pe-2x pe-va"></i></div>';
                    //location.reload();
                }
                if (text.includes("Error")) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> El pedido  esta remisionado, facturado o no existe <i class="pe-7s-shield pe-2x pe-va"></i></div>';
                    //location.reload();
                } else {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> La acción terminó con un error Fatal presione F12</div>';

                }
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

    function CancelaVenta(Venta) {
        document.getElementById("demo").innerHTML = '<div class="alert alert-secondary alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Espere!</strong> Cancelando venta <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>';
        $.ajax({
            type: "POST",
            url: "getJson/cancelaVenta.php",
            data: "CancelaVenta=true&cVenta22=" + Venta,
            success: function (text) {
                console.log(text);
                var n = text.includes("cancelado");
                if (n) {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Success!</strong> Acción realizada  <i class="pe-7s-check pe-2x pe-va"></i></div>';
                    //location.reload();
                } else {
                    document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible">   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   <strong>Error!</strong> La acción terminó con un error Fatal presione F12</div>';

                }
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
</script>