

</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Poshima</b> v2.0
	</div>
	<strong>Copyright &copy; 2017 <a target="_blank" href="http://www.marjan.com.br/">MARJAN</a></strong>
</footer>

<div class="control-sidebar-bg"></div>
	</div><!-- ./wrapper -->


	<?php if(!empty($feedback_success)){ ?>

		<div class="feedback alert alert-success alert-dismissable" style="display:block">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-check-circle"></i> Sucesso!</h4>
			<?php echo $feedback_success; ?>
		</div>

	<?php } ?>

	<?php if(!empty($feedback_error)){ ?>

		<div class="feedback alert alert-danger alert-dismissable" style="display:block">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Opsss!</h4>
			<?php echo $feedback_error; ?>
		</div>

	<?php } ?>

	<script id="feedback-template" type="text/template">
		<div class="feedback alert alert-<%= action %> alert-dismissable" style="display: block">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa <%if(action == 'danger'){%>fa-ban<%}else{%>fa-check<%}%>"></i> <%= (action == 'success') ? 'Sucesso!' : 'Opsss!' %></h4>
			<%= message %>
		</div>
	</script>


	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/jQueryUI/datepicker-pt.js"></script>

	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/underscore/underscore.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/shift-selectable/shift-selectable.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/select2/select2.full.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/tags-input/jquery.tagsinput.min.js"></script>

	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/file-upload/jquery.iframe-transport.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/file-upload/jquery.fileupload.js"></script>

	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/url-slug/url_slug.js"></script>

	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/iCheck/icheck.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/fastclick/fastclick.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/plugins/parsley/parsley.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/dist/js/app.min.js"></script>
	<script src="<?php echo base_url(PATH_DIST_CMS)?>/dist/js/extras.min.js"></script>

</body>
</html>