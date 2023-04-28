<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Submit Property | iProperty</title>

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

                <div class="col-md-8 text-center-sm text-center-md">
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">Submit Property</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm text-center-md">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Submit Property</li>
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
                            <a class="btn btn-white box-shadow-1 active box-shadow-4 hover-1 rounded-0 p-top-30 p-bottom-30 p-left-30 p-right-30 m-right-4" href="submit-property.php">
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
                    
                    <h3 class="text-bold-700 m-bottom-10">Basic Information</h3>
                
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
                                <label class="text-bold-700 text-uppercase text-size-13">Property Title</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <input type="text" name="title" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Property Title">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Currency</label>
                                <div class="input-group">
                                    <select name="currency_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">USD</option>
                                        <option value="2">EUR</option>
                                        <option value="3">GBP</option>
                                        <option value="4">INR</option>
                                        <option value="5">AUD</option>
                                        <option value="6">CAD</option>
                                        <option value="7">SGD</option>
                                        <option value="8">CHF</option>
                                        <option value="9">MYR</option>
                                        <option value="10">JPY</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Price</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <input type="text" name="price" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Price">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Property Type</label>
                                <div class="input-group">
                                    <select name="property_type_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">House</option>
                                        <option value="2">Plots</option>
                                        <option value="3">Commercial</option>
                                        <option value="4">Appartments</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Property Purpose</label>
                                <div class="input-group">
                                    <select name="property_purpose_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Rental Period</label>
                                <div class="input-group">
                                    <select name="rental_period_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">Daily</option>
                                        <option value="3">Weekly</option>
                                        <option value="2">Monthly</option>
                                        <option value="4">Yearly</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">Details</h3>
                
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Bedrooms</label>
                                <div class="input-group">
                                    <select name="bedroom_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Beds</label>
                                <div class="input-group">
                                    <select name="bed_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Bathrooms</label>
                                <div class="input-group">
                                    <select name="bathroom_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" name="phone" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Phone">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Mobile</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="text" name="mobile" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Mobile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Home Area</label>
                                <div class="input-group">
                                    <input type="text" name="home_area" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14 text-right" placeholder="sqft">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Lot Area</label>
                                <div class="input-group">
                                    <input type="text" name="lot_area" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14 text-right" placeholder="sqft">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Year Built</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="year_built" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Year Built">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Status</label>
                                <div class="input-group">
                                    <select name="status_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                        <option>-- Select --</option>
                                        <option value="1">Available</option>
                                        <option value="2">Reserved</option>
                                        <option value="3">Sold</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">Description</h3>
                
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
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="description" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Description" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">AMENITIES</h3>
                
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

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Air conditioning</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Balcony</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bedding</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cable TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cofee pot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Computer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Dishwasher</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">DVD</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fan</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fridge</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Grill</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hairdryer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Heating</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hi-fi</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Internet</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Iron</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Juicer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Lift</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Microwave</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Gym</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fireplace</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hot Tub</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" name="amenities" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cleaning after exit</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">FACILITIES</h3>
                
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Shopping Mall</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="shopping_mall" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Shopping Mall">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Hospital</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="hospital" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Hospital">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">School</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="school" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="School">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Petrol Pump</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="petrol_pump" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Petrol Pump">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Airport</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="airport" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Airport">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Mosque</label>
                                <div class="row">
                                    <div class="col-8 input-group p-right-0">
                                        <input type="text" name="mosque" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Mosque">
                                    </div>
                                    <div class="col-4 input-group p-left-0">
                                        <select name="distance_place_id" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14">
                                            <option value="1">min</option>
                                            <option value="2">km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">ADDRESS</h3>
                
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Country</label>
                                <div class="input-group">
                                    <input type="text" name="country" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Country">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">State</label>
                                <div class="input-group">
                                    <input type="text" name="state" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="State">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">City</label>
                                <div class="input-group">
                                    <input type="text" name="city" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="City">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Neighborhood</label>
                                <div class="input-group">
                                    <input type="text" name="neighborhood" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Neighborhood">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Address</label>
                                <div class="input-group">
                                    <input type="text" name="address" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Address">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 m-top-10">
                            <div id="googlemapsMarkers" class="google-map mt-none mb-lg height-280"></div>
                        </div>
                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">VALUATION</h3>
                
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
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Crime</label>
                                <div class="input-group">
                                    <input type="text" name="crime" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Crime">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Traffic</label>
                                <div class="input-group">
                                    <input type="text" name="traffic" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Traffic">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Pollution</label>
                                <div class="input-group">
                                    <input type="text" name="pollution" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Pollution">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Education</label>
                                <div class="input-group">
                                    <input type="text" name="education" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Education">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">Health</label>
                                <div class="input-group">
                                    <input type="text" name="health" class="form-control form-control-lg rounded-0 bg-light-5 text-size-14" placeholder="Health">
                                    <div class="input-group-addon bg-light-7 border-1 border-light rounded-0 width-40 text-center">
                                        <i class="fa fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-bold-700 m-top-60 m-bottom-10">GALLERY</h3>
                
                    <div class="hr dark text-left m-bottom-10">
                        <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                        <div class="icons text-light">
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </div>
                        <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="avatar[]" class="fuploader form-control" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 m-top-20 m-bottom-15">
                            <input type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" value="Submit">
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