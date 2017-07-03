<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marjan | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS); ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS); ?>/dist/css/extras.css">

    <script>
		var baseUrl = '<?php echo base_url(PATH_DIST_CMS); ?>';
		var baseUrlCtrl = '<?php echo $this->controller_module; ?>';
	</script>

	<style>
		.login-box {
			position: absolute;
			top: 50%;
			left: 50%;
			margin: 0;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-o-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url(PATH_DIST_CMS); ?>/"><b>Marjan</b> 2.0 </a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">

        <?php echo form_open_multipart('', array('class' => 'login-form'));?>

          <div class="form-group login-form-name">
            <input type="email" name="email" class="form-control" placeholder="Email" data-valid-input-backend="<?php echo base_url($this->base_cms)."/home/check_mail"; ?>" value="" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group login-form-pass">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <hr>

          <div class="form-group text-right">
            <a href="#" class="login-form-pass__btn"><i class="fa fa-remove"></i> Esqueci minha senha</a>
          </div>

          <div class="row">
            <div class="box-footer text-center">
				<div class="text-center text-red" style="display: <?php if(!empty($feedback_error)){ ?> block <?php } ?>">
					<?php if(!empty($feedback_error)){?> <p><?php echo $feedback_error; ?></p> <?php } ?>
				</div>
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>

        <?php echo form_close();?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script id="feedback-template" type="text/template">
		<div class="feedback alert alert-<%= action %> alert-dismissable" style="display: block">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa <%if(action == 'danger'){%>fa-ban<%}else{%>fa-check<%}%>"></i> <%= (action == 'success') ? 'Sucesso!' : 'Opsss!' %></h4>
			<%= message %>
		</div>
	</script>

  <script src="<?php echo base_url(PATH_DIST_CMS); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(PATH_DIST_CMS); ?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS); ?>/plugins/underscore/underscore.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS); ?>/plugins/shift-selectable/shift-selectable.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS); ?>/dist/js/app.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS); ?>/dist/js/extras.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS); ?>/plugins/parsley/parsley.min.js"></script>
  </body>
</html>
