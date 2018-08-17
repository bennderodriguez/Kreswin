<div id="demo2" class="collapse">
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
                <input type="number" class="form-control form-control-sm" id="DescuentoProd" name="DescuentoProd" required="" value="0">
            </div>
        </div>
        <!--div class="col-sm-1">
            <div class="form-group">
                <label>Agregar</label>
                <button type="submit" class="btn btn-outline-success btn-sm" id="addProduct">Ok</button> 
            </div>
        </div-->
    </div>
</div>
