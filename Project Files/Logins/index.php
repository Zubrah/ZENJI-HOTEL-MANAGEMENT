
<?php
include("includes/db.php");
include("includes/signup.php");

?>
<!DOCTYPE html>
<html>

    <head>
        <link href="style.css" rel="stylesheet">

        <title> Login
        </title>


        <body>
        
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <form action="includes/login.php" method="POST">

                                <div class=" group ">
                                    <label for="user " class="label ">Username</label>
                                    <input id="user " type="text " class="Sign-in-Username">
                                    <label for="pass " class="label ">Password</label>
                                    <input type="password" class="Sign-in-Password" data-type="password ">
                                    <input id="check " type="checkbox " class="check " checked>
                                    <label for="check "><span class="icon "></span> Keep me Signed in</label>
                                    <button type="submit" class="sign-in-button">SIGN IN </button>
                                    <div class=" hr "></div>
                                    <div class="foot-lnk ">
                                        <a href="#forgot ">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="sign-up-htm ">
                            <form action="signup.php" method="POST">
                                <div class="group ">
                                    <label for="user " class="label ">Username</label>
                                    <input type="text " class="Sign-up-Username">
                                    <label for="pass " class="label ">Password</label>
                                    <input type="password" class="Sign-up-Password" data-type="password ">
                                    <label for="pass " class="label ">Repeat Password</label>
                                    <input type="password" class="Sign-up-RepeatPassword" data-type="password ">
                                    <label for="pass " class="label ">Email Address</label>
                                    <input type="text " class="Sign-up-Email Address">
                                    <label for= "submit" class= "label">.</label>
                                    <button type="submit " class=" sign-up-button ">SIGN UP</button>
                                </div>

                        </div>
                        <div class="hr "></div>
                        <div class="foot-lnk ">
                            <!-- <label for="tab-1 ">Already Member?</a> -->

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>


        </body>

    </head>

    </html>