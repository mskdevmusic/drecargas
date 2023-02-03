<div class="modal fade py-5" tabindex="-1" role="dialog" id="modalUsuario">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                <h1 class="fw-bold mb-0 fs-2">Registrar Nuevo Jugador</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form id="formUsuario" enctype="multipart/form-data">

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="txtmodalusuariousuario" name="txtmodalusuariousuario" placeholder="Ingrese email">
                        <label for="txtmodalusuario">usuario:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="txtmodalclaveusuario" name="txtmodalclaveusuario" placeholder="Ingrese email">
                        <label for="txtmodalclaveusuario">Clave:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="txtmodalnombreusuario" name="txtmodalnombreusuario" placeholder="Ingrese email">
                        <label for="txtmodalnombreusuario">Nombre:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="txtmodalapepatusuario" name="txtmodalapepatusuario" placeholder="Ingrese email">
                        <label for="txtmodalapepatusuario">Apellido Paterno:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="txtmodalapematusuario" name="txtmodalapematusuario" placeholder="Ingrese email">
                        <label for="txtmodalapematusuario">Apellido Materno:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-3" id="txtmodaldniusuario" name="txtmodaldniusuario" placeholder="Ingrese dni del jugador">
                        <label for="txtmodaldniusuario">DNI Jugador</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-3" id="txtmodaltelefonousuario" name="txtmodaltelefonousuario" placeholder="Ingrese dni del jugador">
                        <label for="txtmodaltelefonousuario">Telefono</label>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="button" id="btnRegistrarUsuario">Registrar Usuario</button>
                    <small class="text-muted">Al clickar en registrar, se recargara el saldo al usuario</small>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</div>