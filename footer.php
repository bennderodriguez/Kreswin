      
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="asset/js/jquery-3.2.1.slim.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<!-- JQuery Export datatable csv,excel pdf -->
<script src="asset/js/jquery-1.12.4.js"></script>
<script src="asset/js/jquery.dataTables.min.js"></script>
<script src="asset/js/dataTables.buttons.min.js"></script>
<script src="asset/js/jszip.min.js"></script>
<script src="asset/js/pdfmake.min.js"></script>
<script src="asset/js/vfs_fonts.js"></script>
<script src="asset/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="asset/js/loader.js"></script>
<script type="text/javascript" src="asset/js/loadVentas.js"></script>

<!-- Web Service Login -->
<script src="asset/js/validator.min.js"></script>
<script type="text/javascript" src="asset/js/consulta.js"></script>
<script>

    /**
     * Recibe parametros y Setea los inputs del form con los valores recibidos
     * @param {type} Cliente
     * @param {type} Nombre
     * @param {type} Nombre2
     * @param {type} Ciudad
     * @param {type} Tipo
     * @param {type} Vendedor
     * @returns {undefined}
     */
    function setValClient(Cliente, Nombre, Nombre2, Ciudad, Tipo, Vendedor) {
        $('#Cliente').val(Cliente);
        $('#Nombre').val(Nombre);
        $('#Nombre2').val(Nombre2);
        $('#Ciudad').val(Ciudad);
        $('#Tipo').val(Tipo);
        $('#Vendedor').val(Vendedor);
    }

    /**
     * Carga el cataogo de clientes 
     * @returns {undefined}
     */
    function LoadDataJson() {
        var table = $('#example').DataTable({
            "ajax": "json/Clientes.json",
            "columns": [
                {"data": "Cliente"},
                {"data": "Nombre"},
                {"data": "Nombre2"},
                {"data": "Ciudad"},
                {"data": "Tipo"},
                {"data": "Vendedor"}
            ]
        });

        //al darle clic a un row invoca a saveVaClient()
        $('#example').on('click', 'tr', function () {
            var data = table.row(this).data();
            // alert('You clicked on ' + data.Cliente + '\'s row');
            setValClient(data.Cliente, data.Nombre, data.Nombre2, data.Ciudad, data.Tipo, data.Vendedor);
            //Cierra la ventana Modal
            $("#myModal .close").click()
        });
    }

    function LoadJsonRutas() {
        var table = $('#tableRuta').DataTable({
            "ajax": "json/Rutas.json",
            "columns": [
                {"data": "Ruta"},
                {"data": "Nombre"},
                {"data": "Id"}
            ]
        });

        //al darle clic a un row invoca a saveVaClient()
        $('#tableRuta').on('click', 'tr', function () {
            var data = table.row(this).data();
            //alert('You clicked on ' + data.Ruta + '\'s row');
            setValRuta(data.Ruta);
            //Cierra la ventana Modal Ruta
            $("#modalRuta .close").click()
        });
    }

    function setValRuta(Ruta) {
        $('#Ruta').val(Ruta);
    }

    function LoadJsonProductos() {
        var table = $('#tableProducto').DataTable({
            "ajax": "json/Producto.json",
            "columns": [
                {"data": "Producto"},
                {"data": "Descripcion"},
                {"data": "C_R_I"},
                {"data": "Unidad_de_empaque"}
            ]
        });

        //al darle clic a un row invoca a saveVaClient()
        $('#tableProducto').on('click', 'tr', function () {
            var data = table.row(this).data();
            //alert('You clicked on ' + data.descripcion + '\'s row');
            setProducto(data.Producto, data.Descripcion, data.C_R_I, data.Unidad_de_empaque);
            //Cierra la ventana Modal Ruta
            $("#modalProductos .close").click();
            ValidBtnProducto();
        });
    }

    function setProducto(Producto, Descripcion, C_R_I, Unidad_de_empaque) {
        $('#idProd').val(Producto);
        $('#DescripcionProd').val(Descripcion);
        $('#CantProd').val("1");
        $('#PrecioProd').val(C_R_I);
        $('#DescuentoProd').val(Unidad_de_empaque);
    }

    /**
     * Valida el boton para que no se cliquee si los campos de producto estan
     * Vacios
     * @returns {undefined}
     */
    function ValidBtnProducto() {
        if ($('#DescripcionProd').val() == "") {
            //$("#addProduct").addClass("disabled");
            document.getElementById("addProduct").disabled = true;
            //$("#addProduct").val("Glenn Quagmire");
        } else {
            document.getElementById("addProduct").disabled = false;
        }
    }

    //Agrega una Fila a la tabla con los datos del producto seleccionado
    function addRow() {
        $("#detalleProducto").append('<tr><td>' + $("#idProd").val() + '</td><td>' + $("#DescripcionProd").val() + '</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><tr>');
        delDataProductForm();
        ValidBtnProducto();
    }
    function delRow() {
        // Obtenemos el total de columnas (tr) del id "tabla"
        var trs = $("#detalleProducto tr").length;
        if (trs > 1)
        {
            // Eliminamos la ultima columna
            $("#detalleProducto tr:last").remove();
        }
    }
    /**
     * Limpia el formulario de producto cuando se selecciona uno
     * @returns {undefined}
     */
    function delDataProductForm() {
        $('#idProd').val("");
        $('#DescripcionProd').val("");
        $('#CantProd').val("");
        $('#PrecioProd').val("");
        $('#DescuentoProd').val("");
    }

    function LoadVenta() {
        var table = $('#ventas').DataTable({
            "ajax": "json/Ventas.json",
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
        $('#ventas').on('click', 'tr', function () {
            var data = table.row(this).data();
            alert('You clicked on ' + data.Producto + '\'s row');
            //setProducto(data.Producto, data.Descripcion, data.C_R_I, data.Unidad_de_empaque);
            //Cierra la ventana Modal Ruta
            //$("#modalVenta .close").click();
            //ValidBtnProducto();
        });
    }
</script>

</body>
</html>