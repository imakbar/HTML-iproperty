<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile | iProperty</title>

    <link rel="icon" href="assets/images/favicon.png" type="image/png">
<style type="text/css">
</style>
    <?php 
        include "header.php";
    ?>

    <!--
    #################################
        - Begin: PAGE HEADER -
    #################################
    -->
    <div class="page-header bg-base p-top-30 p-bottom-30">
        <div class="container">

            <div class="row d-flex align-items-center">

                <div class="col-md-8 text-center-sm">
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">My Profile</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>

    <!--
    #################################
        - Begin: PAGE CONTENT -
    #################################
    -->
    <div class="bg-light-3 p-top-80 p-bottom-80">
        <div class="container">

            <!-- DATA -->
            <div class="row m-bottom-30">

                <div class="col-lg-12 col-md-12">

                    <ul class="">
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="submit-property.php">
                                <i class="fa fa-mail-forward d-block m-bottom-10 text-size-25"></i>
                                Submit Property
                            </a>
                        </li>
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 active box-shadow-4 hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="my-profile.php">
                                <i class="fa fa-user d-block m-bottom-10 text-size-25"></i>
                                Profile
                            </a>
                        </li>
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="my-properties.php">
                                <i class="fa fa-building-o d-block m-bottom-10 text-size-25"></i>
                                Properties
                            </a>
                        </li>
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="my-bookmarks.php">
                                <i class="fa fa-star-o d-block m-bottom-10 text-size-25"></i>
                                Bookmarked
                            </a>
                        </li>
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="change-password.php">
                                <i class="fa fa-unlock-alt d-block m-bottom-10 text-size-25"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="pull-left">
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30" href="#">
                                <i class="fa fa-power-off d-block m-bottom-10 text-size-25"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="bg-white box-shadow-1 p-top-30 p-bottom-30 p-left-30 p-right-30 m-bottom-30">

                <form method="post">

                    <div class="row">

                            <div class="col-lg-3 col-md-3">

                                <a data-fancybox href="assets/images/agents/agent-1.jpg">
                                    <img alt="..." class="full-width" src="assets/images/agents/agent-1.jpg">
                                </a>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-base btn-block rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 m-bottom-10 p-top-12 p-bottom-12 p-left-20 p-right-20 m-top-20" data-toggle="modal" data-target="#changeImage"><i class="fa fa-image"></i> Change Image</button>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-9 col-md-9">
            
                                <h3 class="text-bold-700 m-bottom-10">My Profile</h3>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">First Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" name="first_name" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Last Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" name="last_name" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Phone #</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" name="phone" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Mobile #</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <input type="text" name="mobile" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="email" name="email" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">I am</label>
                                            <div class="input-group">
                                                <div class="m-top-10">
                                                <label class="custom-control custom-radio">
                                                    <input id="radio1" name="i_am" type="radio" class="custom-control-input" checked="">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Buying Agent</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="radio2" name="i_am" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Selling Agent</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="radio3" name="i_am" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Both</span>
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">About Me</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <textarea rows="8" name="about_me" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="About Me"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <h3 class="text-bold-700 m-top-60 m-bottom-10">My Social</h3>
                            
                                        <div class="hr dark text-left m-bottom-20">
                                            <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                            <div class="icons text-light">
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>
                                            </div>
                                            <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                                <input type="text" name="facebook" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://facebook.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <input type="text" name="twitter" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://twitter.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Google+</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                                <input type="text" name="google" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://plus.google.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Linkedin</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-linkedin"></i>
                                                </div>
                                                <input type="text" name="linkedin" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://linkedin.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-instagram"></i>
                                                </div>
                                                <input type="text" name="instatram" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://instagram.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-bold-700 text-uppercase text-size-13">Pinterest</label>
                                            <div class="input-group">
                                                <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                    <i class="fa fa-pinterest"></i>
                                                </div>
                                                <input type="text" name="pinterest" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://pinterest.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 m-top-20 m-bottom-15">
                                        <input type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" value="Save Changes">
                                    </div>

                                </div>

                            </div>

                    </div>

                </form>

            </div>
            <!-- /DATA -->

        </div>
    </div>
    <!-- End: PAGE CONTENT -
    ################################################################## -->

<!-- Modal -->
<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-base text-white">
                <h5 class="modal-title text-bold-700 text-uppercase text-size-18" id="exampleModalLabel">My Profile Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 p-top-15 p-bottom-15">
                    <div class="form-group">
                        <label class="text-bold-700 text-uppercase text-size-13">Select Image</label>
                        <input type="file" name="pinterest" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="http://pinterest.com">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light-3">
                <button type="button" class="btn btn-secondary rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20">Save changes</button>
            </div>
        </div>
    </div>
    </form>
</div>


    <?php 
        include "footer.php";
    ?>


    
    </body>
</html>