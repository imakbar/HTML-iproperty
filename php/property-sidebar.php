<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Property Sidebar | iProperty</title>

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
                    <h3 class="text-white text-uppercase text-bold-700 m-bottom-0">Property Sidebar</h3>
                </div>

                <div class="col-md-4 text-right text-center-sm">
                    <ol class="breadcrumb bg-white rounded-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Property Sidebar</li>
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

            <div class="row">

                <!-- CONTENT -->
                <div class="col-lg-8 col-md-12">

                    <!-- SORT-BY -->
                    <div class="bg-white box-shadow-1 p-top-6 p-bottom-6 p-left-15 p-right-15 m-bottom-20">
                        <div class="row">

                            <div class="col-lg-9 col-md-9 col-sm-8">
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

                            <div class="col-lg-3 col-md-3 col-sm-4 text-right">

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
                    <!-- /SORT-BY -->

                    <div class="row">
                        
                        <div class="col-md-12 m-top-8 m-bottom-20">
                            
                            <h5>12 Properties Found</h5>

                        </div>

                    </div>

                    <!-- PROPERTIES -->
                    <div class="row">
                
                        <ul class="clearfix full-width" data-plugin-masonry>
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-1.jpg" alt="Property 1">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$250,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                            <p>253 Lake Washington, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 5 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 36,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 day ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-2.jpg" alt="Property 2">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$120,000</h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                            <p>154 Drive, New York</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 2 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 45,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 6 days ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-3.jpg" alt="Property 3">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$145,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Global Land House</a></h5>
                                            <p>110 Lake, United Kingdom</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 6 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 65,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 3 weeks ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-4.jpg" alt="Property 4">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 8</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$220,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Our Quality Rent House</a></h5>
                                            <p>221 Madison Seattle, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 7 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 4 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 23,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 month ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-5.jpg" alt="Property 5">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 16</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$750,000</h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful House For Sale</a></h5>
                                            <p>200 Lake Drive, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 47,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 2 month ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-6.jpg" alt="Property 6">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 11</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$350,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Waterfront House</a></h5>
                                            <p>103 Occidental Washington USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 9 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 5 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 54,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 4 months ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-7.jpg" alt="Property 7">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 14</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$145,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Global Land House</a></h5>
                                            <p>110 Lake, United Kingdom</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 6 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 65,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 3 weeks ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-8.jpg" alt="Property 8">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 8</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$220,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Our Quality Rent House</a></h5>
                                            <p>221 Madison Seattle, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 7 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 4 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 23,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 month ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-9.jpg" alt="Property 9">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 12</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$250,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                            <p>253 Lake Washington, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 5 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 36,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 1 day ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-10.jpg" alt="Property 10">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 16</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$750,000</h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful House For Sale</a></h5>
                                            <p>200 Lake Drive, USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 3 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 47,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 2 month ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart-o"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-11.jpg" alt="Property 11">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 6</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$120,000</h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                            <p>154 Drive, New York</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 4 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 2 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 45,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 6 days ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                            
                            <!-- PROPERTY -->
                            <li class="col-lg-6 col-md-6">
                        
                                <div class="property bg-white m-bottom-30 box-shadow-1 box-shadow-3-hover">
                                    <div class="property-media overlay-wrapper">
                                        <img class="full-width" src="assets/images/property/property-12.jpg" alt="Property 12">
                                        <div class="media-data">
                                            <div class="position-bottom">
                                                <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                <div class="text-white text-size-18 pull-right"><i class="fa fa-camera"></i> 11</div>
                                            </div>
                                        </div>
                                        <div class="overlay bg-bg opacity-9"></div>
                                    </div>
                                    <div class="property-section p-left-15 p-right-15">
                                        <div class="m-top-20 m-bottom-20">
                                            <h2 class="text-base text-bold-700 m-top-15">$350,000 <small class="text-size-14 text-muted">Per Month</small></h2>
                                            <h5><a class="text-bold-600 text-dark text-base-hover" href="#">Beautiful Waterfront House</a></h5>
                                            <p>103 Occidental Washington USA</p>
                                            <ul class="icon-list list-inline m-bottom-0">
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-bed"></i> 9 Beds</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-tint"></i> 5 Baths</li>
                                                <li class="list-inline-item"><i class="btn btn-base fa fa-expand"></i> 54,000 Sq Ft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 text-size-13 text-muted p-top-15 p-right-15 p-bottom-15 p-left-15">
                                        <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                            <li><i class="m-right-4 fa fa-calendar"></i> 4 months ago</li>
                                            <li><a href="#"><i class="m-right-4 fa fa-heart"></i> Favorate</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </li>
                            <!-- /PROPERTY -->
                        
                        </ul>

                    </div>
                    <!-- /PROPERTIES -->

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

                </div>
                <!-- /CONTENT -->

                <!-- SIDEBAR -->
                <div class="col-lg-4 col-md-12">

                    <!-- SEARCH -->
                    <div class="bg-white card-body box-shadow-1 m-bottom-30">
                
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
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

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-bold-700 text-uppercase text-size-13">- Property Purpose -</label>
                                    <select name="property_purpose_id" class="form-control rounded-0 bg-light-5">
                                        <option>-- Property Purpose --</option>
                                        <option value="1">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
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

                            <div class="col-lg-12 col-md-12 col-sm-12">
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

                            <div class="col-lg-12 col-md-12 col-sm-12">
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

                        <div class="collapse" id="advanced_search">

                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">- Keyword -</label>
                                        <input type="text" name="keyword" class="form-control rounded-0 bg-light-5" placeholder="Enter Keyword Here">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
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

                                <div class="col-lg-12 col-md-12 col-sm-12">
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

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700 text-uppercase text-size-13">- Location -</label>
                                        <input type="text" name="location" class="form-control rounded-0 bg-light-5" placeholder="Enter Location Here">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <h5 class="text-bold-700 text-uppercase m-top-10 m-bottom-20">Amenities</h5>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Air conditioning</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Balcony</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Bedding</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Cable TV</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Cofee pot</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Computer</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Cot</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Dishwasher</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">DVD</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Fan</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Fridge</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Grill</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Hairdryer</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Heating</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Hi-fi</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Internet</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Iron</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Juicer</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Lift</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Microwave</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Gym</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Fireplace</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Hot Tub</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
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
                    <!-- /SEARCH -->
                    
                    <!-- RECENTLY VIEW -->
                    <div class="row">
                        <div class="col-md-12 m-bottom-30">
                            <div class="bg-white card-body box-shadow-1">
                                <h5 class="text-bold-700 m-bottom-10">RECENTLY VIEWED</h5>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <ul class="media-list">
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/property/property-1-150x130.jpg">
                                        <div class="media-content">
                                            <h5 class="text-bold-700 text-base">$250,000</h5>
                                            <h6><a class="text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h6>
                                            <p class="address">253 Lake Washington, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/property/property-2-150x130.jpg">
                                        <div class="media-content">
                                            <h5 class="text-bold-700 text-base">$120,000</h5>
                                            <h6><a class="text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h6>
                                            <p class="address">154 Drive, New York</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/property/property-3-150x130.jpg">
                                        <div class="media-content">
                                            <h5 class="text-bold-700 text-base">$145,000</h5>
                                            <h6><a class="text-dark text-base-hover" href="#">Global Land House</a></h6>
                                            <p class="address">110 Lake, United Kingdom</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /RECENTLY VIEW -->
                    
                    <!-- ENQUIRE FORM -->
                    <div class="row">
                        <div class="col-md-12 m-bottom-30">
                            <div class="bg-white card-body box-shadow-1">
                                <h5 class="text-bold-700 m-bottom-10">ENQUIRE FORM</h5>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <form>
                                    <div class="form-group">
                                        <input type="name" class="form-control rounded-0" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control rounded-0" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="phone" class="form-control rounded-0" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-base rounded-0 text-bold-600 text-spacing-5 text-uppercase text-size-13 p-left-15 p-right-15" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /ENQUIRE FORM -->
                    
                    <!-- FEATURED PROPERTIES -->
                    <div class="row">
                        <div class="col-md-12 m-bottom-30">
                            <div class="bg-white card-body box-shadow-1">
                                <h5 class="text-bold-700 m-bottom-10">FEATURED PROPERTIES</h5>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <div class="single-slider slick-single">
                                    <div>
                                        <div class="property m-bottom-15">
                                            <div class="property-media overlay-wrapper">
                                                <img alt="..." class="full-width" src="assets/images/property/property-1.jpg">
                                                <div class="media-data">
                                                    <div class="position-top">
                                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    </div>
                                                    <div class="position-bottom">
                                                        <h2 class="text-white m-bottom-0 text-bold-700 pull-left">$250,000</h2>
                                                        <div class="clearfix"></div>
                                                        <p class="text-white m-bottom-0 pull-left">Per Month</p>
                                                        <div class="text-white text-size-18 pull-right line-height-0"><i class="fa fa-camera"></i> 12</div>
                                                    </div>
                                                </div>
                                                <div class="overlay bg-bg opacity-9"></div>
                                            </div>
                                            <div class="property-section">
                                                <div class="m-top-20 m-bottom-20">
                                                    <h5><a class="text-dark text-base-hover" href="#">Beautiful Small Apartment</a></h5>
                                                    <p>253 Lake Washington, USA</p>
                                                </div>
                                                <div class="bg-light-3 p-top-10 p-right-15 p-bottom-10 p-left-15">
                                                    <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                                        <li><i class="m-right-4 fa fa-bed"></i> 5 Beds</li>
                                                        <li><i class="m-right-4 fa fa-tint"></i> 3 Baths</li>
                                                        <li><i class="m-right-4 fa fa-expand"></i> 36,000 Sq Ft</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="property m-bottom-15">
                                            <div class="property-media overlay-wrapper">
                                                <img alt="..." class="full-width" src="assets/images/property/property-2.jpg">
                                                <div class="media-data">
                                                    <div class="position-top">
                                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Sale</div>
                                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    </div>
                                                    <div class="position-bottom">
                                                        <h2 class="text-white m-bottom-0 text-bold-700 pull-left">$120,000</h2>
                                                        <div class="clearfix"></div>
                                                        <p class="text-white m-bottom-0 pull-left">Per Month</p>
                                                        <div class="text-white text-size-18 pull-right line-height-0"><i class="fa fa-camera"></i> 6</div>
                                                    </div>
                                                </div>
                                                <div class="overlay bg-bg opacity-9"></div>
                                            </div>
                                            <div class="property-section">
                                                <div class="m-top-20 m-bottom-20">
                                                    <h5><a class="text-dark text-base-hover" href="#">Beautiful Garaes Condo</a></h5>
                                                    <p>154 Drive, New York</p>
                                                </div>
                                                <div class="bg-light-3 p-top-10 p-right-15 p-bottom-10 p-left-15">
                                                    <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                                        <li><i class="m-right-4 fa fa-bed"></i> 4 Beds</li>
                                                        <li><i class="m-right-4 fa fa-tint"></i> 2 Baths</li>
                                                        <li><i class="m-right-4 fa fa-expand"></i> 45,000 Sq Ft</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="property m-bottom-15">
                                            <div class="property-media overlay-wrapper">
                                                <img alt="..." class="full-width" src="assets/images/property/property-1.jpg">
                                                <div class="media-data">
                                                    <div class="position-top">
                                                        <div class="badge badge-base text-white pull-left m-right-8 p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">Featured</div>
                                                        <div class="badge badge-success pull-left p-top-8 p-right-12 p-bottom-8 p-left-12 rounded-0">For Rent</div>
                                                        <div class="text-white text-size-24 pull-right"><a class="text-white text-base-hover" href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    </div>
                                                    <div class="position-bottom">
                                                        <h2 class="text-white m-bottom-0 text-bold-700 pull-left">$145,000</h2>
                                                        <div class="clearfix"></div>
                                                        <p class="text-white m-bottom-0 pull-left">Per Month</p>
                                                        <div class="text-white text-size-18 pull-right line-height-0"><i class="fa fa-camera"></i> 14</div>
                                                    </div>
                                                </div>
                                                <div class="overlay bg-bg opacity-9"></div>
                                            </div>
                                            <div class="property-section">
                                                <div class="m-top-20 m-bottom-20">
                                                    <h5><a class="text-dark text-base-hover" href="#">Global Land House</a></h5>
                                                    <p>110 Lake, United Kingdom</p>
                                                </div>
                                                <div class="bg-light-3 p-top-10 p-right-15 p-bottom-10 p-left-15">
                                                    <ul class="list-unstyled d-flex justify-content-between m-bottom-0">
                                                        <li><i class="m-right-4 fa fa-bed"></i> 6 Beds</li>
                                                        <li><i class="m-right-4 fa fa-tint"></i> 3 Baths</li>
                                                        <li><i class="m-right-4 fa fa-expand"></i> 65,000 Sq Ft</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /FEATURED PROPERTIES -->

                    <!-- PROPERTY TYPE -->
                    <div class="row">
                        <div class="col-md-12 m-bottom-30">
                            <div class="bg-white card-body box-shadow-1">
                                <h5 class="text-bold-700 m-bottom-10">PROPERTY TYPE</h5>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <ul class="icon-list">
                                    <li>
                                        <i class="btn btn-base fa fa-angle-double-right"></i>
                                        <a class="text-dark text-base-hover" href="#">Homes</a>
                                        <span>(10)</span>
                                    </li>
                                    <li>
                                        <i class="btn btn-base fa fa-angle-double-right"></i>
                                        <a class="text-dark text-base-hover" href="#">Plots</a>
                                        <span>(20)</span>
                                    </li>
                                    <li>
                                        <i class="btn btn-base fa fa-angle-double-right"></i>
                                        <a class="text-dark text-base-hover" href="#">Commercial</a>
                                        <span>(12)</span>
                                    </li>
                                    <li>
                                        <i class="btn btn-base fa fa-angle-double-right"></i>
                                        <a class="text-dark text-base-hover" href="#">Appartments</a>
                                        <span>(15)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /PROPERTY TYPE -->

                    <!-- RECENT POST -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white card-body box-shadow-1">
                                <h5 class="text-bold-700 m-bottom-10">RECENT POSTS</h5>
                    
                                <div class="hr dark text-left m-bottom-20">
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                    <div class="icons text-light">
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                    <hr class="border-3 border-double border-light border-left-0 border-top-0 border-right-0">
                                </div>

                                <ul class="media-list">
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/blog/blog-1-150x130.jpg">
                                        <div class="media-content">
                                            <div class="meta m-bottom-5">
                                                <i class="fa fa-user text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">admin</a>
                                                <i class="fa fa-comments text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">24</a>
                                            </div>
                                            <h6><a class="text-base text-base-dark-hover" href="#">Fuisset partiendo quo cu sadipscing</a></h6>
                                            <div class="meta">
                                                <i class="fa fa-calendar text-muted"></i> 25, Jan 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/blog/blog-2-150x130.jpg">
                                        <div class="media-content">
                                            <div class="meta m-bottom-5">
                                                <i class="fa fa-user text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">admin</a>
                                                <i class="fa fa-comments text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">24</a>
                                            </div>
                                            <h6><a class="text-base text-base-dark-hover" href="#">Fuisset partiendo quo cu sadipscing</a></h6>
                                            <div class="meta">
                                                <i class="fa fa-calendar text-muted"></i> 25, Jan 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img alt="..." class="media-img" src="assets/images/blog/blog-3-150x130.jpg">
                                        <div class="media-content">
                                            <div class="meta m-bottom-5">
                                                <i class="fa fa-user text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">admin</a>
                                                <i class="fa fa-comments text-muted"></i>
                                                <a class="text-dark text-base-hover" href="#">24</a>
                                            </div>
                                            <h6><a class="text-base text-base-dark-hover" href="#">Fuisset partiendo quo cu sadipscing</a></h6>
                                            <div class="meta">
                                                <i class="fa fa-calendar text-muted"></i> 25, Jan 2017
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /RECENT POST -->

                </div>
                <!-- /SIDEBAR -->

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