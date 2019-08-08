<?php
//include 'php/dbh.inc.php';
//include 'php/services.inc.php';
//include 'php/viewservices.inc.php';
?>
<script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>    
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
                        <a class="nav-link link text-black display-4 dropdown">Services 
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-cont">
                            <?php
                            //$services=new ViewServices();
                            //$services->ShowAllServices();
                            ?>
                        </div>
                </div>

                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="post.php">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="contact.php">Contact</a>
                </li>
            </ul>
            
        </div>
    </nav>



<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.dropdown-cont {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  font-family: inherit;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 999;
}
.dropdown-cont a:hover {
  background-color: #ddd;
}

.dropdown-cont a {
  float: none;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown:hover .dropdown-cont {
  display: block;
}
</style>