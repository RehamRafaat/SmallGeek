<?php 

include("inc/header.php");
$css = "profile.css";
?>
<div class="container-fluied">
    <div class="row">
        <audio id="nav_audio">
                <source src="pop.mp3"></source>
                <source src="pop.mp3"></source>
            </audio>
        <section style="height:750px; background-image: url(image/get3.jpeg); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <h1 class="hidden-xs" style="margin-left: 20px; font-size: 45px; margin-top: 110px;
                       margin-bottom: -150px; color:white;">Edit Login infos</h1>
                    <div class="hidden-xs">

                        <div class="form-group" style="margin-top: 200px;">
                            <label class="control-label col-sm-12" for="email" style="color: grey; font-size: 25px;">New Email:</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;">
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 200px;">
                            <label class="control-label col-sm-12" for="password" style="color: grey; font-size: 25px;">New Password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="password" style="color: darkturquoise; font-size: 18px;">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 200px;">
                            <label class="control-label col-sm-12" for="password" style="color: grey; font-size: 25px;">Confirm Password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="password" style="color: darkturquoise; font-size: 18px;">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 200px;">
                            <label class="control-label col-sm-12" for="password" style="color: grey; font-size: 25px;">Old Password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="password" style="color: darkturquoise; font-size: 18px;">
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: -350px; margin-left: 750px;">
                            <img src="image/giphy.gif" />
                        </div>
                        <button type="button" class="btn" style="margin-top: 50px; margin-left: 42.75%; width: 150px; height: 50px; font-size: 18px;">Submit</button>
                    </div>

                </div>
            </div>
            <div class="container hidden-lg hidden-md hidden-sm">
                <div class="row">
                    <h1 style="margin-left: 20px; font-size: 45px; margin-top: 200px;
                       margin-bottom: -150px; color:white;">Edit Login infos</h1>
                    <div class="form-group" style="margin-top: 250px;">
                        <label class="control-label col-xs-12" for="email" style="color: grey; font-size: 25px;">New Email:</label>
                        <div class="col-xs-10">
                            <input type="email" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label class="control-label col-xs-12" for="email" style="color: grey; font-size: 25px;">New Password:</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label class="control-label col-xs-12" for="email" style="color: grey; font-size: 25px;">Confirm Password:</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label class="control-label col-xs-12" for="email" style="color: grey; font-size: 25px;">Old Password:</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;">
                        </div>
                        <button type="button" class="btn" style="margin-top: 50px; margin-left: 42.75%; width: 150px; height: 50px; font-size: 18px;">Submit</button>
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