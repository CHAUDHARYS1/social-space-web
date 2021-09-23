<style>
	.errorMsg {
		color: red;
		font-size: 14px !important;
	}

</style>
<div class="container-fluid" style="background:#EDEDED;" id="contact">
	<div class="container" style="padding-top:100px;padding-bottom:100px;margin-top:-10px;">
		<div class="row">
			<div class="col-md-4 mt-2 pb-5">
				<img src="images/icons/location-icon.png" alt="">
				<p class="font-weight-bold">Address</p>
				<p>Chicago, Illinois</p>
				<br>
				<img src="images/icons/phone-icon.png" alt="">
				<p class="font-weight-bold"><b>Lets Talk</b></p>
				<p>(312)-585-5533</p>

				<br>
				<img src="images/icons/support-icon.png" alt="">
				<p class="font-weight-bold"><b>General Support</b></p>
				<p>isocialspace@gmail.com</p>
			</div>
			<div class="col-md-8">
				<p class="subtext">WORK WITH US • JUST SAY HI</p>
				<h3>Lets Work Together</h3>
				<br>






				<form action="contact-form-handler.php" onsubmit="contactFormValidation()" method="post"ß>
					<div class="form-row">
						<div class="col-md-8 mb-3">
							<label for="contactName" class="form-label">NAME</label>
							<input type="text" class="form-control" id="contactName" name="name">
							<p class="errorMsg" id="contactNameErr"></p>
						</div>

						<div class="col-md-4 mb-3">
							<label for="contactTitle" class="form-label">TITLE</label>
							<div class="input-group">
								<input type="text" class="form-control" id="contactTitle" name="title" optional>

							</div>
						</div>
					</div>
					<br>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="contactEmail" class="form-label">EMAIL ADDRESS</label>
							<input type="text" class="form-control" id="contactEmail" name="email">

						</div>
						<div class="col-md-3 mb-3">
							<label for="contactPhone" class="form-label">PHONE <span>(xxx-xxx-xxxx)</span>
							</label>
							<input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" class="form-control" id="contactPhone" name="phone" required>
							<p class="errorMsg" id="contactPhoneErr"></p>

						</div>
						<div class="col-md-3 mb-3">
							<label for="contactCompany" class="form-label">COMPANY</label>
							<input type="text" class="form-control" id="contactCompany" name="company" optional>

						</div>
					</div>
					<br>
					<label for="contactProjectDetails" class="form-label">PROJECT DETAILS</label>
					<textarea class="form-control mb-3" id="contactProjectDetails" placeholder="" name="details"></textarea>
					<p class="errorMsg" id="contactProjectDetailsErr"></p>

					<button class="btn btn-primary gradient-bg" type="submit" title="Click to submit the form">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
</div>


<script src="js/contactValidation.js"></script>
