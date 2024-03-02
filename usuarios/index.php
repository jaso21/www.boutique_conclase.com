<?php
  include ('../app/config.php');
  include ('../layout/sesion.php');
  include ('../layout/parte1.php');

  include ('../app/controllers/usuarios/listado_usuarios.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Usuarios</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped table-sm">
                              <tr>
                                <th>Nro</th>
                                <th>Nombres</th>
                                <th>Email</th>
                              </tr>
                              <tbody>
                                <?php 
                                  foreach ($usuarios_datos as $usuario_dato){?>
                                    <tr>
                                      <td><?php echo $usuario_dato['id_usuario'];?></td>
                                      <td><?php echo $usuario_dato['nombres'];?></td>
                                      <td><?php echo $usuario_dato['email'];?></td>
                                    </tr>
                                    
                                <?php
                                  }
                                ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
  include ('../layout/parte2.php');
?>