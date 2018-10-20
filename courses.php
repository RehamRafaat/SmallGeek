
<?php

$sound = "pro.mp3";
$css="courses.css";
$section = "courses";
include("inc/header.php"); 
?>
    <div class="container-fluied">
        <div class="row">
            <audio id="nav_audio">
                <source src="pop.mp3"></source>
                <source src="pop.mp3"></source>
            </audio>
            <div class="hidden-sm hidden-xs">
                <section class="section_2" style="height: 620px; background-image: url(image/free-vector-classroom2.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <h1 class="About_Head_title" style="font-size: 50px; color: aqua; margin-top: 210px;">Studing Time</h1>
                        </div>
                    </div>

                </section>

                <section class="section_4">
                    <div class="container">
                        <div class="row">

                            <h1 class="About_Head_title" style="">Which feild you are keen on ?</h1>
                            <p class=" col-lg-12 col-md-12 hidden-sm  hidden-xs" style="font-size: 22px; margin-top: 150px; color:gray; text-align: center; margin-bottom: -110px;">
                                choose from the following two doors which feild you want </p>
                            <div class="col-md-3" style="margin-left: 40px;">
                                <img src="image/Cartoon-Kids-PNG-Clipart-Image-01.png" style="width: 150px; height: 210px;margin-top: 350px; ">
                            </div>
                            <a href="math_courses.php">
                                <div class="col-md-3 door1 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px; "></div>
                            </a>
                            <a href="programming_courses.php">
                                <div class="col-md-3 door2 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px;"></div>
                            </a>
                            <div class="col-md-3" style="">
                                <img src="image/Cartoon-Kids-PNG-Clipart-Image-06.png" style="width: 150px; height: 210px;margin-top: -350px; margin-left: 915px; ">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hidden-md hidden-lg" style="height: 2000px;">
                <section class="section_2" style="height: 620px; background-image: url(image/free-vector-classroom2.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <h1 class="About_Head_title" style="font-size: 50px; color: aqua; margin-top: 350px;">Studing Time</h1>
                        </div>
                    </div>

                </section>
                <section class="section_4">
                    <div class="container">
                        <div class="row">

                            <h1 class="About_Head_title" style="">Which feild you are keen on ?</h1>
                            <p class=" col-lg-12 col-md-12 hidden-sm  hidden-xs" style="font-size: 22px; margin-top: 150px; color:gray; text-align: center; margin-bottom: -110px;">
                                choose from the following two doors which feild you want </p>
                            <a href="math_courses.php">
                                <div class="col-md-3 door1 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px; margin-left: 30%; "></div>
                            </a>
                            <a href="programming_courses.php">
                                <div class="col-md-3 door2 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px; margin-left: 30%;"></div>
                            </a>

                        </div>
                    </div>
                </section>
            </div>

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