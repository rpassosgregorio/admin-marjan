<script type="text/javascript">

	$(document).ready(function() {

		var $comboCategory = $('select[name="id_category"]');

		$comboCategory.parent().find('span.select2').remove();
		$comboCategory.removeClass('select2-hidden-accessible');

		$comboCategory = $comboCategory.select2();
		$comboCategory.on("change", function (e, a, b) {
			var name = $(this).attr('name');
			var value = $(this).val();
			var dataFood = $(this).find('option[value="'+ value +'"]').attr('data-is-food');

			$('.combo-container[data-name="'+ name +'"]').addClass('hidden');

				console.log(dataFood)
			if(dataFood) {
				$('.combo-container[data-name="'+ name +'"][data-value="'+ dataFood +'"]').removeClass('hidden');
			}
		}).trigger('change');



		$('input[type="file"]').on('change', contentIcon);


		function contentIcon(e) {

			var $image_product_release_image = $(e.currentTarget).closest('.change-file-product_release_image');
			var $image_product_image = $(e.currentTarget).closest('.change-file-product_image');
			var $image_product_image_mobile = $(e.currentTarget).closest('.change-file-product_image_mobile');
			var $image_product_image_tablet = $(e.currentTarget).closest('.change-file-product_image_tablet');
			var $image_nutritional_info = $(e.currentTarget).closest('.change-file-nutritional_info');

			var input = $(e.currentTarget).get(0);

			if (input.files && input.files[0]) {

				var reader = new FileReader();

				reader.onload = function (e) {

					$image_product_release_image.find('img').attr('src', e.target.result);
					$image_product_release_image.find('img').attr('width', 200);
					$image_product_release_image.find('img').attr('height', 200);

					$image_product_image.find('img').attr('src', e.target.result);
					$image_product_image.find('img').attr('width', 200);
					$image_product_image.find('img').attr('height', 200);

					$image_product_image_mobile.find('img').attr('src', e.target.result);
					$image_product_image_mobile.find('img').attr('width', 200);
					$image_product_image_mobile.find('img').attr('height', 200);

					$image_product_image_tablet.find('img').attr('src', e.target.result);
					$image_product_image_tablet.find('img').attr('width', 200);
					$image_product_image_tablet.find('img').attr('height', 200);

					$image_nutritional_info.find('img').attr('src', e.target.result);
					$image_nutritional_info.find('img').attr('width', 200);
					$image_nutritional_info.find('img').attr('height', 200);

				}

				reader.readAsDataURL(input.files[0]);

			}

		}

	})


</script>
