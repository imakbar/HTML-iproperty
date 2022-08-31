<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Properties | iProperty</title>

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
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">My Properties</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Properties</li>
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
                            <a class="btn btn-white box-shadow-1 active box-shadow-4 hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="my-properties.php">
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

            <div class="bg-white m-bottom-40 box-shadow-1">
                <table class="table table-responsive">
                    <thead class="bg-dark text-white">
                        <tr class="valign-middle">
                            <th class="width-150 p-top-20 p-bottom-20" colspan="2">
                                <i class="fa fa-home"></i>
                                Property
                            </th>
                            <th class="p-top-20 p-bottom-20">
                                <i class="fa fa-calendar"></i>
                                Expiration Date
                            </th>
                            <th class="p-top-20 p-bottom-20">
                                <i class="fa fa-eye"></i>
                                Views
                            </th>
                            <th class="p-top-20 p-bottom-20">
                                <i class="fa fa-magic"></i>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="valign-middle">
                            <td class="width-150">
                                <a href="#">
                                    <img class="width-120" src="assets/images/property/property-1-150x130.jpg">
                                </a>
                            </td>
                            <td>
                                <h2 class="text-base text-bold-700 m-top-0">$250,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                <h5>
                                    <a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Small Apartment</a>
                                </h5>
                                <p class="m-bottom-0">253 Lake Washington, USA</p>
                            </td>
                            <td>29, Jan 2017</td>
                            <td><a href="#"><i class="fa fa-bar-chart"></i> 250</a></td>
                            <td>
                                <a class="btn btn-sm btn-primary text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 m-bottom-8 rounded-0" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <div class="clearfix"></div>
                                <a class="btn btn-sm btn-danger text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 rounded-0" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                        <tr class="valign-middle">
                            <td class="width-150">
                                <a href="#">
                                    <img class="width-120" src="assets/images/property/property-2-150x130.jpg">
                                </a>
                            </td>
                            <td>
                                <h2 class="text-base text-bold-700 m-top-0">$120,000</h2>
                                <h5>
                                    <a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Garaes Condo</a>
                                </h5>
                                <p class="m-bottom-0">154 Drive, New York</p>
                            </td>
                            <td>12, Feb 2017</td>
                            <td><a href="#"><i class="fa fa-bar-chart"></i> 180</a></td>
                            <td>
                                <a class="btn btn-sm btn-primary text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 m-bottom-8 rounded-0" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <div class="clearfix"></div>
                                <a class="btn btn-sm btn-danger text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 rounded-0" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                        <tr class="valign-middle">
                            <td class="width-150">
                                <a href="#">
                                    <img class="width-120" src="assets/images/property/property-3-150x130.jpg">
                                </a>
                            </td>
                            <td>
                                <h2 class="text-base text-bold-700 m-top-0">$145,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                <h5>
                                    <a class="text-bold-600 text-dark text-base-hover" href="#">Global Land House</a>
                                </h5>
                                <p class="m-bottom-0">110 Lake, United Kingdom</p>
                            </td>
                            <td>18, Feb 2017</td>
                            <td><a href="#"><i class="fa fa-bar-chart"></i> 120</a></td>
                            <td>
                                <a class="btn btn-sm btn-primary text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 m-bottom-8 rounded-0" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <div class="clearfix"></div>
                                <a class="btn btn-sm btn-danger text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 rounded-0" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                        <tr class="valign-middle">
                            <td class="width-150">
                                <a href="#">
                                    <img class="width-120" src="assets/images/property/property-4-150x130.jpg">
                                </a>
                            </td>
                            <td>
                                <h2 class="text-base text-bold-700 m-top-0">$220,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                <h5>
                                    <a class="text-bold-600 text-dark text-base-hover" href="#">Our Quality Rent House</a>
                                </h5>
                                <p class="m-bottom-0">221 Madison Seattle, USA</p>
                            </td>
                            <td>20, Mar 2017</td>
                            <td><a href="#"><i class="fa fa-bar-chart"></i> 320</a></td>
                            <td>
                                <a class="btn btn-sm btn-primary text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 m-bottom-8 rounded-0" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <div class="clearfix"></div>
                                <a class="btn btn-sm btn-danger text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 rounded-0" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                        <tr class="valign-middle">
                            <td class="width-150">
                                <a href="#">
                                    <img class="width-120" src="assets/images/property/property-5-150x130.jpg">
                                </a>
                            </td>
                            <td>
                                <h2 class="text-base text-bold-700 m-top-0">$750,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                <h5>
                                    <a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful House For Sale</a>
                                </h5>
                                <p class="m-bottom-0">200 Lake Drive, USA</p>
                            </td>
                            <td>25, Apr 2017</td>
                            <td><a href="#"><i class="fa fa-bar-chart"></i> 100</a></td>
                            <td>
                                <a class="btn btn-sm btn-primary text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 m-bottom-8 rounded-0" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <div class="clearfix"></div>
                                <a class="btn btn-sm btn-danger text-size-11 text-uppercase text-bold-700 p-top-5 p-bottom-5 p-left-10 p-right-10 rounded-0" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="row">
                
                <div class="col-md-12">
                    
                    <nav>
                        <ul class="pagination text-bold-600 text-uppercase text-size-12">
                            <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                        </ul>
                    </nav>

                </div>

            </div>
            <!-- /PAGINATION -->
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