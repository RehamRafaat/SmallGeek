<?php

session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../test.php");
}

function get_gender($g){
    if($g == 1){
        return "Female";
    }
    else if($g == 2){
        return "Male";
    }
}

function get_date($d, $m, $y){
    return $d.'-'.$m.'-'.$y;
}
$css="profile.css";
include("inc/header.php");
?>
        <div class="container-fluied" >
        <div class="row">
            <audio id="nav_audio">
                <source src="pop.mp3"></source>
                <source src="pop.mp3"></source>
            </audio>
        <section style="height:1500px; background-image: url(image/get4.jpeg); background-repeat: no-repeat; background-size: cover;">
        <div class="container" >
        <div class="row">
        <div class="hidden-xs  hidden-sm">   
            <form>
            <div class="col-md-12 pro_pic hidden-xs  hidden-sm">
            <img src="image/rectangle-stroked-256.png" class="profile_frame_photo"/>
                     <input type="file" class="btn" style="margin-top: -380px; margin-left: 27%; width: 150px; height: 50px; font-size: 18px; margin-top:-200px;" value="New Photo">
            <input class="conta" placeholder="Enter Name" style="text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top:200px; " value="<?php echo $_SESSION['name'];?>">
            </div>
            
            <div class="col-md-12 col-sm-12 hidden-xs hidden-sm info" style="margin-top: 30px;">
                
                
                     <input type="email"class=" col-md-6 conta" placeholder="Enter Email" style="margin-top: 1px; margin-left: -105px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: 50px;" value="<?php echo $_SESSION['email'];?>">
                
                      <input type="Phone"class=" col-md-6 conta" placeholder="Enter Phone" style="margin-top:170px; margin-left: -320px;text-align: center; font-size: 25px; color: turquoise; width: 320px;" value="<?php echo $_SESSION['phone'];?>">
               
                   
                     <input type="text"class=" col-md-6 conta" placeholder="Enter Gender" style=" margin-left: 520px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: -170px;" value="<?php echo get_gender($_SESSION['gender']);?>">
                
                    <input type="text"class=" col-md-6 conta" placeholder="Enter Birth Date" style=" margin-left: 520px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: -55px;" value="<?php echo get_date($_SESSION['day'],$_SESSION['month'],$_SESSION['year']);?>">
            
            </div>
            <div class="col-md-12 col-sm-12 hidden-xs hidden-sm info" style="margin-top: 10px;">
           <h2 class="About_title"style="color: white; margin-right: 200px; margin-left: 250px; font-size: 30px; margin-top: 10px;">Finished Courses :</h2>
                   
                    <input type="text"class=" col-md-6 conta" placeholder="Enter Courses" style=" margin-left: -20px; text-align: center; height: 170px; font-size: 25px; color: turquoise; width: 800px; margin-top: 20px; border-color: turquoise;">
                 <button type="button" class="btn" style="margin-top: 50px; margin-left: 39%; width: 150px; height: 50px; font-size: 18px;">Submit</button>
            </div>
            </form>
        </div>
            
             <div class="hidden-md hidden-lg">
                 <div class="container">
                 <div class="row">
                     <div style="height:1500px;">
                     <div class="container">
                     <div class="row">
                  <div class="col-md-12 pro_pic" style="margin-left: 2px;">
            <img src="image/rectangle-stroked-256.png" class="profile_frame_photo"/>
                    <button type="button" class="btn" style="margin-top: -380px; margin-left: 27%; width: 150px; height: 50px; font-size: 18px;">New Photo</button>
                      <input class="conta" placeholder="Enter Name" style="text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-left: 10px; margin-top: -20px;" value="<?php echo $_SESSION['name']; ?>">
            </div>
                
                   <input type="email"class=" col-xs-12 col-sm-12 conta" placeholder="Enter Email" style="margin-top: 50px; margin-left: 30px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: 50px;">
                         
                    <input type="Phone"class=" col-xs-12 col-sm-12 conta " placeholder="Enter Phone" style="margin-top: 50px;margin-left: 30px;text-align: center; font-size: 25px; color: turquoise; width: 320px;">
    
                   <input type="text"class="col-xs-12 col-sm-12 conta" placeholder="Enter Gender" style=" margin-left: 30px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: 50px;">
                
                     <input type="text"class="col-xs-12 col-sm-12 conta" placeholder="Enter Birth Date" style=" margin-left: 30px; text-align: center; font-size: 25px; color: turquoise; width: 320px; margin-top: 50px;">
                <div class="col-xs-12 col-sm-12">
                  
                </div>
                <div class="col-xs-12 col-sm-12">
                  <h2 class="About_title"style="color: white; font-size: 30px; margin-top: 50px;">Finished Courses :</h2>
                </div>
                
                    <input type="text"class=" col-xs-12 col-sm-12 conta" placeholder="Enter Courses" style=" margin-left: 30px; text-align: center; height: 200px;  font-size: 25px; color: turquoise; width: 300px; margin-top: 50px; border-color: turquoise;">
                
                 <button type="button" class="btn" style="margin-top: 50px; margin-left: 39%; width: 150px; height: 50px; font-size: 18px;">Submit</button>
                     </div>
                    </div>
                     
                     </div>
                     
                </div>
                 
                 </div>
                 
                 </div>
            </div>
            </div>

        
        
        </section>
        <?php include("inc/footer.php");?>
        <script type="text/javascript">
            $(".open").hover(function(){
                nav_audio.play();
                },
            function(){
                nav_audio.load();
            });
        </script>
    </body>
</html>