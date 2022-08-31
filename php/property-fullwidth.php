<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Property - Fullwidth | iProperty</title>

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
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">Property - Fullwidth</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Property - Fullwidth</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>

    <!-- End: PAGE HEADER -
    ################################################################## -->

    <!--
    #################################
        - Begin: PROPERTY -
    #################################
    -->
    <div class="bg-light-3 p-top-60 p-bottom-60">
        <div class="container">

            <div class="bg-white box-shadow-1 p-top-30 p-bottom-30 p-left-30 p-right-30 m-bottom-30">
                
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label class="text-bold-700 text-uppercase text-size-13">- Property Type -</label>
                            <select name="property_type_id" class="form-control rounded-0 bg-light-5">
                                <option>-- Property Type --</option>
                                <option value="1">House</option>
                                <option value="2">Plots</option>
                                <option value="3">Commercial</option>
                                <option value="4">Appartments</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label class="text-bold-700 text-uppercase text-size-13">- Property Purpose -</label>
                            <select name="property_purpose_id" class="form-control rounded-0 bg-light-5">
                                <option>-- Property Purpose --</option>
                                <option value="1">For Rent</option>
                                <option value="2">For Sale</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-bold-700 text-uppercase text-size-13">- Price -</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="price_from" class="form-control rounded-0 bg-light-5" placeholder="Price from">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="price_to" class="form-control rounded-0 bg-light-5" placeholder="Price to">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="collapse" id="advanced_search">

                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- Country -</label>
                                <select name="country_id" class="form-control rounded-0 bg-light-5">
                                    <option>-- Country --</option>
                                    <option value="1">Pakistan</option>
                                    <option value="2">USA</option>
                                    <option value="3">United Kingdom</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- City -</label>
                                <select name="city_id" class="form-control rounded-0 bg-light-5">
                                    <option>-- City --</option>
                                    <option value="1">Lahore</option>
                                    <option value="2">Faisalabad</option>
                                    <option value="3">Karachi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- Location -</label>
                                <input type="text" name="location" class="form-control rounded-0 bg-light-5" placeholder="Enter Location Here">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- Keyword -</label>
                                <input type="text" name="keyword" class="form-control rounded-0 bg-light-5" placeholder="Enter Keyword Here">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- Bedrooms -</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="bedroom_from_id" class="form-control rounded-0 bg-light-5">
                                            <option>-- From --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="bedroom_to_id" class="form-control rounded-0 bg-light-5">
                                            <option>-- To --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="text-bold-700 text-uppercase text-size-13">- Bathrooms -</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="bathroom_from_id" class="form-control rounded-0 bg-light-5">
                                            <option>-- From --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="bathroom_to_id" class="form-control rounded-0 bg-light-5">
                                            <option>-- To --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <h5 class="text-bold-700 text-uppercase m-top-10 m-bottom-20">Amenities</h5>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Air conditioning</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Balcony</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bedding</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cable TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cofee pot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Computer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Dishwasher</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">DVD</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fan</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fridge</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Grill</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hairdryer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Heating</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hi-fi</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Internet</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Iron</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Juicer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Lift</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Microwave</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Gym</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fireplace</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hot Tub</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cleaning after exit</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row m-top-10">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20"><i class="fa fa-search"></i> Search</button>
                        <a data-toggle="collapse" class="btn btn-default rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" href="#advanced_search"><i class="fa fa-cog"></i> Search Advance</a>
                    </div>
                </div>

            </div>

            <div class="bg-white box-shadow-1 p-top-6 p-bottom-6 p-left-15 p-right-15 m-bottom-20">

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-sort-amount-desc"></i> Sort by
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#newest">Newest</a>
                                    <a class="dropdown-item" href="#popular">Popular</a>
                                    <a class="dropdown-item" href="#pricehtl">Price (high to low)</a>
                                    <a class="dropdown-item" href="#pricelth">Price (low to high)</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-sort-amount-desc"></i> Sort order
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#asc">ASC</a>
                                    <a class="dropdown-item" href="#desc">DESC</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-1"></div>

                    <div class="col-lg-2 col-md-2 col-sm-4 text-right">

                        <ul class="nav justify-content-end text-size-18">
                            <li class="nav-item">
                                <a class="nav-link p-left-0 p-right-0" href="#"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-left-0 p-right-0 m-left-20 m-right-15" href="#"><i class="fa fa-th-list"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>
                
            </div>

            <div class="row">
                
                <div class="col-md-12 m-top-8 m-bottom-20">
                    
                    <h5>12 Properties Found</h5>

                </div>

            </div>
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-1.jpg" alt="Property 1">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$250,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                        <p>253 Lake Washington, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 5 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 36,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 day ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-2.jpg" alt="Property 2">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$120,000</h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                        <p>154 Drive, New York</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 2 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 45,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 6 days ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-3.jpg" alt="Property 3">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$145,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Global Land House</a></h5>
                                        <p>110 Lake, United Kingdom</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 6 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 65,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 3 weeks ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-4.jpg" alt="Property 4">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 8</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$220,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Our Quality Rent House</a></h5>
                                        <p>221 Madison Seattle, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 7 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 4 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 23,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 month ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-5.jpg" alt="Property 5">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 16</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$750,000</h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful House For Sale</a></h5>
                                        <p>200 Lake Drive, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 47,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 2 month ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-6.jpg" alt="Property 6">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 11</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$350,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Waterfront House</a></h5>
                                        <p>103 Occidental Washington USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 9 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 5 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 54,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 4 months ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-7.jpg" alt="Property 7">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$145,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Global Land House</a></h5>
                                        <p>110 Lake, United Kingdom</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 6 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 65,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 3 weeks ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-8.jpg" alt="Property 8">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 8</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$220,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Our Quality Rent House</a></h5>
                                        <p>221 Madison Seattle, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 7 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 4 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 23,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 month ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-9.jpg" alt="Property 9">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$250,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                        <p>253 Lake Washington, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 5 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 36,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 day ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-10.jpg" alt="Property 10">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 16</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$750,000</h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful House For Sale</a></h5>
                                        <p>200 Lake Drive, USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 47,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 2 month ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-11.jpg" alt="Property 11">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$120,000</h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                        <p>154 Drive, New York</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 2 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 45,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 6 days ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->
            
            <!-- PROPERTY -->
            <div class="row">

                <div class="col-md-12">

                    <div class="property bg-white box-shadow-1 box-shadow-3-hover m-bottom-30">
                        <div class="row">
                            <div class="col-md-4 match-height vcenter">
                                <div class="property-media overlay-wrapper">
                                    <img class="full-width" src="assets/images/property-fullwidth/property-12.jpg" alt="Property 12">
                                    <div class="media-data">
                                        <div class="position-bottom">
                                            <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                            <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                            <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 11</div>
                                        </div>
                                    </div>
                                    <div class="overlay bg-bg opacity-9"></div>
                                </div>
                            </div>
                            <div class="col-md-8 match-height vcenter">
                                <div class="property-section p-right-15 p-left-15 p-top-30-md p-bottom-25-md p-top-30-sm p-bottom-25-sm">
                                    <div class="m-bottom-20">
                                        <h2 class="text-base text-bold-700 m-top-15">$350,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                        <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Waterfront House</a></h5>
                                        <p>103 Occidental Washington USA</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce elementum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo vamus suscipit molestie vestibulum nulla vel pellentesque consequat ante nulla hendrerit arcu ac tincidunt mauris lacus sed leo.</p>
                                        <ul class="icon-list m-bottom-0">
                                            <li><i class="btn btn-base fa fa-bed"></i> 9 Beds</li>
                                            <li><i class="btn btn-base fa fa-tint"></i> 5 Baths</li>
                                            <li><i class="btn btn-base fa fa-expand"></i> 54,000 Sq Ft</li>
                                        </ul>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 4 months ago</li>
                                            <li><a href="#" class="text-base"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /PROPERTY -->

            <div class="row">
                
                <div class="col-md-12 m-top-30">
                    
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

        </div>
    </div>
    <!-- End: PROPERTY -
    ################################################################## -->


    <?php 
        include "footer.php";
    ?>


    
</body>
</html>