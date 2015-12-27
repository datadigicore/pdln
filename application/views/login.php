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
	<div class="container" style="margin-bottom:100px">
    <form method="post" class="form-login shadow-panel" action="<?php echo base_url();?>login">
      <h2 class="form-login-heading">
      	<img src="<?php echo base_url();?>img/kemdikbud.png" style="width: 64px;">
      </h2>
      <?php if (isset($error_message)){?>
        <div class="alert alert-<?php echo $alert_type;?> fade in" style="padding:10px; margin:10px; margin-bottom:0;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Perhatian!</strong><br><?php echo $error_message; ?>
        </div>
      <?php } ?>
      <div class="login-wrap">
        <input type="hidden" name="content" value="process">
        <input type="text" class="form-control" placeholder="Email / Username" autofocus name="usernames">
        <br>
        <input type="password" class="form-control" placeholder="Password" name="passwords">
        <label class="checkbox">
            <span class="pull-right">
                <a data-toggle="modal" href="login.html#myModal"> Lupa Password?</a>

            </span>
        </label>
        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        <hr>
      </form>     
        <div class="login-social-link centered">
          <div class="registration">
              Don't have an account yet?<br/>
              <form method="POST" action="<?php echo base_url();?>login">
                  <input type="hidden" name="content" value="create">
                  <a onclick="$(this).closest('form').submit()">Create an account</a>
              </form>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url()?>plugin/jquery/jquery.js"></script>
	<script src="<?php echo base_url()?>plugin/jquery/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url()?>plugin/bootstrap/bootstrap.min.js"></script>
      <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script src="<?php echo base_url();?>plugin/jquery/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/bg_big.jpg", {speed: 500});
    </script>

</body>
</html>