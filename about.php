<?php $first_part = "about" ?>

<?php include('includes/header.php'); ?>
<div style="background:#310E54;">
	<?php require_once('includes/navigation.php'); ?>
	<div class="container text-white mt-5" style="padding-top:100px; padding-bottom:100px;">
		<p class="wow animate__animated animate__fadeInLeft">ABOUT</p>
		<h1 class="wow animate__animated animate__fadeInUp" data-wow-delay="1s">SOCIAL SPACE WEB</h1>
		<p class="mt-5">Let’s build bridges that fill the gaps
			gaps of love, trust, & compassion.
		</p>
		<p>
			Nearly 50 years low for overall unemployment rate
			frightening decline of small businesses
			young graduates leaving university.
		</p>
		<p> Due to rapid technical advances
			finding it more and more difficult to enter any form of creative industry
			consistent lack of quality In their branding, marketing, website and design
			disqualify them to advance
			in their field of expertise.
		</p>
		<p>
			Now imagine an enterprise
			that could bridge those 2 frightening statistics together
			where digital communications are simple, genius, and friendly.
		</p>
		<p class="font-weight-bold">
			Hi, I’m Kapil Vyas.
			Social Space Web
			is my company
			AND I
			WANT TO BUILD THAT BRIDGE.
		</p>
	</div>

</div>
<div class="container-fluid" style="background:#1A1A1A;">
	<div class="container text-center text-white p-5">
		<h1>WHAT WE DO</h1>
	</div>
</div>

<?php $first_page = "about";?>
<!-- STRATEGY, TECHNOLOGY, & MARKETINGS CARDS -->
<style>
	.card {
		background: white;
		border: none;
		padding: 50px;
		-webkit-box-shadow: 5px 5px 6px 1px rgba(0, 0, 0, 0.04);
		-moz-box-shadow: 5px 5px 6px 1px rgba(0, 0, 0, 0.04);
		box-shadow: 5px 5px 6px 1px rgba(0, 0, 0, 0.04);
		border-radius: 25px;
		transition: all .3s ease-out !important;
		cursor: pointer;

	}

	.card:hover {
		-webkit-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
		-moz-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
		box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.2);
	}

	.icon-bg img {
		padding: 15px 5px 15px 5px;
		border-radius: 167px 167px 167px 167px;
		-moz-border-radius: 167px 167px 167px 167px;
		-webkit-border-radius: 167px 167px 167px 167px;
	}

	.underline-color {
		width: 50px;
		height: 3px;
		border-radius: 50px;
	}

</style>
<div class="container-fluid" style="background:#F5F6FB;">
	<div class="container" style="padding-top:100px;padding-bottom:100px;">
		<div class="row">
			<div class="col-lg-4 mt-4">
				<a href="about-more/strategy.php" class="text-dark text-decoration-none" title="Click to learn more about strategy">
					<div class="card wow animate__animated animate__fadeInUp" data-wow-delay="1s">
						<div class="icon-bg">
							<img src="images/icons/strategy-icon.png" alt="Icon of Spinner" style="background:#BD7BFF;"><br>
						</div>
						<h4 class="mt-5">Strategy</h4>
						<br>
						<span class="underline-color" style="background:#BD7BFF;"></span><br>
						<p>Digital strategy, personas, customer journey, concept development, information analysis, visitor analysis, prototyping, benchmarking, content strategy</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 mt-4">
				<a href="about-more/technology.php" class="text-dark text-decoration-none" title="Click to learn more about technology">

					<div class="card wow animate__animated animate__fadeInUp" data-wow-delay="2s">
						<div class="icon-bg">
							<img src="images/icons/technology-icon.png" alt="Icon of VR goggles" style="background:#FFC27B;"><br>
						</div>
						<h4 class="mt-5">Technology</h4>
						<br>
						<span class="underline-color" style="background:#FFC27B;"></span><br>
						<p>We Design responsive websites, Open source technology, WordPress CMS, Umbraco CMS, Chatbots, HTML, C# .NET, SQL Server, System integration and APIs</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 mt-4">
				<a href="about-more/marketing.php" class="text-dark text-decoration-none" title="Click to learn more about marketing">

					<div class="card wow animate__animated animate__fadeInUp" data-wow-delay="2.5s">
						<div class="icon-bg">
							<img src="images/icons/marketing-icon.png" alt="Icon of network" style="background:#FC7B7B;"><br>
						</div>
						<h4 class="mt-5">Marketing</h4>
						<br>
						<span class="underline-color" style="background:#FC7B7B;"></span><br>
						<p>Copywriting, Marketing Automation, Social, Email marketing, Advertising (SEA), Content creation, Search engine optimization (SEO), Analytics dashboards
						</p>
					</div>
				</a>
			</div>
		</div>

		<div>
			<h2 id="makeAppointmentHeading">MAKE AN APPOINTMENT?</h2>
			<div id="makeAppointmentContent">
				<p style="max-width:457px;">Ready to offer your customers a digital
					experience? Feel free to drop by for coffee and a
					personal conversation.</p>
				<a type="button" class="btn btn-light text-white text-uppercase gradient-bg" href="contact">Contact</a>

			</div>
			<img src="images/rocketman.png" width="1111" alt="" id="rocketMan" class="mt-5 pt-5">
		</div>


	</div>
</div>

<?php include('includes/footer.php'); ?>

<script src="js/nav.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/wow.js"></script>
