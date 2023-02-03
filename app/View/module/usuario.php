<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Supervisor Billetera</h1>
                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Ingresa DNI" id="buscarusuario">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default" id="clickbuscarusuario">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Datos Billetera</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="labelusuariousuario">Usuario</label>
                                <input type="text" class="form-control" id="labelusuariousuario" placeholder="Enter email" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="labelnombreusuario">Nombre</label>
                                <input type="text" class="form-control" id="labelnombreusuario" placeholder="Password" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="labelapellidousuario">Apellido</label>
                                <input type="text" class="form-control" id="labelapellidousuario" placeholder="Password" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="labelsaldoactualusuario">Saldo Actual</label>
                                <input type="email" class="form-control" id="labelsaldoactualusuario" placeholder="Enter email" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="labeldniusuario">DNI</label>
                                <input type="text" class="form-control" id="labeldniusuario" placeholder="Password" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="labelcelularusuario">Celular</label>
                                <input type="text" class="form-control" id="labelcelularusuario" placeholder="Password" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Historial de Recargas</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Codigo de Pago</th>
                                        <th>Saldo Recargado</th>
                                        <th>Banco</th>
                                        <th>Tipo Transaccion</th>
                                        <th>Via de comunicacion</th>
                                        <th>Fecha de operacion</th>
                                    </tr>
                                </thead>
                                <tbody id="contenido_tabla_usuario_historial_recargas">

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                        <div class="info-box-content" id="contenido_info_monto">

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="far fa-heart"></i></span>

                        <div class="info-box-content" id="contenido_info_cantidad">

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-md-3">
                    <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Downloads</span>
                            <span class="info-box-number">114,381</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-3">
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="far fa-comment"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->