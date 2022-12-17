<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/ -->
    <!-- bootstrap/4.0.0/css/bootstrap.min.css" integrity= -->
    <!-- "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJ1SAwiGgFAW/" crossorigin="anonymous"> -->

    <title>IoT Smart Feeder</title>

    <script type="text/javascript" src = "jquery/jquery.min.js"> </script>

    <link href="css/style.css" rel="stylesheet" media="all">

    <script type="text/javascript">
       
$(document).ready(function(){

setInterval( function(){
    $("#checktemp").load("checktemp.php");
    $("#checkhumid").load("checkhumid.php");
    $("#checkjarak").load("checkjarak.php");
    $("#checkgerakan").load("checkgerakan.php");
}, 1000 );
});

    </script>

<meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/mdb.min.js"></script> -->
    <script type="text/javascrpt" src="jquery-latest.js"></script>
    
	
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>


::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track{
	box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar{
	width: 12px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb{
	border-radius: 10px;
	box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.3);
	background-color: rgb(3, 0, 0);
}
</style>


  </head>
  <body>

  
<body class="animsition">
  <div id="wrapper">
      <!-- END HEADER MOBILE-->
  <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/lutfi.png" alt="lutfi" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>

                    <nav class="navbar">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#dashboard" class= "menu-btn">Dashboard</a>
                                </li>
                             
                            </ul>
                        </li>



                        <li>
                            <a href="#schematics" class= "menu-btn">
                                <i class="far fa-check-square"></i>Schematics</a>
                        </li>



                
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                               
                         
                               
                               
                    

                           
                            
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->



           <!-- MENU SIDEBAR-->
           <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/lutfi.png" alt="lutfi" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#dashboard" class= "menu-btn" >Dashboard</a>
                                </li>
                               
                            </ul>
                        </li>




                        <li>
                            <a href="#schematics"  class= "menu-btn">
                            <i class="zmdi zmdi-card-sd"></i></i>Schematics</a>
                            
                        </li>



                        
                        <li>
                            <a href="#profile"  class= "menu-btn">
                            <i class="zmdi zmdi-account-o"></i></i>Profile</a>
                            
                        </li>





                        <li>
                            <a href="#contact"  class= "menu-btn">
                            <ion-icon name="call-outline"></ion-icon></i>Contact</a>
                        </li>

                       
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                               
                         
                              
                            </ul>
                        </li>
                        
                           
                       

                                    
                                </li>
                                
                                   
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


  <!-- PAGE CONTAINER-->
  <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for sensors &amp; data...." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 new message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/elisa.jpeg" alt="Elisa" />
                                                </div>
                                                <div class="content">
                                                    <h6>Elisa</h6>
                                                    <p><a href="https://www.messenger.com/" target="_blank">has sent a photo</a></p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/idraki.jpeg" alt="Idraki" />
                                                </div>
                                                <div class="content">
                                                    <h6>Idraki</h6>
                                                    <p> <a href="https://www.messenger.com/" target="_blank">You are now connected on messenger</a></p>
                                                   
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/irman.jpeg" alt="Irman" />
                                                </div>
                                                <div class="content">
                                                      <p>  <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Discuss about sensor data</a><p>
                                                    <span>Irman, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/female.jpg" alt="Cik Azwin" />
                                                </div>
                                                <div class="content">
                                                    
                                                  <p>  <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Consultation about web technology...</a><p>
                                                    <span>Cik Azwin, Today</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/man.jpg" alt="Cik Suhaimi" />
                                                </div>
                                                <div class="content">
                                                    <p>  <p>  <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Submission Assignment reminder..</a><p></p>
                                                    <span>Cik Suhaimi, April 20,,2020</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">You got unread email</a></p>
                                                    <span class="date">April 30, 2022 10:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="https://cdn.dribbble.com/users/6659664/screenshots/15750262/media/82e52180ea4c63de9e6d5bbcce5b8336.png?compress=1&resize=400x300&vertical=top" target="_blank">Verify your account</a></p>
                                                    <span class="date">April 12, 2022 10:30</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="https://www.dropbox.com/home" target="_blank">You got a new file</a></p>
                                                    <span class="date">April 30, 2022 10:40</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/lutfi.jpg" alt="Lutfi" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Lutfi Hadi</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/lutfi.jpg" alt="Lutfi Hadi" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Lutfi Hadi</a>
                                                    </h5>
                                                    <span class="email"><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">luffihdi@gmail.com</a></span>
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        
                                </div>
                            </div>
                        </div>

                        <section class="dashboard" id="dashboard">
                        <div class="row m-t-25">
                          
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                        
    
                                        <div class="icon">
                                            <i class="zmdi zmdi-sun"></i>
                                            </div>
                                            <div class="text">
                                            <h1> <span id="checktemp">0</span> </h1> 
                                            <span>Temperature</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                        
    
                                        <div class="icon">
                                            <i class="zmdi zmdi-sun"></i>
                                            </div>
                                            <div class="text">
                                            <h1> <span id="checkhumid">0</span> </h1> 
                                            <span>Humidity</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


<
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                        
    
                                        <div class="icon">
                                            <i class="zmdi zmdi-sun"></i>
                                            </div>
                                            <div class="text">
                                            <h1> <span id="checkjarak">0</span> </h1> 
                                            <span>Distance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                        
    
                                        <div class="icon">
                                            <i class="zmdi zmdi-sun"></i>
                                            </div>
                                            <div class="text">
                                            <h1> <span id="checkgerakan">0</span> </h1> 
                                            <span>Motion</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


                           <p> My name is Lutfi Hadi , This my Dashboard website for displaying my fyp project for Sensor Data<p>

<p>This Project is called "IoT Smart feeder with humidity and quantity detection" for reasons,one of the reason is because my projects will be use to pour out a portion of food to animal , when the PIR motion detects motion it will trigger servo to rotate the blade and food will pour out by itself.<p>



                           </div>
                           
                

                                          <br>
                                          <br>
                                          <br>
                                         
                                    <section class="schematics" id="schematics">

                                    <div class="container" style="text-align:center;">
                                    <h3>Schematics</h3>
                                    <img src="images/icon/circuit.png" alt="schematic">

                                    <br>
                                          <br>
                                          <br>

                                          <h3>Circuit</h3>
                                    <img src="images/icon/schematics.png" alt="circuit">

                                          
                                         
</section>
                                          <section class="profile" id="profile">
                                          <div class="container" style="text-align:center;">
                                    <h3>Profile</h3>
                                   <h3> <a href="https://lutfihadi.000webhostapp.com/" target="_blank">Go to Lutfi's Profile</a><h3>
                                
                                

                                    <div class="img-container">
                                        <img src="images/icon/profile2.png">
                                    </div>


                                   
                                    </div>
                                    <section>
</div>
</div>


                                             <br>
                                          <br>
                                          <br>






<br>
<br>
<br>

                            <div class="container" style="text-align:center;">



<section class="contact" id="contact"> 
<h3>Contact me</h3>

<a href="https://www.instagram.com/lutfyyss/" >


<ion-icon name="logo-instagram"></ion-icon>

</a>


  <a href="https://twitter.com/llutfih" >

  <ion-icon name="logo-twitter"></ion-icon>

</a>


<a href="https://wa.link/dlzwt9" >

<ion-icon name="logo-whatsapp"></ion-icon>

</a>




<footer>
        <span>Created By <a href="https://linktr.ee/luciuszaraga" target="_blank">Lutfi</a> <span>Hadi</span> | 3C</span>
    </footer>

</div>


</section>











  </div>
            </div>



<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
    
    
    <script type="text/javascript" src="bootstrap.min.js"></script>
</script>

<!-- Main JS-->

<script type="text/javascript"src="js/lutfi.js"></script>




  </body>
</html>