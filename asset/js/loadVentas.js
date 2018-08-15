/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function loadVentas() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            //document.getElementById("des").innerHTML = myObj.Total.Venta;
            document.getElementById("NumVent").innerHTML = myObj.Total.Venta;
            document.getElementById("TCantidad").innerHTML = myObj.Total.TCantidad;
            document.getElementById("TImporte").innerHTML = myObj.Total.TImporte;
            document.getElementById("TNeto").innerHTML = myObj.Total.TNeto;
            //document.getElementById("Tieps").innerHTML = myObj.Total.Tieps;
            //document.getElementById("Tiva").innerHTML = myObj.Total.Tiva;
            //document.getElementById("Tsaldo").innerHTML = myObj.Total.Tsaldo;
            $('#Tieps').val(myObj.Total.Tieps);
            $('#Tiva').val(myObj.Total.Tiva);
            $('#Tsaldo').val(myObj.Total.Tsaldo);
        }
    };
    xmlhttp.open("GET", "json/Ventas.json", true);
    xmlhttp.send();

}