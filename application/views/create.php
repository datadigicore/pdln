<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>:: Perjalanan Dinas Luar Negeri ::</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>plugin/bootstrap/bootstrap.css" rel="stylesheet">
    
    <!--Font Awesome css-->
    <link href="<?php echo base_url()?>plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>css/pdln-style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/pdln-style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
<div id="login-page">
  	<div class="container" style="margin-bottom:50px">
      <form method="post" class="form-create shadow-panel" action="<?php echo base_url();?>login">
        <h2 class="form-create-heading">
        	<img src="<?php echo base_url();?>img/kemdikbud.png" style="width: 64px;">
        </h2>
        <?php if (isset($error_message)){?>
          <div class="alert alert-<?php echo $alert_type;?> fade in" style="padding:10px; margin:10px; margin-bottom:0;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Perhatian!</strong><br><?php echo $error_message; ?>
          </div>
        <?php } ?>
        <div class="login-wrap">
            <input type="hidden" name="content" value="addnew">
            <input type="text" class="form-control" placeholder="Nama" autofocus name="fullname" required>
            <br>
            <textarea type="text" class="form-control" placeholder="Alamat" autofocus name="address"></textarea>
            <br>
            <input type="email" class="form-control" placeholder="Email" autofocus name="emails" required>
            <br>
            <input type="text" class="form-control" placeholder="No. Telepon" autofocus name="phones">
            <br>
            <input type="text" class="form-control" placeholder="Username" autofocus name="usernames" required>
            <br>
            <input type="password" class="form-control" placeholder="Password" name="passwords" required>
            <br>
            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> CREATE</button>
            <hr>
            
            <div class="login-social-link centered">
            <div class="registration">
                Already have an account?<br/>
                <a href="login">
                    Back to login
                </a>
            </div>

        </div>

      </form>	  	
	
	</div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url()?>plugin/jquery/jquery.js"></script>
	<script src="<?php echo base_url()?>plugin/jquery/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url()?>plugin/bootstrap/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script src="<?php echo base_url()?>plugin/jquery/jquery.backstretch.min.js"></script>

  </body>
</html>