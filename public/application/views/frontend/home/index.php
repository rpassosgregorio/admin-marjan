<main class="main-home" id="main_home">
    <div class="home slider-controller" id="slider_controller">
        <ul>
            <li class="slider-controller-1"><a><img src="<?php echo My_Controller::get_path_file('home', $object->slide1_thumb); ?>"></a></li>
            <li class="slider-controller-2"><a><img src="<?php echo My_Controller::get_path_file('home', $object->slide2_thumb); ?>"></a></li>
            <li class="slider-controller-3"><a><img src="<?php echo My_Controller::get_path_file('home', $object->slide3_thumb); ?>"></a></li>
            <li class="slider-controller-4"><a><img src="<?php echo My_Controller::get_path_file('home', $object->slide4_thumb); ?>"></a></li>
            <li class="slider-controller-5"><a><img src="<?php echo My_Controller::get_path_file('home', $object->slide5_thumb); ?>"></a></li>
        </ul>
    </div>

	<section>
		<div class="slider-container" id="slider_container">
			<div class="slider-items slide-number-1" id="slider_items_1">
				<div class="slide-item-container slide-item-container-1" id="slide_item_container-1" data-halign="right" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('home', $object->slide1_image); ?>); background-position: right center;">
				</div>

				<?php $media_slide1 = My_Controller_CMS::get_path_file('home', $object->slide1_video); ?>

				<?php if (!empty($media_slide1)): ?>

					<div style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden;">
						<video id="video-slide-1" width="100%" autoplay loop>
							<source src="<?php echo $media_slide1; ?>" type="video/mp4">
						</video>
					</div>

				<?php endif ?>

				<div class="slide-item-caption-container" style="background-image: url(<?php echo My_Controller::get_path_file('home', $object->slide1_band); ?>); background-position: left center; background-size: 100% 100%">
					<div class="slide-title"><h1><?php echo $object->slide1_title; ?></h1></div>
					<div class="slide-sub_title"><h3><?php echo $object->slide1_subtitle; ?></h3></div>
				</div>
			</div>
       		<div class="slider-items slide-number-2" id="slider_items_2">
				<div class="slide-item-container slide-item-container-2" id="slide_item_container-2" data-halign="left" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('home', $object->slide2_image); ?>); background-position: left  top;">
				</div>

				<?php $media_slide2 = My_Controller_CMS::get_path_file('home', $object->slide2_video); ?>

				<?php if (!empty($media_slide2)): ?>

					<div style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden;">
						<video id="video-slide-2" width="100%" autoplay loop>
							<source src="<?php echo $media_slide2; ?>" type="video/mp4">
						</video>
					</div>

				<?php endif ?>

				<div class="slide-item-caption-container" style="background-image: url(<?php echo My_Controller::get_path_file('home', $object->slide2_band); ?>); background-position: left center; background-size: 100% 100%">
					<div class="slide-title"><h1><?php echo $object->slide2_title; ?></h1></div>
					<div class="slide-sub_title"><h3><?php echo $object->slide2_subtitle; ?></h3></div>
				</div>
			</div>
       		<div class="slider-items slide-number-3" id="slider_items_3">
				<div class="slide-item-container slide-item-container-3" id="slide_item_container-3" data-halign="right" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('home', $object->slide3_image); ?>); background-position: right center;">
				</div>

				<?php $media_slide3 = My_Controller_CMS::get_path_file('home', $object->slide3_video); ?>

				<?php if (!empty($media_slide3)): ?>

					<div style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden;">
						<video id="video-slide-3" width="100%" autoplay loop>
							<source src="<?php echo $media_slide3; ?>" type="video/mp4">
						</video>
					</div>

				<?php endif ?>

				<div class="slide-item-caption-container" style="background-image: url(<?php echo My_Controller::get_path_file('home', $object->slide3_band); ?>); background-position: left center; background-size: 100% 100%">
					<div class="slide-title"><h1><?php echo $object->slide3_title; ?></h1></div>
					<div class="slide-sub_title"><h3><?php echo $object->slide3_subtitle; ?></h3></div>
				</div>
			</div>
       		<div class="slider-items slide-number-4" id="slider_items_4">
				<div class="slide-item-container slide-item-container-4" id="slide_item_container-4" data-halign="right" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('home', $object->slide4_image); ?>); background-position: right top;">
				</div>

				<?php $media_slide4 = My_Controller_CMS::get_path_file('home', $object->slide4_video); ?>

				<?php if (!empty($media_slide4)): ?>

					<div style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden;">
						<video id="video-slide-4" width="100%" autoplay loop>
							<source src="<?php echo $media_slide4; ?>" type="video/mp4">
						</video>
					</div>

				<?php endif ?>

				<div class="slide-item-caption-container" style="background-image: url(<?php echo My_Controller::get_path_file('home', $object->slide4_band); ?>); background-position: left center; background-size: 100% 100%">
					<div class="slide-title"><h1><?php echo $object->slide4_title; ?></h1></div>
					<div class="slide-sub_title"><h3><?php echo $object->slide4_subtitle; ?></h3></div>
				</div>
			</div>
       		<div class="slider-items slide-number-5" id="slider_items_5">
				<div class="slide-item-container slide-item-container-5" id="slide_item_container-5" data-halign="right" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('home', $object->slide5_image); ?>); background-position: right top;">
				</div>

				<?php $media_slide5 = My_Controller_CMS::get_path_file('home', $object->slide5_video); ?>

				<?php if (!empty($media_slide5)): ?>

					<div style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden;">
						<video id="video-slide-5" width="100%" autoplay loop>
							<source src="<?php echo $media_slide5; ?>" type="video/mp4">
						</video>
					</div>

				<?php endif ?>


				<div class="slide-item-caption-container" style="background-image: url(<?php echo My_Controller::get_path_file('home', $object->slide5_band); ?>); background-position: left center; background-size: 100% 100%">
					<div class="slide-title"><h1><?php echo $object->slide5_title; ?></h1></div>
					<div class="slide-sub_title"><h3><?php echo $object->slide5_subtitle; ?></h3></div>
				</div>
			</div>
        </div>
    </section>
</main>