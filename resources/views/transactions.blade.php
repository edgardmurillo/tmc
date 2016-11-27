<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TMC 2.0 | Transacciones</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="content-box">
<div class="wrapper">

  <div class="login-logo">
    <a href="#"><b>TMC</b>2.0</a>
  </div>


          <div class="box">
            <p class="login-box-msg">Revisa todas tus transacciones aq&iacute;</p>

      <div class="row">
        <div class="col-lg-4 col-xs-6">
            <button type="submit" class="btn btn-danger btn-block btn-flat">Por Procesar</button>
        </div>
        <div class="col-lg-4 col-xs-6">
            <button type="submit" class="btn btn-success btn-block btn-flat">Procesados</button>
        </div>
        <div class="col-lg-4 col-xs-6">
            <button type="submit" class="btn btn-warning btn-block btn-flat">Facturados</button>
        </div>
      </div>


            <div class="box-header">
              <h3 class="box-title">Pagos por Procesar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N&uacute;mero</th>
                  <th>Concepto</th>
                  <th>Cliente</th>
                  <th>Fecha</th>
                  <th>Monto(Bs)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>0009</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>50000</td>
                </tr>
                <tr>
                  <td>0014</td>
                  <td>Saco de naranjas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>40000</td>
                </tr>
                <tr>
                  <td>0015</td>
                  <td>Refrescos</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>30000</td>
                </tr>
                <tr>
                  <td>0016</td>
                  <td>Botellas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>20000</td>
                </tr>
                <tr>
                  <td>0020</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>0021</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>50000</td>
                </tr>
                <tr>
                  <td>0022</td>
                  <td>Saco de naranjas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>40000</td>
                </tr>
                <tr>
                  <td>0023</td>
                  <td>Refrescos</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>30000</td>
                </tr>
                <tr>
                  <td>0024</td>
                  <td>Botellas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>20000</td>
                </tr>
                <tr>
                  <td>0025</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>0026</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>50000</td>
                </tr>
                <tr>
                  <td>0027</td>
                  <td>Saco de naranjas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>40000</td>
                </tr>
                <tr>
                  <td>0028</td>
                  <td>Refrescos</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>30000</td>
                </tr>
                <tr>
                  <td>0029</td>
                  <td>Botellas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>20000</td>
                </tr>
                <tr>
                  <td>0030</td>
                  <td>Saco de papas</td>
                  <td>Eduardo Perez</td>
                  <td>2016</td>
                  <td>10000</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>N&uacute;mero</th>
                  <th>Concepto</th>
                  <th>Cliente</th>
                  <th>Fecha</th>
                  <th>Monto(Bs)</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</div>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="diapp.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="didemo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
