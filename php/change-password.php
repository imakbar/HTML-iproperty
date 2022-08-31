<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Change Password | iProperty</title>

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
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">Change Password</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
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
                            <a class="btn btn-white box-shadow-1 box-shadow-4-hover hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="my-profile.php">
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
                            <a class="btn btn-white box-shadow-1 active box-shadow-4 hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="change-password.php">
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
                <div class="row">

                    <div class="col-lg-12 col-md-12">

                        <h3 class="text-bold-700 text-uppercase m-bottom-20">Change Password</h3>
            
                        <div class="hr dark text-left m-bottom-20">
                            <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                            <div class="icons text-light">
                                <i class="fa fa-circle-o"></i>
                                <i class="fa fa-circle-o"></i>
                                <i class="fa fa-circle-o"></i>
                            </div>
                            <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                        </div>
                        
                        <form method="post">
                            
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" name="confirm_password" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 m-top-20 m-bottom-15">
                                    <input type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" value="Save Changes">
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
            <!-- /DATA -->

        </div>
    </div>
    <!-- End: PAGE CONTENT -
    ################################################################## -->

<!-- Modal -->
<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <?php 
        include "footer.php";
    ?>


    
    </body>
</html>