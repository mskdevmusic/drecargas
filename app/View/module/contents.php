<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Principal</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registrar Recarga</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3" data-toggle="modal" data-target="#modalRecarga">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registrar Recarga</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3" data-toggle="modal" data-target="#modalUsuario">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Registrar Usuario</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">


                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Recargas Recientes</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>CODIGO DE PAGO</th>
                                            <th>USUARIO JUGADOR</th>
                                            <th>MONTO RECARGADO</th>
                                            <th>BANCO</th>
                                            <th>TIPO DE TRANSACCION</th>
                                            <th>VIA DE COMUNICACION</th>
                                            <th>FECHA RECARGA</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla_recargas_recientes">
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
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