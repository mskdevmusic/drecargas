<div class="modal fade py-5" tabindex="-1" role="dialog" id="modalRecarga">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                <h1 class="fw-bold mb-0 fs-2">Registrar Recarga</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form id="formRecarga" enctype="multipart/form-data">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" id="codigovoucher" name="codigovoucher" placeholder="Codigo de voucher">
                        <label for="codigovoucher">Cod Voucher:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-3" id="montorecarga" name="montorecarga" placeholder="Password">
                        <label for="montorecarga">Monto a recargar:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="contenido_select_banco" name="contenido_select_banco" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="contenido_select_banco">Bancos</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="contenido_select_tipo_transaccion" name="contenido_select_tipo_transaccion" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="contenido_select_tipo_transaccion">Tipo de transacciones</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="contenido_select_canal_comunicacion" name="contenido_select_canal_comunicacion" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="contenido_select_canal_comunicacion">Canal de comunicacion</label>
                    </div>

                    <div class="form-floating mb-3">
                        <div class="mb-3">
                            <label for="archivovoucher" class="form-label">Subir Voucher</label>
                            <input class="form-control" type="file" id="archivovoucher" name="archivovoucher">
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <div class="mb-3">
                            <label for="exampleColorInput" class="form-label">Fecha de Operacion</label>
                            <input type="datetime-local" class="form-control" id="fechaoperacion" name="fechaoperacion">
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-3" id="idjugador" name="idjugador" placeholder="Ingrese dni del jugador">
                        <label for="idjugador">DNI Jugador</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" id="observacion" name="observacion" placeholder="Ingrese comentario">
                        <label for="observacion">Comentario</label>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="button" id="btnRegistrarRecarga">Registrar Recarga</button>
                    <small class="text-muted">Al clickar en registrar, se recargara el saldo al usuario</small>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</div>