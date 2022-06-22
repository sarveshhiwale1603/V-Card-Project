<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Fioxen - Directory & Listings HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src="assets/images/loader.png" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <?php include("assets/include/header.php") ?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">Listing Map</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Listing Map</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Map Section ======-->
        <section class="map-area">
            <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> 
            </div>
        </section><!--====== End Map Section ======-->
        <!--====== Start listing Section ======-->
        <section class="listing-grid-area pb-120">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="listing-search-form mb-120">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Search By Keyword" name="search" required>
                                        <i class="ti-ink-pen"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <select class="wide">
                                            <option data-dsplay="Category">Category</option>
                                            <option value="01">Museums</option>
                                            <option value="02">Restaurant</option>
                                            <option value="03">Party Center</option>
                                            <option value="04">Fitness Zone</option>
                                            <option value="05">Game Field</option>
                                            <option value="06">Job & Feeds</option>
                                            <option value="07">Shooping</option>
                                            <option value="08">Art Gallery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Location" name="location" required>
                                        <i class="ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <select class="wide">
                                            <option data-dsplay="Location">Location</option>
                                            <option value="01">Dhaka</option>
                                            <option value="02">Delhi</option>
                                            <option value="03">lahore</option>
                                            <option value="04">Rome</option>
                                            <option value="05">New york</option>
                                            <option value="06">Pris</option>
                                            <option value="07">Bern</option>
                                            <option value="08">Bangkok</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <select class="wide">
                                            <option data-dsplay="By Country">By Country</option>
                                            <option value="01">Bangladesh</option>
                                            <option value="02">India</option>
                                            <option value="03">Pakistan</option>
                                            <option value="04">Italy</option>
                                            <option value="05">America</option>
                                            <option value="06">London</option>
                                            <option value="07">Swizerland</option>
                                            <option value="08">Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <select class="wide">
                                            <option data-dsplay="Default price">Default price</option>
                                            <option value="01">$10-$30</option>
                                            <option value="02">$30-$70</option>
                                            <option value="03">$70-$100</option>
                                            <option value="04">$100-$130</option>
                                            <option value="05">$130-$150</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <button class="main-btn icon-btn">Search Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="listing-tab-filter mb-50">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat1">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat2">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat3">Shopping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat4">Parking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat5">Business</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cat6">Museums</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-search-filter mb-40">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="filter-left d-flex align-items-center">
                                            <div class="show-text">
                                                <span>Showing Result 1-09</span>
                                            </div>
                                            <div class="sorting-dropdown">
                                                <select>
                                                    <option data-dsplay="Default Sorting">Default Sorting</option>
                                                    <option value="01">Museums</option>
                                                    <option value="02">Restaurant</option>
                                                    <option value="03">Party Center</option>
                                                    <option value="04">Fitness Zone</option>
                                                    <option value="05">Game Field</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="filter-right">
                                            <ul class="filter-nav">
                                                <li><a href="listing-grid.html" class="active"><i class="ti-view-grid"></i></a></li>
                                                <li><a href="listing-list.html"><i class="ti-view-list-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-24.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-25.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Party Corner</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-26.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">City Palace</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-27.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Easter Plaza</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-28.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Gym Ground</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-29.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Miyami Sea</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-30.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Sky Center</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-31.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Gym Ground</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-32.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Coffee Time</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-24.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-25.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-26.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-27.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-28.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-29.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat3">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-24.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-25.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-26.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-27.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-28.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-29.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-24.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-25.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-26.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cat6">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-27.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-28.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="listing-item listing-grid-item-two mb-30">
                                                <div class="listing-thumbnail">
                                                    <img src="assets/images/listing/listing-grid-29.jpg" alt="Listing Image">
                                                    <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                                    <span class="featured-btn">Featured</span>
                                                    <ul class="ratings ratings-four">
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-content">
                                                    <h3 class="title"><a href="listing-details-2.html">Pizza Recipe</a></h3>
                                                    <p>Popular restaurant in california</p>
                                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                                    <div class="listing-meta">
                                                        <ul>
                                                            <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button text-center mt-30">
                                <a href="listing-map.html" class="main-btn icon-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!--====== End listing Section ======-->
        <!--====== Start Footer ======-->
        <?php include("assets/include/Footer.php") ?>
        <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
    </body>
</html>