<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | iProperty</title>

    <link rel="icon" href="assets/images/favicon.png" type="image/png">
<style type="text/css">
</style>
    <?php 
        include "header.php";
    ?>

    <!--
    #################################
        - Begin: PAGE CONTENT -
    #################################
    -->
    <div class="bg-light-3 p-top-80 p-bottom-80">
        <div class="container">

            <!-- LOGIN -->
            <div class="row">

                <div class="col-lg-4 col-md-3"></div>
                <div class="col-lg-4 col-md-6">

                    <div class="row">

                        <div class="col-md-12">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="btn btn-white text-bold-600 text-spacing-5 text-uppercase text-size-15 m-bottom-10 rounded-0 active box-shadow-3 p-top-12 p-bottom-12 p-left-20 p-right-20" href="login.php">Login</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-white text-bold-600 text-spacing-5 text-uppercase text-size-15 m-bottom-10 rounded-0 box-shadow-1 p-top-12 p-bottom-12 p-left-20 p-right-20" href="register.php">Register</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-white text-bold-600 text-spacing-5 text-uppercase text-size-15 m-bottom-10 rounded-0 box-shadow-1 p-top-12 p-bottom-12 p-left-20 p-right-20" href="lost-password.php"><i class="fa fa-lock"></i></a>
                                </li>
                            </ul>

                            <div class="tab-pane in active bg-white p-top-30 p-bottom-30 p-left-30 p-right-30 box-shadow-1">
                                <h3 class="text-bold-700 text-uppercase m-bottom-20">Login</h3>
                                <form>
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row m-top-30 m-bottom-20">
                                        <div class="col-md-6">
                                            <label class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Remember</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a class="text-base text-base-white-hover" href="lost-password.php">Lost Password?</a>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 m-bottom-10 p-top-12 p-bottom-12 p-left-20 p-right-20" value="Login">
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-3"></div>

            </div>
            <!-- /LOGIN -->

        </div>
    </div>
    <!-- End: PAGE CONTENT -
    ################################################################## -->


    <?php 
        include "footer.php";
    ?>


    
    </body>
</html>