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
	}

	.admingrid-item--1 {
		width: 100px;
		height: 100px;
		margin: 10px auto;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		-o-border-radius: 50%;
		border-radius: 50%;
	}

	.admingrid-item--2 {
		width: 500px;
		margin: 0 auto 20px auto;
		background: none;
		border: 1px solid #eee;
		padding: 10px 10px 30px 10px;
	}

	.admingrid-item--2 .admingrid-edit-btn span {
		top: auto;
		bottom: 10px;
		color: #aaa;
	}

	.admingrid-item--3,
	.admingrid-item--4 {
		float: left;
		width: 48%;
		height: 200px;
		background: none;
		border: 1px solid #eee;
	}

	.admingrid-item--3 p,
	.admingrid-item--4 p {
		text-align: center;
	}

	.admingrid-item--3 .admingrid-edit-btn span,
	.admingrid-item--4 .admingrid-edit-btn span {
		top: auto;
		bottom: 10px;
		color: #aaa;
	}

	.admingrid-item--3 p:nth-child(2) {
		margin-top: 20px;
	}

	.admingrid-item--3 p:last-child,
	.admingrid-item--4 p:last-child {
		position: absolute;
		top: 50%;
		left: 0;
		width: 100%;
		text-transform: uppercase;
		font-size: 11px;
		font-weight: bold;
		-moz-transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);

	}

	.admingrid-item--4 {
		margin-left: 4%;
	}

	.admingrid-clear {
		display: block;
		clear: both;
		width: 100%;
	}

	.admingrid-item--5,
	.admingrid-item--6,
	.admingrid-item--7,
	.admingrid-item--8 {
		float: left;
		width: 20%;
		height: 160px;
		margin-top: 20px;
		margin-left: 2%;
		padding: 10px;
		text-align: center;
	}

	.admingrid-item--6,
	.admingrid-item--7,
	.admingrid-item--8 {
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.admingrid-item--5 img,
	.admingrid-item--6 img,
	.admingrid-item--7 img,
	.admingrid-item--8 img {
		display: block;
		max-width: 100px;
		margin: 0 auto;
	}

	.admingrid-item--5 {
		width: 34%;
		margin-left: 0;
	}

	.admingrid-item--9 {
		width: 100%;
		height: 400px;
		margin: 20px 0;
	}

	.admingrid-item--9 .admingrid-edit-btn span {
		color: red;
	}

	.admingrid-item--10 {
		height: 400px;
		width: 100%;
		background: none;
	}

	.admingrid-item--10 .admingrid-edit-btn span {
		background: #ccc;
		width: 220px;
	}

	.admingrid-item--10 .admingrid-item-bg,
	.admingrid-item--10 .admingrid-item-col {
		position: relative;
		float: left;
		width: 49%;
		height: 400px;
	}

	.admingrid-item--10 .admingrid-item-bg {
		margin-right: 2%;
		background: #aaa;
		background-repeat: no-repeat;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.admingrid-item--10 .admingrid-item-col {
		background: #eee;
	}

	.admingrid-item--10 .admingrid-item-info {
		position: absolute;
		top: 50%;
		left: 0;
		width: 100%;
		-moz-transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
		text-align: center;
	}

	.admingrid-btn {
		display: inline-block;
		text-align: center;
		border: 1px solid #ccc;
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