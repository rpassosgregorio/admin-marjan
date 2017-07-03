<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.min.js"></script>
<style type="text/css">
	.admingrid-fullbanner {
		position: relative;
		width: 100%;
	}
	.admingrid-edit-btn {
		position: absolute;
		width: 100%;
		height: 100%;
		z-index: 2;
		background: rgba(255, 255, 255, .1);
		-moz-background: rgba(255, 255, 255, .1);
		-webkit-background: rgba(255, 255, 255, .1);
		-o-background: rgba(255, 255, 255, .1);
		background: rgba(255, 255, 255, .1);
	}
	.admingrid-edit-btn:hover {
		background: rgba(255, 255, 255, .3);
		-moz-background: rgba(255, 255, 255, .3);
		-webkit-background: rgba(255, 255, 255, .3);
		-o-background: rgba(255, 255, 255, .3);
		background: rgba(255, 255, 255, .3);
	}
	.admingrid-edit-btn span {
		position: absolute;
		top: 50%;
		left: 50%;
		color: #fff;
		color: rgba(255, 255, 255, .7);
		font-size: 20px;
		text-transform: uppercase;
		font-weight: bold;
		-moz-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	.admingrid-fullbanner-item {
		position: relative;
		width: 100%;
		height: 400px;
		background: #ddd;
	}
	.admingrid-fullbanner .owl-dots {
		position: absolute;
		top: 50%;
		right: 20px;
		-moz-transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.admingrid-fullbanner .owl-dot {
		width: 40px;
		height: 40px;
		margin-bottom: 20px;
		font-size: 14px;
		color: #fff;
		line-height: 40px;
		text-align: center;
		background: #aaa;
		overflow: hidden;
		cursor: pointer;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		-o-border-radius: 50%;
		border-radius: 50%;
	}
	.admingrid-fullbanner .owl-dot:hover {
		background: #a1a1a1;
	}
	.admingrid-fullbanner .owl-dot.active {
		background: #333;
	}

	.admingrid-fullbanner-item-header {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 10px 20px;
		text-transform: uppercase;
		color: #fff;
		-webkit-background: rgba(0, 0, 0, .5);
		-moz-background: rgba(0, 0, 0, .5);
		-o-background: rgba(0, 0, 0, .5);
		background: rgba(0, 0, 0, .5);
		background-repeat: no-repeat;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
	}

	.admingrid-fullbanner-item-header h2 {
		font-size: 30px;
		line-height: 30px;
	}

	.admingrid-fullbanner-item-header h3 {
		font-size: 24px;
		line-height: 24px;
	}


	.admingrid-modal {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: none;
		background: rgba(255, 255, 255, .8);
		z-index: 9999;
	}
	.admingrid-modal.active {
		display: block;
	}
	.admingrid-modal-wrapper {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 600px;
		padding: 30px;
		background: #fff;
		-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		-o-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
		-moz-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	.admingrid-modal-scroll {
		width: 100%;
		padding-right: 20px;
		max-height: 450px;
		overflow-x: hidden;
		overflow-y: auto;
	}
	.admingrid-modal-close__btn {
		position: absolute;
		right: -40px;
		top: -20px;
		width: 80px;
		height: 40px;
		background: #fff;
		border: 1px solid #ddd;
		color: #333;
		font-weight: 700;
		text-transform: uppercase;
		font-size: 11px;
		-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		-o-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
	}
	.admingrid-modal-close__btn:hover {
		background: #eee;
	}
	.admingrid-modal-form {
		font-size: 0;
	}
	.admingrid-modal-form label {
		font-size: 14px;
	}
	.admingrid-modal-form-group {
		display: inline-block;
		vertical-align: middle;
		width: 48%;
		margin: 0 1% 20px 1%;
	}
	.admingrid-modal-form-group label {
		display: block;
		width: 100%;
	}
	.admingrid-modal-form-group span {
		display: block;
		margin-bottom: 5px;
		font-size: 13px;
		color: #333;
		font-weight: 700;
		text-transform: uppercase;
	}
	.admingrid-modal-form-group input[type="text"] {
		display: block;
		width: 100%;
		height: 20px;
		font-size: 12px;
		color: #000;
	}
	.admingrid-modal-form-submit {
		display: block;
		width: 100%;
	}
	.admingrid-modal-form-submit input {
		display: block;
		width: 120px;
		height: 36px;
		margin: 0 auto;
		border: 0;
		text-transform: uppercase;
		font-size: 14px;
		color: #fff;
		text-align: center;
		background: #46b8da;
	}
	.admingrid-modal-form-submit input:hover {
		background: #269abc;
	}
</style>

<script type="text/javascript">
	var ADMINGRID = ADMINGRID || {};

	ADMINGRID.initialize = function() {
		this.owlCarousel();
		this.attachEvents();
	}

	ADMINGRID.attachEvents = function() {

		$('[data-open-modal]').on('click', function(e) {
			e.preventDefault();
			this.modalToggle(true, $(e.currentTarget).attr('data-open-modal'));
		}.bind(this))

		$('.admingrid-modal-close__btn').on('click', function(e) {
			this.modalToggle(false);
		}.bind(this))

	}

	ADMINGRID.owlCarousel = function() {
		var owl = $('.owl-carousel');

		owl.owlCarousel({
			loop: false,
			dots: true,
			items: 1
		})

		$('.admingrid-fullbanner-item').each(function(i) {
			$('.admingrid-fullbanner .owl-dot').eq(i).css('backgroundImage', 'url('+ $(this).attr('data-thumb-image') +')');
		});
	}

	ADMINGRID.modalToggle = function(active, id) {

		var $modals = $('.admingrid-modal');

		if(id) {
			id = id.replace('#', '');
		}

		if(active) {
			console.log($modals.filter('[data-open-modal="'+ id +'"]'), id)
			$modals.filter('[data-modal="'+ id +'"]').addClass('active');
		} else {
			$modals.removeClass('active')
		}

	}

	$(document).ready(ADMINGRID.initialize.bind(ADMINGRID))
</script>