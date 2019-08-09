<?php
//include 'php/dbh.inc.php';
//include 'php/services.inc.php';
//include 'php/viewservices.inc.php';
?>


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
						<button class="aside-btn" style="color:#0e5082" id="ham_icon"><i class="fa fa-bars"></i></button>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="logo" style="display:none;">
                <img src="cees2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:10%;">
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
                                    <a href="index.php">Home</a>
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
                                                        <li><a href="services-talent.php">Technology (Active)</a></li>
                                                        <li><a href="#">Fashion</a></li>
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
                                                       <?php
                                                        //$services=new ViewServices();
                                                        // $services->ShowAllServices();
                                                        ?> 
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
                                    <a href="#">CEES Academy</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Programs</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="Programs.php">CEES Academy Programs(Active)</a></li>
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
                                    <a href="#">Consultancy</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading">Categories</h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="services2.php">Technology(Active)</a></li>
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
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                            <!-- /nav -->
            
                        
                    </div>
                </div>
			<!-- /Main Nav -->
            </div>
			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="index.php">Home</a></li>
					<li class="has-dropdown"><a class="side_a">Consultancy Services</a>
						<ul class="dropdown">
							<li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
						</ul>
					</li>
                    <li class="has-dropdown"><a class="side_a">Technology Solutions</a>
						<ul class="dropdown">
							<li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
						</ul>
					</li>
                    <li class="has-dropdown"><a class="side_a">Research & Insights</a>
						<ul class="dropdown">
							<li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
						</ul>
					</li>
                    <li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
	<!-- jQuery Plugins -->
	<script src="assets/navbar/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="assets/navbar/jquery.stellar.min.js"></script>
    <script src="assets/navbar/main.js"></script>
    