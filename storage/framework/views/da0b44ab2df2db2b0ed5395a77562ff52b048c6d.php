<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="<?php echo e(asset('assets/two/icon.png')); ?>">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo e(asset('assets/two/css/bootstrap.css')); ?>">  
  <link rel="stylesheet" href="<?php echo e(asset('assets/two/font-awesome/css/font-awesome.min.css')); ?>">  
  <link rel="stylesheet" href="<?php echo e(asset('assets/two/css/normalize.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/two/css/main.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  <meta name="theme-color">
</head>

<body class="overfl">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<header class="headsection navbar-fixed-top">

  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong><?php echo e($message); ?></strong>
  </div>
  <?php endif; ?>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
    <div class="navbar-brand" href ="#">
    <div class="logo">
    <img src="<?php echo e(asset('assets/front/de.jpg')); ?>">
    </div>
    <div class="title" style="margin-left: 123px;margin-top: -27px;">
    <h2>DIU Job <span>Portal</span></h2>
    </div>
     </a>
    </div>
     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <?php if(!isset($login_yes)): ?>
        
    <li><a href="<?php echo e(url('/sign_up')); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
    <li><a href="<?php echo e(url('/user_login')); ?>"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
    <li><a href="<?php echo e(url('/reg_form')); ?>"><span class="glyphicon glyphicon-log-in"></span> Company Registration </a></li>

    <?php else: ?>

    <li><a href="<?php echo e(url('/logout')); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
    <?php if(isset($txtCompanyid)): ?>
    <li><a href="<?php echo e(url('/view_profile_company/'.$txtCompanyid)); ?>"><span class="glyphicon glyphicon-log-in"></span> View Own Profile </a></li>
    <li><a href="<?php echo e(url('/add_post/'.$txtCompanyid)); ?>"><span class="glyphicon glyphicon-log-in"></span> Add Posts </a></li>
    <?php endif; ?>
    <?php if(!isset($txtCompanyid)): ?>
    <li><a href="<?php echo e(url('/view_profile_applicants/'.$applicants_id)); ?>"><span class="glyphicon glyphicon-log-in"></span> View Own Profile </a></li>
    <?php endif; ?>
    

    <?php endif; ?>

     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</header>
  
  <section class="bannersection">
    
        <div class="container">


          <div style="margin: 223px;font-size: 29px;margin-left: 89px;"><h2>Welcome to </h2>

      <h2>Dhaka International University </h2>
      <p></p>
     </div>
		
		<div class="banner">
    
		
       
       </div>
</div>
</div>
</section>  

		


  
  
<section class="servicesection">
<div class="container">
<center><h2>JOB CATAGORIES</h2></center>
<div class="row">

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4">
   <div class="service text-center">
     <div class="serviceing">
    <span class="glyphicon glyphicon-user"></span>
    <a href="<?php echo e(url('/front_posts/'.$info->id )); ?>"><?php echo e($info->name); ?></a>
    <p></p>
    </div>
  </div>
</div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>

</section>

<!--Section: Contact v.2-->

<div class="col-md-4">
<div class="clintimg">
</div>
</div>

<section class="mb-4">




    <!--Section heading-->
	<div class="footersection">
	
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="<?php echo e(url('/contact_form')); ?>" method="POST">
              <?php echo csrf_field(); ?>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                          
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                          
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                             <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                         
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <div class="text-center text-md-left">
                    <button class="btn btn-primary" type="submit">Send</button>
                </div>

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Dhaka International University, Greenroad-66, 1205, Bangladeash</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01611348345</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>Emaill: inf@diu-bd.net</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>Web: https://diu.ac/</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
</div>


 
</body>

</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/front/home/home.blade.php ENDPATH**/ ?>