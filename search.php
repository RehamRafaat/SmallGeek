<?php

$css = "profile.css" ;
include("inc/header.php");
?>
    <div class="container-fluied">
        <div class="row">
            <audio id="nav_audio">
                <source src="pop.mp3"></source>
                <source src="pop.mp3"></source>
            </audio>
            <section style="height:750px; background-image: url(image/get5.jpeg); background-size: contain;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:200px; margin-left:120px;">
                        <div class="chip">
                            <img src="image/YoghurtKids-vanilla.jpg" class="find_person"alt="Person">
                             <h3 style=" color: darkturquoise; margin-top:30px;margin-left:50px;">John Doe</h3>
                        </div>
          
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:200px; margin-left:80px;">
                        <div class="chip">
                            <img src="image/YoghurtKids-vanilla.jpg" class="find_person"alt="Person">
                             <h3 style=" color: darkturquoise; margin-top:30px;margin-left:50px;">John Doe</h3>
                        </div>
          
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:200px; margin-left:80px;">
                        <div class="chip">
                            <img src="image/YoghurtKids-vanilla.jpg" class="find_person"alt="Person">
                             <h3 style=" color: darkturquoise; margin-top:30px;margin-left:50px;">John Doe</h3>
                        </div>
          
                        </div>

                    </div>

                </div>
        </div>


    </div>


    </section>
    <?php include("inc/footer.php")?>

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