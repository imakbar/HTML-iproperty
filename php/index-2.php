<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - 2 | iProperty</title>

    <link rel="icon" href="assets/images/favicon.png" type="image/png">
<style type="text/css">
</style>
    <?php 
        include "header.php";
    ?>

    <!--
    #################################
        - Begin: SLIDER -
    #################################
    -->
    <div class="bg-light-3 owl-carousel owl-theme owl-nav-wide" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'margin': 1, 'nav': true, 'dots': false, 'animateOut': 'fadeOut'}">
        <div class="bg-property-slider-1 bg-no-repeat bg-size-cover">
            <div class="property">
                <div class="property-media overlay-wrapper p-top-100 p-bottom-50">
                    <div class="container p-top-100 p-left-40 p-right-40">
                        <div class="badge badge-base text-white m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 text-size-14 m-bottom-20 box-shadow-2">Featured</div>
                        <div class="badge badge-success p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 text-size-14 m-bottom-20 box-shadow-2">For Rent</div>
                        <div class="clearfix"></div>
                        <h2 class="text-white text-bold-600 text-size-40 text-size-35-sm m-bottom-10">$250,000 <small class="text-size-18">Per Month</small></h2>
                        <h5><a class="text-white text-bold-500 text-size-25 text-size-22-sm text-white text-white-hover m-bottom-10" href="#">Beautiful Small Apartment</a></h5>
                        <p class="text-white">253 Lake Washington, USA</p>
                    </div>
                    <div class="overlay bg-base-gradient opacity-8"></div>
                </div>
            </div>
        </div>
        <div class="bg-property-slider-2 bg-no-repeat bg-size-cover">
            <div class="property">
                <div class="property-media overlay-wrapper p-top-100 p-bottom-50">
                    <div class="container p-top-100 p-left-40 p-right-40">
                        <div class="badge badge-success p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 text-size-14 m-bottom-20 box-shadow-2">For Sale</div>
                        <div class="clearfix"></div>
                        <h2 class="text-white text-bold-600 text-size-40 text-size-35-sm m-bottom-10">$120,000</h2>
                        <h5><a class="text-white text-bold-500 text-size-25 text-size-22-sm text-white text-white-hover m-bottom-10" href="#">Beautiful Garaes Condo</a></h5>
                        <p class="text-white">154 Drive, New York</p>
                    </div>
                    <div class="overlay bg-base-gradient opacity-8"></div>
                </div>
            </div>
        </div>
        <div class="bg-property-slider-3 bg-no-repeat bg-size-cover">
            <div class="property">
                <div class="property-media overlay-wrapper p-top-100 p-bottom-50">
                    <div class="container p-top-100 p-left-40 p-right-40">
                        <div class="badge badge-base text-white m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 text-size-14 m-bottom-20 box-shadow-2">Featured</div>
                        <div class="badge badge-success p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 text-size-14 m-bottom-20 box-shadow-2">For Rent</div>
                        <div class="clearfix"></div>
                        <h2 class="text-white text-bold-600 text-size-40 text-size-35-sm m-bottom-10">$145,000 <small class="text-size-18">Per Month</small></h2>
                        <h5><a class="text-white text-bold-500 text-size-25 text-size-22-sm text-white text-white-hover m-bottom-10" href="#">Global Land House</a></h5>
                        <p class="text-white">110 Lake, United Kingdom</p>
                    </div>
                    <div class="overlay bg-base-gradient opacity-8"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: SLIDER -
    ################################################################## -->

    <!--
    #################################
        - Begin: SEARCH -
    #################################
    -->
    <div class="bg-white p-top-60">
        <div class="container">

        	<div class="bg-light-3 box-shadow-1 p-top-30 p-bottom-30 p-left-30 p-right-30  border-1 border-solid border-light">
                
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
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Air conditioning</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Balcony</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bedding</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cable TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cofee pot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Computer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cot</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Dishwasher</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">DVD</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fan</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fridge</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Grill</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hairdryer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Heating</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hi-fi</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Internet</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Iron</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Juicer</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Lift</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Microwave</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Gym</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Fireplace</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Hot Tub</span>
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
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
                        <a data-bs-toggle="collapse" class="btn btn-default rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20" href="#advanced_search"><i class="fa fa-cog"></i> Search Advance</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End: SEARCH -
    ################################################################## -->

    <!--
    #################################
        - Begin: PROPERTY -
    #################################
    -->
    <div class="bg-white p-top-60 p-bottom-60">
        <div class="container">

            <h2 class="text-bold-700 m-top-30 m-bottom-10">Popular Properties</h2>

            <p class="text-size-18 m-bottom-40">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut</p>

            <div class="clearfix">

                <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 0, 'loop': false, 'nav': true, 'dots': false}">

                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-1.jpg" alt="Property 1">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <p class="text-white m-bottom-5">Per Month</p>
                                        <h2 class="text-white m-bottom-15 text-bold-700">$250,000 </h2>
                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">Featured</div>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Rent</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Beautiful Small Apartment</a></h4>
                                    <p>253 Lake Washington, USA</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 5 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 3 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 36,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->
                    
                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-2.jpg" alt="Property 2">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <h2 class="text-white m-bottom-15 text-bold-700">$120,000</h2>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Sale</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Beautiful Garaes Condo</a></h4>
                                    <p>154 Drive, New York</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 4 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 2 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 45,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->
                    
                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-3.jpg" alt="Property 3">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <p class="text-white m-bottom-5">Per Month</p>
                                        <h2 class="text-white m-bottom-15 text-bold-700">$145,000 </h2>
                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">Featured</div>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Rent</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Global Land House</a></h4>
                                    <p>110 Lake, United Kingdom</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 6 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 3 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 65,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->
                    
                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-4.jpg" alt="Property 4">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <p class="text-white m-bottom-5">Per Month</p>
                                        <h2 class="text-white m-bottom-15 text-bold-700">$220,000 </h2>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Rent</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 8</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Our Quality Rent House</a></h4>
                                    <p>221 Madison Seattle, USA</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 7 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 4 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 23,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->
                    
                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-5.jpg" alt="Property 5">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <h2 class="text-white m-bottom-15 text-bold-700">$750,000</h2>
                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">Featured</div>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Sale</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 16</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Beautiful House For Sale</a></h4>
                                    <p>200 Lake Drive, USA</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 4 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 3 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 47,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->
                    
                    <!-- PROPERTY -->
                    <div>
                
                        <div class="property bg-white box-shadow-1 box-shadow-3-hover">
                            <div class="property-media overlay-wrapper">
                                <img class="full-width" src="assets/images/property/property-6.jpg" alt="Property 6">
                                <div class="media-data">
                                    <div class="position-top">
                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                    </div>
                                    <div class="position-bottom">
                                        <p class="text-white m-bottom-5">Per Month</p>
                                        <h2 class="text-white m-bottom-15 text-bold-700">$350,000</h2>
                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">Featured</div>
                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 box-shadow-2">For Rent</div>
                                        <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 11</div>
                                    </div>
                                </div>
                                <div class="overlay bg-base-gradient opacity-8"></div>
                            </div>
                            <div class="property-section p-left-15 p-right-15 border-5 border-solid border-base border-right-0 border-left-0 border-top-0">
                                <div class="m-top-20 m-bottom-20">
                                    <h4><a class="text-bold-600 text-base text-base-dark-hover" href="#">Beautiful Waterfront House</a></h4>
                                    <p>103 Occidental Washington USA</p>
                                    <ul class="icon-list list-inline m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-bed"></i> 9 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-tint"></i> 5 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-base box-shadow-1 fa fa-expand"></i> 54,000 Sq Ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- /PROPERTY -->

                </div>

            </div>
            
        </div>
    </div>
    <!-- End: PROPERTY -
    ################################################################## -->

    <!--
    #################################
        - Begin: NEIGHBORHOODS -
    #################################
    -->
    <div class="container">

        <h2 class="text-bold-700 m-top-10 m-bottom-10">Neighborhood</h2>

        <p class="text-size-18 m-bottom-40">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut</p>

        <div class="clearfix m-bottom-100">
            <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 0, 'loop': false, 'nav': true, 'dots': false}">

                <!-- NEIGHBORHOOD -->
                <div>

                    <div class="vcenter match-height min-height-400 text-center overlay-wrapper">
                    <a class="text-white" href="#">

                        <div class="position-relative z-index-20 p-30">
                            <h3>New York</h3>
                            <h6>30 Properties</h6>
                        </div>
                        <div class="overlay bg-base-gradient opacity-8"></div>
                        <img class="full-width position-absolute-top position-absolute-left full-height z-index-1" src="assets/images/neighborhood/neighborhood-1.jpg" alt="neighborhood 1">

                    </a>
                    </div>

                </div>
                <!-- /NEIGHBORHOOD -->

                <!-- NEIGHBORHOOD -->
                <div>

                    <div class="vcenter match-height min-height-400 text-center overlay-wrapper">
                    <a class="text-white" href="#">

                        <div class="position-relative z-index-20 p-30">
                            <h3>Los Angeles</h3>
                            <h6>20 Properties</h6>
                        </div>
                        <div class="overlay bg-base-gradient opacity-8"></div>
                        <img class="full-width position-absolute-top position-absolute-left full-height z-index-1" src="assets/images/neighborhood/neighborhood-2.jpg" alt="neighborhood 1">

                    </a>
                    </div>

                </div>
                <!-- /NEIGHBORHOOD -->

                <!-- NEIGHBORHOOD -->
                <div>

                    <div class="vcenter match-height min-height-400 text-center overlay-wrapper">
                    <a class="text-white" href="#">

                        <div class="position-relative z-index-20 p-30">
                            <h3>Chicago</h3>
                            <h6>12 Properties</h6>
                        </div>
                        <div class="overlay bg-base-gradient opacity-8"></div>
                        <img class="full-width position-absolute-top position-absolute-left full-height z-index-1" src="assets/images/neighborhood/neighborhood-3.jpg" alt="neighborhood 1">

                    </a>
                    </div>

                </div>
                <!-- /NEIGHBORHOOD -->

                <!-- NEIGHBORHOOD -->
                <div>

                    <div class="vcenter match-height min-height-400 text-center overlay-wrapper">
                    <a class="text-white" href="#">

                        <div class="position-relative z-index-20 p-30">
                            <h3>Houston</h3>
                            <h6>22 Properties</h6>
                        </div>
                        <div class="overlay bg-base-gradient opacity-8"></div>
                        <img class="full-width position-absolute-top position-absolute-left full-height z-index-1" src="assets/images/neighborhood/neighborhood-4.jpg" alt="neighborhood 1">

                    </a>
                    </div>

                </div>
                <!-- /NEIGHBORHOOD -->

                <!-- NEIGHBORHOOD -->
                <div>

                    <div class="vcenter match-height min-height-400 text-center overlay-wrapper">
                    <a class="text-white" href="#">

                        <div class="position-relative z-index-20 p-30">
                            <h3>Detroit</h3>
                            <h6>18 Properties</h6>
                        </div>
                        <div class="overlay bg-base-gradient opacity-8"></div>
                        <img class="full-width position-absolute-top position-absolute-left full-height z-index-1" src="assets/images/neighborhood/neighborhood-5.jpg" alt="neighborhood 1">

                    </a>
                    </div>

                </div>
                <!-- /NEIGHBORHOOD -->

            </div>
        </div>
        
    </div>
    <!-- End: NEIGHBORHOODS -
    ################################################################## -->

    <!--
    #################################
        - Begin: CLIENTS -
    #################################
    -->
    <div class="container">

        <h2 class="text-bold-700 m-bottom-10 text-center">Clients We’ve Worked With</h2>

        <p class="text-size-18 text-center m-bottom-40">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut</p>

        <div class="clearfix m-bottom-80">
            <div class="owl-carousel owl-theme owl-nav-left" data-plugin-options="{'responsive': {'0': {'items': 2}, '479': {'items': 3}, '768': {'items': 4}, '979': {'items': 5}, '1199': {'items': 6}}, 'margin': 30, 'loop': false, 'nav': false, 'dots': true}">
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-1.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-2.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-3.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-4.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-5.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-6.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-7.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-8.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-9.png">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img alt="client" src="assets/images/clients/logo-10.png">
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- End: CLIENTS -
    ################################################################## -->

    <!--
    #################################
        - Begin: TESTIMONIALS -
    #################################
    -->
    <div class="bg-light-3 p-top-60 p-bottom-60">
        <div class="container">

            <h2 class="text-bold-700 m-top-30 m-bottom-10">What Our Clients Say</h2>

            <p class="text-size-18 m-bottom-40">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut</p>

            <div class="row">

                <!-- TESTIMONIAL -->
                <div class="col-md-4">
                    
                    <div class="testimonial m-bottom-40">
                        
                        <div class="testimonial-text bg-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-light text-size-80 opacity-5"></i>
                        </div>

                        <div class="testimonial-author bg-white border-1 border-solid border-light p-top-10 p-bottom-10 p-left-10 p-right-25 m-left-25 box-shadow-2 rounded-100">
                            <img class="max-width-60 rounded-100" src="assets/images/testimonials/author-1.jpg">
                            <div class="author-name text-bold-600">
                                David Smith
                                <span class="text-size-12 text-bold-400 text-base">Sale House</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /TESTIMONIAL -->

                <!-- TESTIMONIAL -->
                <div class="col-md-4">
                    
                    <div class="testimonial m-bottom-40">
                        
                        <div class="testimonial-text bg-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-light text-size-80 opacity-5"></i>
                        </div>

                        <div class="testimonial-author bg-white border-1 border-solid border-light p-top-10 p-bottom-10 p-left-10 p-right-25 m-left-25 box-shadow-2 rounded-100">
                            <img class="max-width-60 rounded-100" src="assets/images/testimonials/author-2.jpg">
                            <div class="author-name text-bold-600">
                                Britney Smith
                                <span class="text-size-12 text-bold-400 text-base">Bought House</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /TESTIMONIAL -->

                <!-- TESTIMONIAL -->
                <div class="col-md-4">
                    
                    <div class="testimonial m-bottom-40">
                        
                        <div class="testimonial-text bg-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-light text-size-80 opacity-5"></i>
                        </div>

                        <div class="testimonial-author bg-white border-1 border-solid border-light p-top-10 p-bottom-10 p-left-10 p-right-25 m-left-25 box-shadow-2 rounded-100">
                            <img class="max-width-60 rounded-100" src="assets/images/testimonials/author-3.jpg">
                            <div class="author-name text-bold-600">
                                Alex Brain
                                <span class="text-size-12 text-bold-400 text-base">Rent House</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /TESTIMONIAL -->

            </div>

        </div>
    </div>
    <!-- End: TESTIMONIALS -
    ################################################################## -->


    <?php 
        include "footer.php";
    ?>


    
</body>
</html>