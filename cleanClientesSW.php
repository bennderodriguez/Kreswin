<?php include 'headers.php'; ?>

<div class="container">
     <h4>Cliente</h4>
    <p>
        Esta pagina invoca al SW de caltalogo de clientes y procesa su contenido
        por que contine Spam, <br>
        luego lo salva en un archivo JSON para ser conusmido localmente<br>

        Success: Exito<br>
        Error: algo salio mal revizar log F12<br>
        Habilitar CORS

    </p><br>
    <div id="demo"></div>
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
                var array2 = array.replace(", {}", "");
                console.log(array2);
                //document.getElementById("demo").innerHTML = array;
                $.ajax({
                    type: "POST",
                    url: "clean-json/get-url.php",
                    data: "dataArray=" + array2 + "&fileName=Clientes",
                    success: function (text) {
                        if (text == "success") {
                            document.getElementById("demo").innerHTML = '<div class="alert alert-success"><strong>Succes!</strong> Se cargo correctamete <a href="json/Clientes.json" target="_blank" class="alert-link">See more</a></div>';
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
        xhttp.open("GET", "http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/Berna/SWCCliente.bwp", true);
        xhttp.send();
        // The function returns the product of p1 and p2
    }

    $(document).ready(function () {
        myFunction();
    });
</script>

