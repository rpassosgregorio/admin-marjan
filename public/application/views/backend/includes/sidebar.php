

<body class="<?php if($this->agent->is_mobile()){ ?>hold-transition skin-blue sidebar-mini sidebar-collapse<?php }else{ ?>hold-transition skin-blue sidebar-mini<?php }?>">

	<div class="wrapper">

		<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo base_url(PATH_DIST_CMS)?>" class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini"><b>MJ</b> 2.0</span>
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg"><b>Marjan</b> v2.0</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation">
		  <!-- Sidebar toggle button-->
	  		<?php if($this->agent->is_mobile()){ ?>
		  	    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		  	<?php } ?>
			<span class="sr-only">Toggle navigation</span>
		  </a>
		  <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			  <!-- Messages: style can be found in dropdown.less-->
			  </li>
			  <!-- User Account: style can be found in dropdown.less -->
			  <li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		           <img src="<?php echo $this->admin_logged->avatar; ?>" width="18" class="img-circle" alt="User Image">
				  <span class="hidden-xs"><?php echo $this->admin_logged->name?></span>
				</a>
				<ul class="dropdown-menu">
				  <!-- User image -->
				  <li class="user-header">
			      	<img src="<?php echo $this->admin_logged->avatar; ?>" class="img-circle" alt="User Image">
					<p>
					  <?php echo $this->admin_logged->name?>
					</p>


				  </li>

				  <?php if(count($this->url_languages_allowed) > 1){ ?>

				  	  <!-- LANGUAGES -->

					  <li class="user-footer">
						<div class="text-center">

							<?php


							foreach ($this->url_languages_allowed as $lang_allowed) {


								if($lang_allowed == $this->lang_selected) continue;

								$url_lang = $this->base_cms;

								if($lang_allowed != $this->lang_default){
									$url_lang .= '/'.$lang_allowed;
								}

								$path_info = explode('/', $this->input->server('PATH_INFO'));

								$loop_start = 2;
								if(in_array($this->uri->segment(2), $this->url_languages_allowed)){
									$loop_start = 3;
								}

								$url_lang_page = '';
								for ($i = $loop_start; $i < count($path_info); $i++) {
									$url_lang_page .= '/'.$path_info[$i];
								}


								$url_lang = $url_lang.$url_lang_page;

							?>

						     	<a href="<?php echo base_url($url_lang); ?>" class="btn btn-flat margin"><?php echo $lang_allowed ?></a>

						     	<?php $url_lang = ''; ?>

						<?php } ?>

						</div>
					  </li>

				  <?php } ?>

				  <li class="user-footer">
					<div class="text-center">
					  <a href="<?php echo base_url($this->base_cms)."/home/logout"?>" class="btn bg-red btn-flat margin">Sair</a>
					</div>
				  </li>
				</ul>
			  </li>
			</ul>
		  </div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

		  <!-- search form (Optional) -->
		  <!--
		  <form action="#" method="get" class="sidebar-form">
			<div class="input-group">
			  <input type="text" name="q" class="form-control" placeholder="Search...">
			  <span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
			  </span>
			</div>
		  </form>
		  -->
		  <!-- /.search form -->

		  <!-- Sidebar Menu -->
		  <ul class="sidebar-menu">
			<li class="header">MENU</li>

			<!-- Optionally, you can add icons to the links -->
			<?php foreach($this->menu_allowed_admin as $object_module){ ?>

				<?php

				$class_icone = "";
				$class_link_active = "";
				$class_link_super_active = "";

				if(count($object_module['submodule']) > 1){

	  				foreach($object_module['submodule'] as $object_submodule){

						if($this->id_subomdule == $object_submodule->id && $object_module['module']->id == $object_submodule->id_module){
			  				$class_link_super_active = "active";
			  			}

	  			     }

					if(!empty($object_module['module']->icon) || $object_module['module']->icon != "user.png"){
				        $class_icone = $object_module['module']->icon;
					}

					?>

					<li class="treeview <?php echo $class_link_super_active; ?>">

					  <a href="#"><i class="fa <?php echo $class_icone; ?>"></i> <span><?php echo $object_module['module']->title; ?></span> <i class="fa fa-angle-left pull-right"></i></a>

					  <ul class="treeview-menu">

					  	<?php foreach($object_module['submodule'] as $object_submodule){

						  	      $class_link_active = "";

						  		  if($this->id_subomdule == $object_submodule->id){
						  		      $class_link_active = "active";
						  		   }

						  		   ?>

								<li class="<?php echo $class_link_active; ?>"><a href="<?php echo base_url($this->base_cms.'/'.$object_submodule->controller); ?>"><?php echo $object_submodule->title; ?></a></li>

						<?php } ?>

					  </ul>

					</li>

					<?php }else if(isset($object_module['submodule'][0]->id)){

					      if($this->id_subomdule == $object_module['submodule'][0]->id){
					          $class_link_active = "active";
						  }

						  if(!empty($object_module['submodule'][0]->icon)){
						      $class_icone = $object_module['submodule'][0]->icon;
					      }

						  if($object_module['submodule'][0]->id == 2 && $this->admin_logged->id != 1){
						      continue;
						  }

					?>

					<li class="<?php echo $class_link_active; ?>"><a href="<?php echo base_url($this->base_cms.'/'.$object_module['submodule'][0]->controller); ?>"><i class="fa <?php echo $class_icone; ?>"></i> <span><?php echo $object_module['module']->title; ?></span></a></li>

				<?php } ?>

			<?php } ?>

		  </ul><!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>

	<div class="content-wrapper">