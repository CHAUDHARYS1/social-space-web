<style>
	.active {
		background: black;
	}


	#navigation a:hover {
		background: black;

	}

</style>



<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="index">Home</a>
	<a href="about">About</a>
	<a href="services">Services</a>
	<a href="contact">Contact</a>
	<div class="mr-right">
		<a href="https://www.facebook.com/Social-Space-Web-111106660595246/" title="Click to go to Social Space Web Facebook Page"><img src="images/icons/facebook-icon.png" alt="Facebook Icon"></a>
		<a href="https://twitter.com/SocialSpaceWeb1" title="Click to go to Social Space Web Twitter Page"><img src="images/icons/twitter-icon.png" alt="Twitter Icon"></a>
		<a href="https://www.linkedin.com/company/social-space-web/?viewAsMember=true" title="Click to go to Social Space Web LinkedIn Page"><img src="images/icons/linkedin-icon.png" alt="LinkedIn Icon"></a>
		<a href="https://www.instagram.com/kapilvyas2/" title="Click to go to Social Space Web Instagram Page"><img src="images/icons/instagram-icon.png" alt="Instagram Icon"></a>
		<a href="https://www.youtube.com/channel/UCexCZEF_4oQspucwuDeY2Pw?view_as=subscriber" title="Click to go to Social Space Web Youtube Page"><img src="images/icons/youtube-icon.png" alt="Youtube Icon"></a>
	</div>
</div>




<nav class="navbar navbar-expand-lg navbar-white">
	<div class="container" style="margin-top:40px;">
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""><img src="images/icons/menu-icon-white.png" alt=""></span>
				</button> -->
		<div id="menu">

			<span style="font-size:30px;cursor:pointer" class="text-white" onclick="openNav()">&#9776;</span>
		</div>
		<div class="collapse navbar-collapse mr-left">
			<div class="navbar-nav" id="navigation">
				<a class="nav-item nav-link mr-2 text-white <?php if ($first_part=="home") {echo "active"; } else  {echo "noactive";}?>" href="index.php">Home</a>
				<a class="nav-item nav-link mr-2 text-white <?php if ($first_part=="about") {echo "active"; } else  {echo "noactive";}?>" href="about">About</a>
				<a class="nav-item nav-link mr-2 text-white <?php if ($first_part=="services") {echo "active"; } else  {echo "noactive";}?>" href="services">Services</a>
				<a class="nav-item nav-link mr-2 text-white <?php if ($first_part=="contact") {echo "active"; } else  {echo "noactive";}?>" href="contact">Contact</a>
			</div>
		</div>
		<a href="index" class="brand" style="margin: 0; float: none;" class="text-center"><img src="images/logo.png" height="100" alt=""></a>
		<div class="mr-right" id="navbarSocialIcons">
			<a href="https://www.facebook.com/Social-Space-Web-111106660595246/" title="Click to go to Social Space Web Facebook Page"><img src="images/icons/facebook-icon.png" alt="Facebook Icon"></a>
			<a href="https://twitter.com/SocialSpaceWeb1" class="ml-2" title="Click to go to Social Space Web Twitter Page"><img src="images/icons/twitter-icon.png" alt="Twitter Icon"></a>
			<a href="https://www.linkedin.com/company/social-space-web/?viewAsMember=true" class="ml-2" title="Click to go to Social Space Web LinkedIn Page"><img src="images/icons/linkedin-icon.png" alt="LinkedIn Icon"></a>
			<a href="https://www.instagram.com/kapilvyas2/" class="ml-2" title="Click to go to Social Space Web Instagram Page"><img src="images/icons/instagram-icon.png" alt="Instagram Icon"></a>
			<a href="https://www.youtube.com/channel/UCexCZEF_4oQspucwuDeY2Pw?view_as=subscriber" class="ml-2" title="Click to go to Social Space Web Youtube Page"><img src="images/icons/youtube-icon.png" alt="Youtube Icon"></a>

		</div>

	</div>

</nav>
<div class="container">
	<hr style="background:#EDE28F; height:.2px; width:100%;margin-top:40px;">
</div>
