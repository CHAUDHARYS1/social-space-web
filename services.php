<?php $first_part = "services" ?>

<?php include('includes/header.php'); ?>


<style>
	.card {
		border: none;

		padding: 50px;
		height: 570px;
		width: 334px;
		-webkit-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
		-moz-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
		box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}

	.card h3 {
		bottom: 0;
		margin-bottom: 40px;
		position: absolute;
	}

	#cardOne {
		background-image: url(images/bg-card1.png);
		background-position: right;

	}

	#cardTwo {
		background-image: url(images/bg-card2.png);
		background-position: 20%;


	}

	#cardThree {
		background-image: url(images/bg-card3.png);
		background-position: center;

	}

	@media screen and (max-width:991px) {
		.card {
			width: 100%;
		}
	}

	@media screen and (max-width:375px) {
		.card {
			padding: 20px;
			;
		}
	}

</style>
<div style="background:#310E54;">
	<?php require_once('includes/navigation.php'); ?>
	<div class="container text-center" style="margin-top:100px;padding-bottom:100px;">
		<h1 class="text-white animate__animated animate__fadeInUp" style="max-width:1000px;">Everything you need
			to get a professional
			service.</h1>
		<a href="contact" type="button" class="btn btn-light btn-lg text-dark mt-4 text-uppercase animate__animated animate__fadeInUp" data-wow-delay="2">GET IN TOUCH</a>
	</div>
</div>
<div class="container-fluid" style="background:#F5F6FB;">
	<div class="container" style="padding-top:100px;">
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="card" id="cardOne">
					<p>A Website is the source of your business. Tells us what you want. We will make sure you get more than what you asked for.</p>

					<li>Wireframing</li>
					<li>Prototyping</li>
					<li>Development</li>

					<h3>Web Design</h3>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="card" id="cardTwo">
					<p>Your business needs to be heard. Our team knows how to do that.</p>
					<li>Social Ad</li>
					<li>Advertising</li>
					<h3>Marketing</h3>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="card" id="cardThree">
					<p>Social Media is a powerhouse and can really impact your business. Let us take care of it so you can continue what you do best.</p>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>LinkedIn</li>
					<li>Snapchat</li>
					<h3>Social Media</h3>

				</div>
			</div>
		</div>
		<div style="margin-top:200px; padding-bottom:200px;">
			<h1>ARE YOU READY TO MAKE
				A GREAT DECISION?</h1>
			<a type="button" class="btn btn-light text-white text-uppercase gradient-bg" href="contact">Contact</a>


		</div>
	</div>
</div>
<?php include('includes/contact-form.php');?>
<?php include('includes/footer.php');?>


<script src="js/nav.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/wow.js"></script>
