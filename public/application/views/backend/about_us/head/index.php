<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.min.js"></script>
<style type="text/css">
	.admingrid-edit-btn {
		position: absolute;
		top: 0; left: 0;
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
		width: 90%;
		text-align: center;
		color: rgba(255, 255, 255, .7);
		font-size: 12px;
		text-transform: uppercase;
		font-weight: bold;
		-moz-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}

	.admingrid-item {
		position: relative;
		background: #aaa;
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.admingrid-item--0 {
		width: 100%;
		height: 400px;
		margin-bottom: 20px;
	}
	.admingrid-item--0 .admingrid-item-textleft {
		position: absolute;
		bottom: 5%;
		left: 0;
		width: 48%;
		text-align: right;
		text-transform: uppercase;
		font-size: 20px;
		color: #fff;
	}
	.admingrid-item--0 .admingrid-item-textright {
		position: absolute;
		bottom: 5%;
		right: 0;
		width: 48%;
		text-align: left;
		text-transform: uppercase;
		font-size: 20px;
		color: #fff;
	}

	.admingrid-item--1 {
		width: 200px;
		height: 200px;
		margin: 0 auto 20px auto;
		border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		-o-border-radius: 50%;
	}

	.admingrid-item--2 {
		padding: 30px;
	}
	.admingrid-item--2 h2 {
		margin-bottom: 30px;
		font-size: 20px;
		text-align: center
	}
	.admingrid-item--2 .admingrid-item-box {
		float: left;
		background: #666;
		width: 48%;
		padding: 20px;
	}
	.admingrid-item--2 .admingrid-item-box--1 {
		margin-left: 4%;
	}
	.admingrid-item--2 .admingrid-item-quotes {
		width: 60%;
		margin: 50px auto 0 auto;
		text-align: center;
	}

	.admingrid-item--3 {
		width: 100%;
		height: 400px;
		margin-top: 40px;
	}


	.admingrid-fullbanner {
		margin-top: 40px;
	}
	.admingrid-fullbanner .owl-dots {
		position: absolute;
		bottom: 30px;
		left: 50%;
		width: 100%;
		font-size: 0;
		z-index: 10;
		text-align: center;
		transform: translateX(-50%);
		-webkit-transform: translateX(-50%);
		-moz-transform: translateX(-50%);
		-o-transform: translateX(-50%);
	}
	.admingrid-fullbanner .owl-dot {
		display: inline-block;
		vertical-align: middle;
		width: 16%;
		height: 30px;
		margin: 0 2%;
		background: #eee;
	}
	.admingrid-fullbanner .owl-dot p {
		line-height: 30px;
		font-size: 16px;
		color: #999;
	}
	.admingrid-fullbanner .owl-dot.active {
		background: #666;
	}

	.admingrid-fullbanner-item {
		position: relative;
		width: 100%;
		height: 400px;
		background: #ddd;
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.admingrid-fullbanner-item-title {
		width: 13%;
		position: absolute;
		top: 10%;
		left: 5%;
	}

	.admingrid-fullbanner-item-text {
		width: 30%;
		position: absolute;
		top: 10%;
		left: 20%;
		height: 70%;
		border-left: 2px solid #fff;
		padding-left: 50px;
	}

	.admingrid-fullbanner-item-text-btn {
		display: inline-block;
		margin-top: 10px;
		border: 1px solid #666;
		padding: 5px 10px;
		text-align: center;
		font-size: 16px;
		background: rgba(255, 255, 255, .2);
	}

	.admingrid-item--3 {
		padding: 20px 50px;
		height: auto;
		text-align: center;
	}
	.admingrid-item--3 .admingrid-edit-btn {
		opacity: .2;
	}

	.admingrid-about-boxes {
		text-align: center;
		font-size: 0;
		padding: 20px 0;
	}
	.admingrid-item--about-box {
		display: inline-block;
		vertical-align: top;
		width: 150px;
		margin: 0 20px;
		padding: 10px 0;
	}
	.admingrid-item--about-box .admingrid-edit-btn {
		opacity: .2;
	}
	.admingrid-item--about-box h2 {
		font-size: 15px;
		font-weight: 700;
		margin-top: 0;
	}
	.admingrid-item--about-box p {
		font-size: 14px;
		font-weight: 500;
	}
	.admingrid-item--about-box > span {
		display: block;
		width: 90%;
		margin: 0 auto;
		font-size: 12px;
		padding: 10px;
		background: #ddd;
	}

	.admingrid-item--4 {
		width: 100%;
		height: 300px;
	}
	.admingrid-item--4 .admingrid-item-content {
		position: absolute;
		top: 50%;
		left: 0;
		width: 40%;
		padding: 0 5%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
	}
	.admingrid-item--4 .admingrid-item-content span {
		display: inline-block;
		vertical-align: top;
		margin-top: 10px;
		padding: 10px;
		background: #eee;
	}

	.admingrid-item--5,
	.admingrid-item--6,
	.admingrid-item--7 {
		margin-top: 20px;
		width: 100%;
		height: 300px;
	}
	.admingrid-item--5 .admingrid-item-content,
	.admingrid-item--6 .admingrid-item-content,
	.admingrid-item--7 .admingrid-item-content {
		position: absolute;
		top: 50%;
		left: 0;
		width: 40%;
		padding: 0 5%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
	}
	.admingrid-item--5 .admingrid-item-image,
	.admingrid-item--6 .admingrid-item-image,
	.admingrid-item--7 .admingrid-item-image {
		position: absolute;
		top: 0; right: 0;
		width: 50%;
		height: 100%;
		background-color: #ddd;
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.admingrid-item--6 .admingrid-item-content span {
		display: inline-block;
		padding: 10px;
		margin-bottom: 10px;
		border: 1px solid #666;
	}

	.admingrid-item--6 .admingrid-item-image {
		left: 0;
		right: auto;
	}
	.admingrid-item--6 .admingrid-item-content {
		right: 0;
		left: auto;
	}

	.admingrid-item--7 .admingrid-item-content {
		left: auto;
		right: 0;
	}
	.admingrid-item--7 .admingrid-item-image {
		right: auto;
		left: 0;
	}




	.admingrid-marjanmore-title {
		position: relative;
		width: 100%;
		padding-bottom: 30px;
		margin-top: 100px;
		text-align: center;
	}
	.admingrid-marjanmore-title h2 {
		font-size: 20px;
		font-weight: 700;
	}


	.admingrid-marjanmore-items {
		font-size: 0;
		text-align: center;
	}
	.admingrid-marjanmore-item {
		position: relative;
		display: inline-block;
		vertical-align: top;
		width: 200px;
		margin: 0 20px;
	}
	.admingrid-marjanmore-item img {
		display: block;
		width: 100%;
	}
	.admingrid-marjanmore-item p {
		font-size: 16px;
		margin-top: 5px;
		padding: 5px;
		background: #ddd;
	}


	.admingrid-clear {
		clear: both;
		width: 100%;
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
			$('.admingrid-fullbanner .owl-dot').eq(i).append('<p>'+ $(this).attr('data-thumb-title') +'</p>');
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