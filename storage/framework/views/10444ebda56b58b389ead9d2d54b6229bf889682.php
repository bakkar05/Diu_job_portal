<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
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


  <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
  <script src="<?php echo e(asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Panel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/content-show')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Messages
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User 
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/job_applicants')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job Applicants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/users')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/cmp_details')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/job_approve')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job Approve </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/job_posts')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job Posts </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
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
                <h3 class="card-title">Update Jobs Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo e(url('/update_jobs')); ?>" method="post">
              	<?php echo csrf_field(); ?>
              	<input type="hidden" name="id" value="<?= $data->id; ?>">
                <div class="card-body">
                <label>Category Select</label>
                    <select class="custom-select" name="cat_id">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($cat->id); ?>" <?php if($cat->id == $data->cat_id): ?> selected <?php endif; ?> ><?php echo e($cat->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Company or Indivudual Name</label>
                    <input type="text" class="form-control" name="company_name" value="<?= $data->company_name; ?>" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data->name; ?>" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Deadling</label>
                    <input type="date" class="form-control" name="deadline" value="<?= $data->deadline; ?>" placeholder="Enter Deadling" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Vacancy</label>
                    <input type="text" class="form-control" name="vacancy" value="<?= $data->vacancy; ?>" placeholder="Enter Vacancy" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Publish on</label>
                    <input type="date" class="form-control" name="publish_on" value="<?= $data->publish_on; ?>" placeholder="Enter Publish On" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Salary (if negotiatable enter 0 )</label>
                    <input type="text" class="form-control" name="salary" value="<?= $data->salary; ?>" placeholder="Enter Salary" required>
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
                    <input type="number" class="form-control" name="experence" value="<?= $data->experence; ?>" placeholder="Number will add with (At least like [2] year Experence)" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Age</label>
                    <input type="text" class="form-control" name="age" value="<?= $data->age; ?>" placeholder="example : 20 to 25" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Location</label>
                    <input type="text" class="form-control" name="location" value="<?= $data->location; ?>" placeholder="Enter Location" required>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Responsibilities </label>
                    <textarea id="editor1" name="responsibilities"> <?= $data->responsibilities; ?></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Job Additional Requirements </label>
                    <textarea id="editor2" name="requirement"> <?= $data->requirement; ?></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor2' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Educational Requirements </label>
                    <textarea id="editor3" name="education_requirement"><?= $data->education_requirement; ?></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor3' );
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Other Benifits </label>
                    <textarea id="editor4" name="benifit"><?= $data->benifit; ?></textarea>
                </div>

                <script>
                        CKEDITOR.replace( 'editor4' );
                </script>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2-pre
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
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/jobs/edit_jobs.blade.php ENDPATH**/ ?>