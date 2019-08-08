<?php

include 'php/viewservices.inc.php';

?>


<script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>    
<!-- <script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>    
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand"> 
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="https://webdesignvista.com">
                        CEES</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">                    
                        <a class="nav-link link text-black display-4 dropdown">CEES Academy   
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-cont">
                            <?php

                           // $services=new ViewServices();
                           // $services->ShowAllServices();
                            ?> 
                            <a href="Programs.php">Service 01</a>
                            <a href="services-talent.php">Service 02</a>
                            <a href="#">Service 03</a>  
                            <a href="#">Service 04</a>

                        </div>
                </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">                    
                        <a class="nav-link link text-black display-4 dropdown">Technology Solutions   
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-cont">
                            <a href="service_pages/sample.html">Sample service</a>
                            <a href="#">Service 02</a>
                            <a href="#">Service 03</a>  
                            <a href="#">Service 04</a>  
                        </div>
                </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">                    
                        <a class="nav-link link text-black display-4 dropdown">Consultancy Services   
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-cont">
                            <a href="#">Service 01</a>
                            <a href="#">Service 02</a>
                            <a href="#">Service 03</a>  
                            <a href="#">Service 04</a>  
                        </div>
                </div>
                </li>
                <!-- <li class="nav-item"><a class="nav-link link text-black display-4" href="post.php">Post</a>
                </li> -->
<!--                 <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="contact.php">Contact</a>
                </li>
            </ul>
            
        </div>
    </nav>
    </nav> -->



	<link rel="stylesheet" href="https://technext.github.io/callie/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/navbar/navcss.css" />
    

	<!-- HEADER -->
	<header id="header" style="background-color:white">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- search & aside toggle -->
                    <div class="nav-btns" >
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="logo" style="display:none;">
                <img src="cees2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:30%;">
             </div>

			<div id="nav-bottom">
                <div class = "row" >
                    <div class="col-md-2" style="margin:auto">
                        <img src="cees2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:30%;">
                    </div>
                
                    <div class="col-md-10"  style="padding-top:7px;padding-bottom:7px;padding-right:5%;" >
                    <!-- nav -->
                       <ul class="nav-menu" >
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="has-dropdown megamenu" >
                                    <a href="#">Technology Solutions</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Categories</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Lifestyle</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Technology</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Fashion</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Travel</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Healtth</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Health</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a href="#">Consultancy Services</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Categories</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Lifestyle</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Technology</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Fashion</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Travel</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Healtth</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Health</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a href="#">Research & Insights</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Categories</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Lifestyle</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Technology</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Fashion</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                    </ul>
                                                    <h4 class="dropdown-heading">Travel</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Healtth</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Health</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <!-- /nav -->
            
                        
                    </div>
                </div>
			<!-- /Main Nav -->
            </div>
			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="index.html">Home</a></li>
					<li class="has-dropdown"><a>Categories</a>
						<ul class="dropdown">
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Health</a></li>
						</ul>
					</li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contacts</a></li>
					<li><a href="#">Advertise</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->



.dropdown-cont a {
<!-- .dropdown-cont a {
  float: none;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;

} -->


	<!-- jQuery Plugins -->
	<script src="assets/navbar/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="assets/navbar/jquery.stellar.min.js"></script>
	<script src="assets/navbar/main.js"></script>