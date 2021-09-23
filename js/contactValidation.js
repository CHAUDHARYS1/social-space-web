function contactFormValidation() {

	// Variables of all required inputs
	var contactName = document.getElementById("contactName");
	var contactProjectDetails = document.getElementById("contactProjectDetails");

	//values of all inputs
	var contactNameValue = document.getElementById("contactName").value;
	var contactProjectDetailsValue = document.getElementById("contactProjectDetails").value;

	//error handlers
	var contactNameErr = document.getElementById("contactNameErr");
	var contactProjectDetailsErr = document.getElementById("contactProjectDetailsErr");

	// Contact Name Validation
	if (contactNameValue === "") {
		contactNameErr.innerHTML = "Please write a valid name.";
		contactName.style.borderBottom = "2px solid red";
		event.preventDefault();
	} else {
		contactName.style.borderBottom = "2px solid green";
		contactNameErr.style.display = "none";
	}


	//Project Details Validation 
	if (contactProjectDetailsValue === "") {
		contactProjectDetailsErr.innerHTML = "Please write the details of your project.";
		contactProjectDetails.style.borderBottom = "2px solid red";
		event.preventDefault();
	} else {
		contactProjectDetails.style.borderBottom = "2px solid green";
		contactProjectDetailsErr.style.display = "none";
	}



}
