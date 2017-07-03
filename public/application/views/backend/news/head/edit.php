<script type="text/javascript">

	$(document).ready(function() {

	$('input[type="file"]').on('change', contentIcon);

		function contentIcon(e) {

			var $image_image = $(e.currentTarget).closest('.change-file-image');

			var input = $(e.currentTarget).get(0);

			if (input.files && input.files[0]) {

				var reader = new FileReader();

				reader.onload = function (e) {

					$image_image.find('img').attr('src', e.target.result);
					$image_image.find('img').attr('width', 200);
					$image_image.find('img').attr('height', 200);

				}

				reader.readAsDataURL(input.files[0]);

			}

		}

	})


</script>
