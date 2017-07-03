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
		bottom: 10px;
		left: 50%;
		color: #fff;
		width: 90%;
		text-align: center;
		color: rgba(255, 255, 255, .7);
		font-size: 12px;
		text-transform: uppercase;
		font-weight: bold;
		-moz-transform: translateX(-50%);
		-webkit-transform: translateX(-50%);
		-o-transform: translateX(-50%);
		transform: translateX(-50%);
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
		height: 300px;
		margin-bottom: 20px;
	}
	.admingrid-item--0 .admingrid-item-textleft {
		position: absolute;
		top: 10%;
		left: 2%;
		width: 20%;
		height: 100px;
		padding-right: 50px;
		text-align: right;
		text-transform: uppercase;
		font-size: 20px;
		color: #fff;
		border-right: 1px solid #fff;
	}
	.admingrid-item--0 .admingrid-item-textright {
		position: absolute;
		top: 10%;
		left: 27%;
		width: 20%;
		height: 100px;
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
		margin: 50px 0;
		text-align: center;
		padding-bottom: 50px;
		background: transparent;
	}
	.admingrid-item--2 .admingrid-edit-btn span {
		color: #ccc;
	}
	.admingrid-item--2 p {
		font-size: 20px
	}

	.admingrid-item--newstitle {
		margin: 50px 0 20px 0;
		padding: 10px 0;
		text-align: center;
	}
	.admingrid-item--newstitle h3 {
		margin: 0;
	}

	.admingrid-item--6 {
		position: absolute;
		bottom: -200px;
		right: 0;
		width: 75%;
		padding: 5px 20px;
	}
	.admingrid-item--6 h3 {
		margin-top: 5px;
	}

	.admingrid-item--7 {
		position: absolute;
		bottom: -400px;
		right: 0;
		width: 75%;
		background: none;
	}

	.admingrid-item--7 img {
		display: block;
		max-width: 100%;
	}


	.admingrid-news {
		position: relative;
		width: 100%;
		height: 400px;
		margin-bottom: 1000px;
	}

	.admingrid-news-item {
		position: absolute;
		top: 0;
		left: 0;
		width: 23%;
		height: 100%;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
	}

	.admingrid-news-item img {
		display: none;
		width: 100%;
		margin: 0 0 20px 0;
	}
	.admingrid-news-item:hover .admingrid-news-item-info {
		display: block;
	}

	.admingrid-news-item--1 {
		left: 25%;
		height: 76%;
	}

	.admingrid-news-item--2 {
		left: 25%;
		top: auto;
		bottom: 0;
		height: 20%;
	}

	.admingrid-news-item--3 {
		left: 50%;
		width: 50%;
		height: 40%;
	}

	.admingrid-news-item--4,
	.admingrid-news-item--5 {
		left: 50%;
		top: auto;
		bottom: 0;
		width: 24%;
		height: 58%;
	}

	.admingrid-news-item--5 {
		left: 76%;
	}

	.admingrid-news-item--6,
	.admingrid-news-item--7 {
		background: none !important;
		width: 75%;
	}

	.admingrid-news-item--6 {
		left: auto;
		top: auto;
		right: 0;
		bottom: -120px;
		background: #ccc !important;
		height: 80px;
	}

	.admingrid-news-item--6 .admingrid-news-item-info {
		top: 50%;
		display: block;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
	}

	.admingrid-news-item--7 {
		left: auto;
		top: 560px;
		right: 0;
		height: auto;
	}

	.admingrid-news-item--7 img {
		display: block;
	}

	.admingrid-news-item--7 .admingrid-news-item-info {
		position: relative;
		display: block;
		color: #999;
	}

	.admingrid-news-item-info {
		display: none;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		padding: 10px;
		color: #fff;
		font-size: 10px;
	}

	.admingrid-news-item-info h2 {
		margin-bottom: 5px;
		font-weight: bold;
		font-size: 18px;
		line-height: 18px;
	}

	.admingrid-news-item-info p {
		line-height: 11px;
	}

	.admingrid-news-col {
		position: absolute;
		top: 440px;
		left: 0;
		background: #ccc;
		width: 23%;
		height: 900px;
	}
	.admingrid-news-col p {
		width: 100%;
		position: absolute;
		top: 50px;
		left: 0;
		text-align: center;
		color: #999;
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
		right: 0;
		top: 0;
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