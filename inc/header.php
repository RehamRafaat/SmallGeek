<?php

session_start();
if(!isset($_SESSION['name'])){
    header("Location: test.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Small Geek</title>
    <link rel="shortcut icon" href="image/roby2.png">
    
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="Css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- GLOBAL CSS -->
	<link rel="stylesheet" href="Css/global.css" />
    <link rel="stylesheet" href="Css/animate.min.css" />
    <?php if(isset($css)){ ?>
    <link rel="stylesheet" href="Css/<?php echo $css; ?>" />
    
    <?php } ?>
    
    <!-- FONTS -->
	<link rel="stylesheet" href="assets/css/open-sans/open-sans.css" />
	<link rel="stylesheet" href="assets/css/montserrat/css/montserrat-webfont.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css" />
    
    <!--jQuiry-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="Js/global.js"></script>
    
    
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine3/style.css" />
	<!--script type="text/javascript" src="engine3/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine5/style.css" />
	<!--script type="text/javascript" src="engine5/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine4/style.css" />
	<!--script type="text/javascript" src="engine4/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine5/style.css" />
	<!--script type="text/javascript" src="engine5/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 40%;
  top: 40%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  animation-duration : 5s;
    animation-timing-function: ease;
    animation-iteration-count: infinite;
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}

    .chip {
    display: inline-block;
    padding: 0 25px;
    height: 100px;
    width: 250px;  
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
    float: left;
    margin: 0 10px 0 -25px;
}

   .chip img{
       float: left;
       margin: 0 10px 0 -25px;
       border-radius: 50%;
       height: 150px;
       width: 150px;
       margin-top: -25px;
       margin-left: -120px;
    }
</style>

</head>
    

    <body onload="myFunction()" style="margin:0;" >
        
<?php if(isset($home_sound)){ ?>
        <embed src="sounds/<?php echo $home_sound; ?>" autostart="true" loop="true"
            width="2" height="0">
            
            <bgsound src="sounds/<?php echo $home_sound; ?>" loop="infinite">
<?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12"></div>
                <div class="col-md-12 col-sm-12" id="loader">
                <img src="image/rema.gif" style="width: 200px; height: 200px; margin-left: 90px;">
                </div>
            </div>
        </div>

<div style="display:none;" id="myDiv" class="animate-bottom">
        
<?php if(isset($sound)){ ?>
        
        <embed src="sounds/<?php echo $sound; ?>" autostart="true" loop="true"
            width="2" height="0">
            </embed>
            <bgsound  src="sounds/<?php echo $sound; ?>" loop="infinite">
            </noembed>
<?php } ?>
    
    <!-- START HEADER -->
	<header id="header">
        
      <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Small Geek</a>
    </div>
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="includes/logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" style="color:turquoise;">
  </div>
          <a data-toggle="modal" data-target="#myModal" style="text-decoration: none;"><img src="image/bell.png" class="popup" onclick="pop()" width=50px; height=45px; onmouseover="this.src='image/show_alert.png'" onmouseout="this.src='image/alert.png';"/></a>
           
</form>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        
      <ul class="nav navbar-nav navbar-right">
          
        <li class="<?php if($section=="courses") {echo "on";}?>"><a href="Task.php">Home</a></li>
          
        <li class="on"><a href="courses.php">Courses</a></li>
          
        <li class="on"><a href="games.php">Games</a></li>
          
        <li class="on"><a href="profile_final.php">Profile</a></li>
      </ul>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <span class="popuptext" id="myPopup" style="display:none;">A Simple Popup!</span>
    </header>
            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
      <div class="modal-content" style="background-color:aliceblue;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: darkturquoise;">New Friend Request</h4>
        </div>
        <div class="modal-body">
          <h2 style="color: grey;"></h2>
            <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
                </div>
                
<script>
// When the user clicks on div, open the popup
function pop() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

         <script>
    var myVar;

    function myFunction() {
          myVar = setTimeout(showPage, 3000);
     }

    function showPage() {
              document.getElementById("loader").style.display = "none";
              document.getElementById("myDiv").style.display = "block";
     }
 </script>
    <script>
        $(".open").hover(function(){
                nav_audio.play();
                },
            function(){
                nav_audio.load();
            });
    </script>