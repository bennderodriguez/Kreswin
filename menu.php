<?php include 'headers.php'; ?>

<div class="container" style="margin-top:60px">
    <h2>CresCloud</h2>
    <p>Pannel de administración</p>
    <p>Para continuar proporcione la Cookie de autenticación Crescloud <a href="asset/images/Captura.PNG" target="_blank"><i class="pe-7s-info" id="info"></i></a></p>
    <p>Ustede debe Loguearse en Crescloud y copiar la Cookie generada</p>

    <form role="form" id="cookieForm" data-toggle="validator" class="shake" autocomplete="off" accept-charset="utf-8">
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="name" class="h4">Cookie Value</label>
                <input type="text" class="form-control" id="cookie" placeholder="Enter Cookie" required data-error="Cookie is required">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Guardar</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>

    <div class="row">
        <div class="col-4"><button class="btna btn-primary" onclick="location.href = 'ConsultaVentas.php'"><i class="pe-7s-shopbag"></i> Ventas <br><span id="countVentas" class="countVentas"></span></button></div>
        <div class="col-4"><button class="btna btn-success"><i class="pe-7s-users"></i> Clientes <span id="countCliente" class="countCliente"></></button></div>
        <div class="col-4"><button class="btna btn-info"><i class="pe-7s-car"></i> Rutas<br> <span id="countRuta" class="countRuta"></></button></div>
    </div>

    <div class="row">
        <div class="col-4"><button class="btna btn-default"><i class="pe-7s-gift"></i> Productos<br> <span id="countProductos" class="countProductos"></></button></div>       
        <div class="col-4"><button class="btna btn-warning"><i class="pe-7s-smile"></i> Vendedores<br> <span id="countVendedor" class="countVendedor"></></button></div>
    </div>

</div>
<?php include 'footer.php'; ?>
<script src="asset/js/cookieForm.js"></script>

<script>

            $(document).ready(function () {
                consultaDatosCliente();
                consultaDatosProducto();
                consultaDatosRutas();
                consultaDatosVendedor();
                consultaDatosVentas();


            });

            function consultaDatosVendedor() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        //var serverRequest = this.responseText;
                        var myObj = JSON.parse(this.responseText);
                        var count = Object.keys(myObj.data).length;
                        console.log(count);

                        document.getElementById("countVendedor").innerHTML = count;

                        $({Counter: 0}).animate({
                            Counter: $('.countVendedor').text()
                        }, {
                            duration: 1000,
                            easing: 'swing',
                            step: function () {
                                $('.countVendedor').text(Math.ceil(this.Counter));
                            }
                        });
                    }
                };
                xhttp.open("GET", "json/Vendedor.json", true);
                xhttp.send();
                // The function returns the product of p1 and p2
            }

            function consultaDatosRutas() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        //var serverRequest = this.responseText;
                        var myObj = JSON.parse(this.responseText);
                        var count = Object.keys(myObj.data).length;
                        console.log(count);

                        document.getElementById("countRuta").innerHTML = count;

                        $({Counter: 0}).animate({
                            Counter: $('.countRuta').text()
                        }, {
                            duration: 1000,
                            easing: 'swing',
                            step: function () {
                                $('.countRuta').text(Math.ceil(this.Counter));
                            }
                        });
                    }
                };
                xhttp.open("GET", "json/Rutas.json", true);
                xhttp.send();
                // The function returns the product of p1 and p2
            }

            function consultaDatosCliente() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        //var serverRequest = this.responseText;
                        var myObj = JSON.parse(this.responseText);
                        var count = Object.keys(myObj.data).length;
                        console.log(count);

                        document.getElementById("countCliente").innerHTML = count;

                        $({Counter: 0}).animate({
                            Counter: $('.countCliente').text()
                        }, {
                            duration: 1000,
                            easing: 'swing',
                            step: function () {
                                $('.countCliente').text(Math.ceil(this.Counter));
                            }
                        });
                    }
                };
                xhttp.open("GET", "json/Clientes.json", true);
                xhttp.send();
                // The function returns the product of p1 and p2
            }

            function consultaDatosProducto() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        //var serverRequest = this.responseText;
                        var myObj = JSON.parse(this.responseText);
                        var count = Object.keys(myObj.data).length;
                        console.log(count);

                        document.getElementById("countProductos").innerHTML = count;

                        $({Counter: 0}).animate({
                            Counter: $('.countProductos').text()
                        }, {
                            duration: 1000,
                            easing: 'swing',
                            step: function () {
                                $('.countProductos').text(Math.ceil(this.Counter));
                            }
                        });
                    }
                };
                xhttp.open("GET", "json/Producto.json", true);
                xhttp.send();
                // The function returns the product of p1 and p2
            }

            function consultaDatosVentas() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        //var serverRequest = this.responseText;
                        var myObj = JSON.parse(this.responseText);
                        var count = Object.keys(myObj.data).length;
                        console.log(count);

                        document.getElementById("countVentas").innerHTML = count;

                        $({Counter: 0}).animate({
                            Counter: $('.countVentas').text()
                        }, {
                            duration: 1000,
                            easing: 'swing',
                            step: function () {
                                $('.countVentas').text(Math.ceil(this.Counter));
                            }
                        });
                    }
                };
                xhttp.open("GET", "json/Ventas.json", true);
                xhttp.send();
                // The function returns the product of p1 and p2
            }



</script>