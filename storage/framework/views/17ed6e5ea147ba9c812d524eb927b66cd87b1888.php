<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Post</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Post Here</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Add Jobs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Jobs Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo e(url('/store_job_post')); ?>" method="post">
              	<?php echo csrf_field(); ?>
                <div class="card-body">
                <label>Category Select</label>
                    <select class="custom-select" name="cat_id">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <input type="hidden" name="company_id" value="<?php echo e($company_id); ?>">

                <div class="form-group">
                    <label for="exampleInputEmail1">Company or Indivudual Name</label>
                    <input type="text" class="form-control" name="company_name" placeholder="Enter Name"  value="<?php echo e($txtCompanyName->txtCompanyName); ?>" readonly >
                </div>

                <input type="hidden" name="status" value="0">
                <input type="hidden" name="company" value="1">

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Deadling</label>
                    <input type="date" class="form-control" name="deadline" placeholder="Enter Deadling" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Vacancy</label>
                    <input type="text" class="form-control" name="vacancy" placeholder="Enter Vacancy" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Publish on</label>
                    <input type="date" class="form-control" name="publish_on" placeholder="Enter Publish On" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Salary (if negotiatable enter 0 )</label>
                    <input type="text" class="form-control" name="salary" placeholder="Enter Salary" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Employee work type</label>
                    <select class="custom-select" name="work_type">
                      <option value="full_time">Full TIme</option>
                      <option value="part_time">Part TIme</option>
                      <option value="contractual">Contractual</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Experence</label>
                    <input type="number" class="form-control" name="experence" placeholder="Number will add with (At least like [2] year Experence)" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Age</label>
                    <input type="text" class="form-control" name="age" placeholder="example : 20 to 25" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Responsibilities </label>
                    <textarea id="editor1" name="responsibilities"></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Additional Requirements </label>
                    <textarea id="editor2" name="requirement"></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor2' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Educational Requirements </label>
                    <textarea id="editor3" name="education_requirement"></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor3' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Other Benifits </label>
                    <textarea id="editor4" name="benifit"></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor4' );
                </script>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
      </div>
  </div>
</section>


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://diu.ac/"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('assets/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('assets/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('assets/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('assets/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('assets/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/dist/js/adminlte.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('assets/dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('assets/dist/js/demo.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/front/add_post/add_post.blade.php ENDPATH**/ ?>