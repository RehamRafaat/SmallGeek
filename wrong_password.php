<link rel="stylesheet" href="Css/wrong_password.css" />
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="Css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php if (isset($_GET['error'])) { ?>
<embed src="sounds/wrong_password.mp3" autostart="true" loop="true" width="2" height="0">
</embed>
<bgsound src="sounds/wrong_password.mp3" loop="infinite">
    </noembed>
    <div id="overlay" onclick="off()">
        <div class="container">
            <div class="row">
                <div class="alert" style="margin-top:200px; margin-left:60px; border:solid; border-color:white; width: 1030px;">
                    <img src="image/a52.gif" / style="width:250px; height:200px; float:left;">
                    <div>
                        <div id="text"> Wrong Data ! </div>
                        <h3 class="wrong_message" style="float: right; margin-right:260px;">you should enter right
                            <?php echo $_GET['error']; ?> to enter website</h3>
                        <h3 class="wrong_message" style="float: right;margin-left:230px; line-height: 1.6; margin-top:-85px;">if this is your first time in small geek please sign up first from sign up then sign in</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php } ?>