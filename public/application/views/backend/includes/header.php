<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gerenciador | Marjan</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/jQueryUI/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/jQueryUI/jquery-ui.theme.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/colorpicker/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/timepicker/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/select2/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/iCheck/all.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/file-upload/jquery.fileupload.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/plugins/tags-input/jquery.tagsinput.min.css">

	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?php echo base_url(PATH_DIST_CMS)?>/dist/css/extras.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script>
		var baseUrl = '<?php echo base_url($this->base_cms)?>';
		var baseUrlCtrl = '<?php echo '/'.$this->controller_module; ?>';
		var strSearch = '<?php echo isset($field_search) ? $field_search : ""?>';
	</script>

	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/jQueryUI/jquery-ui.min.js"></script>

</head>

