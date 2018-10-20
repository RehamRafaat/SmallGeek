<?php

$sound = "yeah.mp3";
$css="games.css";
include("inc/header.php"); 
?>
    <div class="container-fluied">
        <div class="row">
            <audio id="nav_audio">
                <source src="sounds/pop.mp3"></source>
                <source src="sounds/pop.mp3"></source>
            </audio>
            <div class="hidden-sm hidden-xs">
                <div class="parallax"></div>
                <div style="height:450px;"></div>
                <div class="container">
                    <div class="row">
                        <h1 class="About_Head_title" style="margin-top: -400px; font-size: 40px;">Time To Play</h1>
                        <h1 class="About_Head_title" style="margin-top: 140px; 140px; font-size: 20px; color:grey;">Choose Type of Game You Want To Play From Following Doors</h1>
                        <a href="math_games.php">
                            <div class="col-md-3 door1 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px;">
                            </div>
                        </a>
                        <a href="coding_games.php">
                            <div class="col-md-3 door2 open" style="height: 400px; margin-bottom: 20px; margin-top: 200px;">
                            </div>
                        </a>
                        <a href="iq_tests.php">
                            <div class="col-md-3 door3 open" style="height: 400px; margin-bottom: 20px;margin-top: 200px;">
                            </div>
                        </a>
                        <a href="global_games.php">
                            <div class="col-md-3 door4 open" style="height: 400px; margin-bottom: 20px;margin-top: 200px;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden-md hidden-lg">

                <div class="parallax"></div>
                <div style="height:2700px;">
                    <div class="container">
                        <div class="row">
                            <h1 class="About_Head_title" style="margin-top: 20px; font-size: 40px;">Time To Play</h1>
                            <h1 class="About_Head_title" style="margin-top: 170px; 140px; font-size: 20px; color:grey;">Choose Type of Game You Want To Play From Following Doors</h1>
                            <div class="col-md-12">
                                <a href="math_games.php"><img src="image/math.png" style=" margin-left: 35%; margin-top: 110px;  margin-bottom: 20px;"></a>
                            </div>
                            <div class="col-md-12">
                                <a href="coding_games.php"><img src="image/coding.png" style=" margin-left: 35%; margin-top: 50px;  margin-bottom: 20px;"></a>
                            </div>
                            <div class="col-md-12">
                                <a href="iq_tests.php"><img src="image/iqiqiq.png" style=" margin-left: 35%; margin-top: 50px;  margin-bottom: 20px;"></a>
                            </div>
                            <div class="col-md-12">
                                <a href="global_games.php"><img src="image/globalo.png" style=" margin-left: 35%; margin-top: 50px;  margin-bottom: 20px;"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include("inc/footer.php");?>
    
    </body>

    </html>