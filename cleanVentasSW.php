<?php include 'headers.php'; ?>

<div class="container">
    <h4>Consultar Ventas</h4>
    <div id="demo"></div>
    <form>
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" id="NumVent" name="NumVent" class="form-control form-control-sm" placeholder="Número de Venta" required>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="LoadDataJson()" title="Buscar Venta por Id">Buscar <span class="pe-7s-search"></span></button> 
                </div>
            </div>
        </div>
    </form>

</div>

<?php include 'footer.php'; ?>

<script>
    function myFunction() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var serverRequest = this.responseText;
                var array = '{"data" : ';
                array += serverRequest.replace("},]", "}]");
                //array += array.replace("{}", "");
                array += '}';
                var array2 = array.replace(",{}", "");
                console.log(array2);
                //document.getElementById("demo").innerHTML = array;
                $.ajax({
                    type: "POST",
                    url: "clean-json/get-url.php",
                    data: "dataArray=" + array2 + "&fileName=Ventas",
                    success: function (text) {
                        if (text == "success") {
                            document.getElementById("demo").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succes!</strong> Se cargo correctamete <a href="json/Ventas.json" target="_blank" class="alert-link">See more</a></div>';
                        } else {
                            document.getElementById("demo").innerHTML = '<div class="alert alert-danger"><strong>Error</strong> Ocurrio un error presione F12</div>';
                        }
                    }
                });
            } else {
                document.getElementById("demo").innerHTML = '<div class="alert alert-info"><strong>Espere</strong> Cargando Contenido ... espere</div>';
            }

            return array;
        };
        xhttp.open("GET", "http://focus.acceso.crescloud.com/cgi-bwp/expert/Check3.bwp?cVenta2=0051995", true);
        xhttp.send();
        // The function returns the product of p1 and p2
    }

    $(document).ready(function () {
        myFunction();
    });
</script>

