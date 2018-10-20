<?php 

session_start();

?>

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
    <link rel="stylesheet" href="Css/welcoming.css" />
    <link rel="stylesheet" href="Css/animate.min.css" />

    <!-- FONTS -->
    <link rel="stylesheet" href="assets/css/open-sans/open-sans.css" />
    <link rel="stylesheet" href="assets/css/montserrat/css/montserrat-webfont.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css" />

    <!--jQuiry-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="Js/global.js"></script>
    <style>
    </style>



</head>

<body style="background-image: url(image/get2.jpeg)">
    <?php include('wrong_password.php'); ?>

    <div class="container">
        <div class="row">
            <h1 class="About_Head_title">Hello Small Geeks !</h1>
            <p class="About_Head_title" style="color:gray; font-size: 23px; margin-top: 150px;">Come on write your email and password to begin your adventure for today</p>
            <div class="col-md-4 col-sm-12 "></div>
            <div class="col-md-4 col-sm-12 ">

                <form method="post" action="includes/Login_Inc.php">
                    <input name="mail" id="e_mail" style="margin-left: 22px; width: 310px; height: 45px; border-radius: 5px; margin-top: 48%; background-color: azure; border-color: turquoise; font-size: 20px; color:darkturquoise; padding-left: 10px;" placeholder="user123@gmail.com">
                    <input name="pass" id="back" style="margin-left: 22px; width: 310px; height: 45px; border-radius: 5px; margin-top: 10%; background-color: azure; border-color: turquoise; font-size: 20px; color:darkturquoise; padding-left: 10px;" type="password" placeholder="1256ssdc">
                    <div class=" col-md-12">
                        <input type="submit" class="btn" style="margin-top: 50px; margin-left: 25%; width: 150px; height: 50px; font-size: 18px;" value="Sign in" name="submit" onclick="on()">
                    </div>
                </form>

                <p class="About_Head_title" style="color:gray; font-size: 23px; margin-top: 150px;">If you haven't account on Small Geek please <a data-toggle="modal" data-target="#myModal" style="text-decoration: none;">Sign up</a></p>
            </div>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content" style="background-color:aliceblue;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: darkturquoise;">New Small Geek</h4>
                        </div>
                        <div class="modal-body">
                            <h2 style="color: grey;">Personal Information</h2>
                            <form class="form-horizontal" action="includes/Signup.Inc.php" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="name" style="color: grey;">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" style="color: darkturquoise; font-size: 18px; " placeholder="Enter only one name contains latin charachters only">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email" style="color: grey;">Phone:</label>
                                    <div class="col-sm-10">
                                        <input type="phone" class="form-control" id="phone" name="phone" style="color: darkturquoise; font-size: 18px;" placeholder="Enter numbers only">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email" style="color: grey;">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" style="color: darkturquoise; font-size: 18px;" placeholder="Enter Valid Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="password" style="color: grey;">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" style="color: darkturquoise; font-size: 18px;" placeholder="Enter Password contains latin charachters only">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="password" style="color: grey;">Photo:</label>
                                    <div class="col-sm-10">
                                    <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="gender" style="color: grey;">Gender:</label>
                                    <div class="col-sm-1">
                                        <h5 style="color: darkturquoise;"><input type="radio" class="form-control" id="gender" name="gender" style="display: inline-block ;color: darkturquoise;" value="2"> Male</h5>
                                    </div>
                                    <div class="col-sm-1">
                                        <h5 style="color: darkturquoise;"><input type="radio" class="form-control" id="gendr" name="gender" style="display: inline-block ;color: darkturquoise;" value="1"> Female</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="birthday" style="color: grey;">Birthday:</label>
                                    <div class="col-sm-1">
                                        <select name="Day" style="color: darkturquoise;">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
           </select>
                                    </div>
                                    <div class="col-sm-1">
                                        <select name="Month" style="color: darkturquoise;">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
           </select>
                                    </div>
                                    <div class="col-sm-1">
                                        <select name="Year" style="color: darkturquoise;">
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
           </select>

                                    </div>

                                    <div class="col-sm-1">
                                        <img src="image/default.gif" / style="width: 300px; height: 250px; margin-top: -150px;">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" onclick="validateForm" class="btn btn-default">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
    <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
        }
        
        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>

</body>

</html>