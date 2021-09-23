function openNav() {
	var containerFluid = document.getElementsByClassName("container-fluid");

	document.getElementById("mySidenav").style.width = "250px";
	document.body.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("menu").style.marginLeft = "0";
	document.body.style.backgroundColor = "white";
}
