<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - 3 | iProperty</title>

    <link rel="icon" href="assets/images/favicon.png" type="image/png">
<style type="text/css">
</style>
    <?php 
        include "header.php";
    ?>

    <!--
    #################################
        - Begin: SEARCH -
    #################################
    -->
    <div class="parallax overlay-wrapper p-top-100 p-bottom-100" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/images/bg/bg-1.jpg">
        <div class="container">

            <div class="row d-flex align-items-center ">

                <div class="col-md-12">
                    
                    <!-- SEARCH -->
                    <div class="bg-white box-shadow-1 p-top-30 p-bottom-30 p-left-30 p-right-30 border-5 border-solid border-base border-top-0 border-left-0 border-right-0">
                        
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

                        </div>

                        <div class="row m-top-10">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-top-12 p-bottom-12 p-left-20 p-right-20"><i class="fa fa-search"></i> Search</button>
                            </div>
                        </div>

                    </div>
                    <!-- /SEARCH -->

                </div>

            </div>

        </div>
        <div class="overlay bg-dark-2"></div>
    </div>
    <!-- End: SEARCH -
    ################################################################## -->

    <!--
    #################################
        - Begin: PROPERTY -
    #################################
    -->
    <div class="p-top-60">
        <div class="container">

            <h2 class="text-bold-700 m-top-30 m-bottom-40">Popular Properties</h2>

            <div class="row">

                <!-- PROPERTY -->
                <div class="col-lg-4 col-md-6">
            
                    <div class="property front-back bg-white m-bottom-30 box-shadow-2 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-1.jpg" alt="Property 1">
                            <div class="media-data back">
                                <div class="position-top">
                                    <h5 class="m-top-15 m-bottom-15"><a class="text-bold-600 text-white text-base-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                    <p class="text-white m-bottom-10">253 Lake Washington, USA</p>
                                    <ul class="icon-list list-inline text-white m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-bed"></i> 5 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-tint"></i> 3 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-expand"></i> 36,000 Sq Ft</li>
                                    </ul>
                                </div>
                                <div class="position-bottom">
                                    <div class="text-white text-size-24 pull-left"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                </div>
                            </div>
                            <div class="media-data front">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$250,000 </h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                </div>
                            </div>
                            <div class="overlay bg-base-gradient opacity-6"></div>
                        </div>
                    </div>
            
                </div>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <div class="col-lg-4 col-md-6">
            
                    <div class="property front-back bg-white m-bottom-30 box-shadow-2 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-2.jpg" alt="Property 2">
                            <div class="media-data back">
                                <div class="position-top">
                                    <h5 class="m-top-15 m-bottom-15"><a class="text-bold-600 text-white text-base-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                    <p class="text-white m-bottom-10">154 Drive, New York</p>
                                    <ul class="icon-list list-inline text-white m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-bed"></i> 4 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-tint"></i> 2 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-expand"></i> 45,000 Sq Ft</li>
                                    </ul>
                                </div>
                                <div class="position-bottom">
                                    <div class="text-white text-size-24 pull-left"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                </div>
                            </div>
                            <div class="media-data front">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <h2 class="text-white m-bottom-15 text-bold-700">$120,000</h2>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                </div>
                            </div>
                            <div class="overlay bg-base-gradient opacity-6"></div>
                        </div>
                    </div>
            
                </div>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <div class="col-lg-4 col-md-6">
            
                    <div class="property front-back bg-white m-bottom-30 box-shadow-2 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-3.jpg" alt="Property 3">
                            <div class="media-data back">
                                <div class="position-top">
                                    <h5 class="m-top-15 m-bottom-15"><a class="text-bold-600 text-white text-base-base-hover" href="#">Global Land House</a></h5>
                                    <p class="text-white m-bottom-10">110 Lake, United Kingdom</p>
                                    <ul class="icon-list list-inline text-white m-bottom-0">
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-bed"></i> 6 Beds</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-tint"></i> 3 Baths</li>
                                        <li class="list-inline-item"><i class="btn btn-white rounded-0 box-shadow-1 fa fa-expand"></i> 65,000 Sq Ft</li>
                                    </ul>
                                </div>
                                <div class="position-bottom">
                                    <div class="text-white text-size-24 pull-left"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                </div>
                            </div>
                            <div class="media-data front">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$145,000 </h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                    <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                </div>
                            </div>
                            <div class="overlay bg-base-gradient opacity-6"></div>
                        </div>
                    </div>
            
                </div>
                <!-- /PROPERTY -->

            </div>
            
        </div>
    </div>
    <!-- End: PROPERTY -
    ################################################################## -->

    <!--
    #################################
        - Begin: SERVICE -
    #################################
    -->
    <div class="bg-white-3 p-top-90 p-bottom-30">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 m-top-40 m-bottom-40">

                    <div class="service bg-light-3 box-shadow-1 box-shadow-2-hover border-5 border-solid border-base border-top-0 border-left-0 border-right-0">
                        <div class="media">
                            <i class="fa fa-building-o bg-base-gradient text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 border-1 border-solid border-light p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Apartments</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 m-top-40 m-bottom-40">

                    <div class="service bg-light-3 box-shadow-1 box-shadow-2-hover border-5 border-solid border-base border-top-0 border-left-0 border-right-0">
                        <div class="media">
                            <i class="fa fa-shield bg-base-gradient text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 border-1 border-solid border-light p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Commercial</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 m-top-40 m-bottom-40">

                    <div class="service bg-light-3 box-shadow-1 box-shadow-2-hover border-5 border-solid border-base border-top-0 border-left-0 border-right-0">
                        <div class="media">
                            <i class="fa fa-bullhorn bg-base-gradient text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 border-1 border-solid border-light p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Houses</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- End: SERVICE -
    ################################################################## -->

    <!--
    #################################
        - Begin: PROPERTY -
    #################################
    -->
    <div class="container">

        <h2 class="text-bold-700 m-top-30 m-bottom-40">Newly Added</h2>

        <div class="row">

            <ul class="clearfix full-width m-bottom-40" data-plugin-masonry>

                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-1.jpg" alt="Property 1">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$250,000 </h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
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
            
                </li>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-2.jpg" alt="Property 2">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <h2 class="text-white m-bottom-15 text-bold-700">$120,000</h2>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
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
            
                </li>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-3.jpg" alt="Property 3">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$145,000 </h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
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
            
                </li>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-4.jpg" alt="Property 4">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$220,000 </h2>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
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
            
                </li>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-5.jpg" alt="Property 5">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <h2 class="text-white m-bottom-15 text-bold-700">$750,000</h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
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
            
                </li>
                <!-- /PROPERTY -->
                
                <!-- PROPERTY -->
                <li class="col-lg-4 col-md-6">
            
                    <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover border-1 border-solid border-light border-top-0 border-bottom-0">
                        <div class="property-media overlay-wrapper">
                            <img class="full-width" src="assets/images/property/property-6.jpg" alt="Property 6">
                            <div class="media-data">
                                <div class="position-top">
                                    <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <div class="position-bottom">
                                    <p class="text-white m-bottom-5">Per Month</p>
                                    <h2 class="text-white m-bottom-15 text-bold-700">$350,000</h2>
                                    <div class="badge badge-dark pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                    <div class="badge badge-white text-base pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
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
            
                </li>
                <!-- /PROPERTY -->

            </ul>

        </div>
        
    </div>
    <!-- End: PROPERTY -
    ################################################################## -->

    <!--
    #################################
        - Begin: AGENCIES -
    #################################
    -->
    <div class="bg-white">
        <div class="container">

            <h2 class="text-bold-700 m-top-30 m-bottom-40">Top Agencies</h2>

            <div class="clearfix p-bottom-20">
                <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 30, 'loop': false, 'nav': true, 'dots': false}">

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-1.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-2.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-3.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-4.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-5.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                    <!-- AGENCY -->
                    <div>
                        <div class="agency bg-white box-shadow-1 box-shadow-3-hover p-top-30 p-left-30 p-right-30 border-1 border-solid border-light m-bottom-30">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 p-bottom-15">
                                    <div class="agency-media position-relative">
                                        <a class="d-block" href="#">
                                            <img class="full-width" src="assets/images/clients/logo-6.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-bottom-15">
                                    <div class="agency-section position-relative">
                                        <div class="agency-data m-top-0 m-bottom-20">
                                            <ul>
                                                <li>
                                                    <div class="badge badge-base text-white m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Properties
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">22</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-success m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Featured
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">10</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="badge badge-warning m-right-20 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0 m-bottom-25">
                                                        Agents
                                                        <span class="badge badge-white box-shadow-3 text-dark border-1 border-light">8</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /AGENCY -->

                </div>

            </div>

        </div>
    </div>
    <!-- End: AGENCIES -
    ################################################################## -->

    <!--
    #################################
        - Begin: NEIGHBORHOODS -
    #################################
    -->
    <div class="bg-white">
        <div class="container">

            <h2 class="text-bold-700 m-top-30 m-bottom-40">Neighborhood</h2>

            <div class="clearfix m-bottom-70">
                <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 30, 'loop': false, 'nav': true, 'dots': false}">

                    <!-- NEIGHBORHOOD -->
                    <div>

                        <div class="vcenter match-height min-height-400 text-center overlay-wrapper border-5 border-solid border-base border-top-0 border-left-0 border-right-0 m-bottom-30">
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

                        <div class="vcenter match-height min-height-400 text-center overlay-wrapper border-5 border-solid border-base border-top-0 border-left-0 border-right-0 m-bottom-30">
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

                        <div class="vcenter match-height min-height-400 text-center overlay-wrapper border-5 border-solid border-base border-top-0 border-left-0 border-right-0 m-bottom-30">
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

                        <div class="vcenter match-height min-height-400 text-center overlay-wrapper border-5 border-solid border-base border-top-0 border-left-0 border-right-0 m-bottom-30">
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

                        <div class="vcenter match-height min-height-400 text-center overlay-wrapper border-5 border-solid border-base border-top-0 border-left-0 border-right-0 m-bottom-30">
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
            <div class="owl-carousel owl-theme owl-nav-right" data-plugin-options="{'responsive': {'0': {'items': 2}, '479': {'items': 3}, '768': {'items': 4}, '979': {'items': 5}, '1199': {'items': 6}}, 'margin': 30, 'loop': false, 'nav': false, 'dots': true}">
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
                        
                        <div class="testimonial-text bg-base text-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-base-dark text-size-80 opacity-5"></i>
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
                        
                        <div class="testimonial-text bg-base text-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-base-dark text-size-80 opacity-5"></i>
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
                        
                        <div class="testimonial-text bg-base text-white p-top-30 p-bottom-65 p-left-30 p-right-30 box-shadow-1 box-shadow-2-hover text-size-16">
                            Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus
                            <i class="fa fa-quote-left text-base-dark text-size-80 opacity-5"></i>
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