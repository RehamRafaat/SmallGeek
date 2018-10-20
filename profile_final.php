<?php

$css="profile.css";
include("inc/header.php");
?>
    <div class="container-fluied">
        <div class="row">
            <audio id="nav_audio">
                <source src="pop.mp3"></source>
                <source src="pop.mp3"></source>
            </audio>
            <section style="height:1500px; background-image: url(image/get2.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs  hidden-sm">

                            <div class="col-md-12 pro_pic hidden-xs  hidden-sm">
                                <img src="image/rectangle-stroked-256.png" class="profile_frame_photo" />
                                <div class="profile_photo" style="background-image: url('image/users_pictures/<?php echo $_SESSION['email'];?>');">

                                </div>
                                <h2 class="About_title" style="color: gray;  margin-left: 10px; margin-top: -20px; font-size: 50px;">
                                    <?php echo $_SESSION['name'];?>
                                </h2>
                                <?php if(isset($_GET['id']) && $_SESSION['id'] != $_GET['id']){ ?>
                                <button type="button" class="btn" style="margin-top: 10px; margin-left: 35%; width: 70px; height: 50px; font-size: 18px;">Add</button>
                                <?php }  ?>
                            </div>

                            <div class="col-md-12 col-sm-12 hidden-xs hidden-sm info" style="margin-top: 30px;">
                                <div class="col-md-6 conta" style="margin-left: -105px; width: 320px; margin-top: 50px; ">
                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">
                                        <?php echo $_SESSION['email'];?>
                                    </h3>
                                </div>
                                <div class="col-md-6 conta" style="margin-left: -320px; width: 320px; margin-top:130px; ">
                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">
                                        <?php echo $_SESSION['phone'];?>
                                    </h3>
                                </div>
                                <div class="col-md-6 conta" style=" margin-left: 520px; width: 320px; margin-top: -130px;  ">
                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">
                                        <?php 
                        if($_SESSION['gender'] == 1) echo 'Female';
                        else echo 'Male';
                    ?>
                                    </h3>
                                </div>
                                <div class="col-md-6 conta" style=" margin-left: 520px; width: 320px; margin-top: -50px;  ">
                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">
                                        <?php
                            echo $_SESSION['day'] . '-' . $_SESSION['month'] . '-' . $_SESSION['year'];
                        ?>
                                    </h3>
                                </div>

                            </div>
                            <div class="col-md-12 col-sm-12 hidden-xs hidden-sm info" style="margin-top: 10px;">
                                <h2 class="About_title" style="color: white; margin-right: 200px; margin-left: 250px; font-size: 30px; margin-top: 10px;">Finished Courses :</h2>
                                <div class="col-md-6 conta" style=" margin-left: -20px; width: 800px; height: 170px; margin-top: 20px; border-color: turquoise; ">
                                    <h3 style="color: darkturquoise;">C++ - HTML - CSS- JS - Bootstrap</h3>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 hidden-xs hidden-sm info" style="margin-top: 40px;">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="About_title" style="color: white; margin-left: 310px;  font-size: 30px; margin-top: 30px;">Friends</h2>
                                        <br>
                                        <a href="">
                                            <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/Cartoon-Kids-PNG-Clipart-Image-01.png)">

                                            </div>
                                        </a>
                                        <a href="">
                                            <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/Cartoon-Kids-PNG-Clipart-Image-06.png)">

                                            </div>
                                        </a>
                                        <a href="">
                                            <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/26880-6-speaking-transparent.png)">

                                            </div>
                                        </a>
                                        <a href="">
                                            <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/3204374.png)">

                                            </div>
                                        </a>
                                        <a href="">
                                            <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/roboty.png)">

                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="container">
                                <div class="row">
                                    <div style="height:1500px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 pro_pic" style="margin-left: 2px;">
                                                    <img src="image/rectangle-stroked-256.png" class="profile_frame_photo" />
                                                    <div class="profile_photo">

                                                    </div>
                                                    <h2 class="About_title" style="color: gray;  margin-left: 10px; margin-top: -20px; font-size: 50px;">Reham Raafat</h2>
                                                    <button type="button" class="btn" style="margin-top: 10px; margin-left: 35%; width: 70px; height: 50px; font-size: 18px;">Add</button>
                                                </div>

                                                <div class="col-xs-12 col-xs-12  conta" style="margin-top: 50px; margin-left: 30px; width: 320px; ">
                                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 7px;">Web Developer</h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-12  conta" style=" width: 320px; margin-top: 50px; margin-left: 30px;">
                                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">rereraafat3@gmail.com</h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-12  conta" style=" width: 320px;margin-top: 50px;margin-left: 30px; ">
                                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">01284623446</h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 conta" style="  width: 320px; margin-top: 50px;margin-left: 30px; ">
                                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">Famale</h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 conta" style="width: 320px;margin-top: 50px;margin-left: 30px; ">
                                                    <h3 style="text-align: center; color: darkturquoise; margin-top: 6.5px;">25-2-1999</h3>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">

                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <h2 class="About_title" style="color: white; font-size: 30px; margin-top: 50px;">Finished Courses :</h2>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 conta" style="width: 320px; height: 300px; margin-top: 50px;margin-left: 30px; ">
                                                    <h3 style="color: darkturquoise;">C++ - HTML - CSS- JS - Bootstrap</h3>
                                                </div>
                                                <div class="col-md-12 col-sm-12 hidden-xs info" style="margin-top: 10px; margin-left: 10px;">
                                                    <div class="container">
                                                        <div class="row">
                                                            <h2 class="About_title" style="color: white; margin-left: 10px;  font-size: 30px; margin-top: 30px;">Friends</h2>
                                                            <br>
                                                            <a href="">
                                                                <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/Cartoon-Kids-PNG-Clipart-Image-01.png)">

                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/Cartoon-Kids-PNG-Clipart-Image-06.png)">

                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/26880-6-speaking-transparent.png)">

                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/3204374.png)">

                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="col-md-3 col-sm-6 col-xs-12 fri" style="background-image: url(image/roboty.png)">

                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
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