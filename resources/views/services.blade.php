@extends('layouts.frontend')

@section('breadcrumb')
  @includeIf('layouts.breadcrumb' , [ 'title' => 'Services' , 'subtitle' => 'Services'])
@endsection

@section('main_content')

<!-- aboutus-section -->
<section class="ttm-row about-section bg-img11 clearfix">
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-6">
                <div class="ml-40">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid" src="https://via.placeholder.com/500X565/444444.png" title="single-img-seven" alt="single-img-seven">
                    </div><!-- ttm_single_image-wrapper end -->
                    <!--ttm-fid-->
                    <div class="ttm-fid inside without-icon ttm-highlight-fid-style-2">
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation = "animateDigits"
                                data-from             = "0"
                                data-to               = "20"
                                data-interval         = "1"
                                data-before           = ""
                                data-before-style     = "sup"
                                data-after            = "+"
                                data-after-style      = "sub"
                            >20</span><span class="ml-5">+</span>
                            </h4>
                            <h3 class="ttm-fid-title">Years of Experience</h3>
                        </div>
                    </div><!-- ttm-fid end-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="res-991-mt-30 pr-90 res-991-pr-0">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-12">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style8 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-like"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5>We Bring Quality Services</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Sed ut pew rsieatis unde mnis ste ns error sit vodeta tem loream ipsum dutsed lore.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style8 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-farmer"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5>Experience & Talented</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Sed ut pew rsieatis unde mnis ste ns error sit vodeta tem loream ipsum dutsed lore.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style8 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-agronomy"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5>Offers 24/7 Quick Support</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Sed ut pew rsieatis unde mnis ste ns error sit vodeta tem loream ipsum dutsed lore.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style8 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-garden"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5>We Bring Quality Services</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Sed ut pew rsieatis unde mnis ste ns error sit vodeta tem loream ipsum dutsed lore.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
<!-- aboutus-section end -->

<!-- services-section -->
<section class="ttm-row services-section ttm-bgcolor-grey bg-img7 ttm-bg ttm-bgimage-yes clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title text-center clearfix">
                    <div class="title-header mb-50">
                        <h5>WORKING WITH EXCELLENT</h5>
                        <h2 class="title">Our Special Services</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row -->
        <!-- row -->
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots":false, "arrows":false, "autoplay":false, "infinite":true, "centerMode":false}'>
            <div class="col-lg-12">
                <!--  featured-icon-box --> 
                <div class="featured-icon-box top-icon style3 text-center ttm-bgcolor-white box-shadow">
                    <div class="featured-icon"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-border ttm-icon_element-style-round">
                            <i class="flaticon flaticon-agriculture"></i><!--  ttm-icon --> 
                        </div>
                        <div class="ttm-service-icon-dots"></div>
                    </div>
                    <div class="featured-content"><!--  featured-content -->
                        <div class="featured-title"><!--  featured-title -->
                            <h5 class="mb-10"><a href="#"> Crop Protection Service </a></h5>
                        </div>
                        <div class="featured-desc"><!--  featured-desc -->
                            <p>Crop protection encompasses: Pesticide-based approaches such as herbicides, insecticides and fungicides.</p>
                        </div>
                        <hr>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline ttm-icon-btn-right" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!--  featured-icon-box END -->
            </div>
            <div class="col-lg-12">
                <!--  featured-icon-box --> 
                <div class="featured-icon-box top-icon style3 text-center ttm-bgcolor-white box-shadow">
                    <div class="featured-icon"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-border ttm-icon_element-style-round">
                            <i class="flaticon flaticon-tractor-1"></i><!--  ttm-icon --> 
                        </div>
                        <div class="ttm-service-icon-dots"></div>
                    </div>
                    <div class="featured-content"><!--  featured-content -->
                        <div class="featured-title"><!--  featured-title -->
                            <h5 class="mb-10"><a href="#"> Stone & Hardscaping </a></h5>
                        </div>
                        <div class="featured-desc"><!--  featured-desc -->
                            <p>All about planting and growing trees. Each year we plant more than 2 million trees, safely, reliably and on time. </p>
                        </div>
                        <hr>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline ttm-icon-btn-right" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!--  featured-icon-box END -->
            </div>
            <div class="col-lg-12">
                <!--  featured-icon-box --> 
                <div class="featured-icon-box top-icon style3 text-center ttm-bgcolor-white box-shadow">
                    <div class="featured-icon"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-border ttm-icon_element-style-round">
                            <i class="flaticon flaticon-sprout"></i><!--  ttm-icon --> 
                        </div>
                        <div class="ttm-service-icon-dots"></div>
                    </div>
                    <div class="featured-content"><!--  featured-content -->
                        <div class="featured-title"><!--  featured-title -->
                            <h5 class="mb-10"><a href="#"> Forest & Tree Planting </a></h5>
                        </div>
                        <div class="featured-desc"><!--  featured-desc -->
                            <p>A complete harvesting service from harvesting the grain to transporting , to the completion of the harvest.</p>
                        </div>
                        <hr>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline ttm-icon-btn-right" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!--  featured-icon-box END -->
            </div>
            <div class="col-lg-12">
                <!--  featured-icon-box --> 
                <div class="featured-icon-box top-icon style3 text-center ttm-bgcolor-white box-shadow">
                    <div class="featured-icon"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-border ttm-icon_element-style-round">
                            <i class="flaticon flaticon-watering"></i><!--  ttm-icon --> 
                        </div>
                        <div class="ttm-service-icon-dots"></div>
                    </div>
                    <div class="featured-content"><!--  featured-content -->
                        <div class="featured-title"><!--  featured-title -->
                            <h5 class="mb-10"><a href="#"> Watering Systems </a></h5>
                        </div>
                        <div class="featured-desc"><!--  featured-desc -->
                            <p>The primary focus of our this services is to optimize the performance of our water treatment programs.</p>
                        </div>
                        <hr>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline ttm-icon-btn-right" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!--  featured-icon-box END -->
            </div>
            <div class="col-lg-12">
                <!--  featured-icon-box --> 
                <div class="featured-icon-box top-icon style3 text-center ttm-bgcolor-white box-shadow">
                    <div class="featured-icon"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-border ttm-icon_element-style-round">
                            <i class="flaticon flaticon-drone"></i><!--  ttm-icon --> 
                        </div>
                        <div class="ttm-service-icon-dots"></div>
                    </div>
                    <div class="featured-content"><!--  featured-content -->
                        <div class="featured-title"><!--  featured-title -->
                            <h5 class="mb-10"><a href="#"> Irrigation & Drainage </a></h5>
                        </div>
                        <div class="featured-desc"><!--  featured-desc -->
                            <p>Lorem idolorame conseetur sadipscing elit- diam nonumy eirmod tecontary to mpor invi- dunt ut labore</p>
                        </div>
                        <hr>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline ttm-icon-btn-right" href="#">Learn More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!--  featured-icon-box END -->
            </div>
        </div><!-- row end -->
        <div class="row"><!-- row -->
            <div class="col-lg-12">
                <div class="mt-35 res-991-mt-10 text-center">
                    <h6 class="mb-0">Don’t hesitate, contact us for better help and services. <a href="#" class="ttm-textcolor-skincolor"> <u>Let’s get started</u></a></h6>
                </div>
            </div>
        </div><!-- row end-->
    </div>
</section>
<!-- services-section -->

<!-- row-title-section -->
<section class="ttm-row second-row-title-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img9 clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-8 col-md-10 m-md-auto">
                <div class="text-center">
                    <div class="featured-icon row-title-icon mb-15"><!--  featured-icon --> 
                        <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-style-round ttm-icon_element-size-lg mb-0">
                            <i class="flaticon flaticon-trees"></i><!--  ttm-icon --> 
                        </div>
                    </div>
                    <!-- section title -->
                    <div class="section-title text-center clearfix">
                        <div class="title-header mb-50">
                            <h1 class="ttm-textcolor-white">Get Professional & Affordable <span class="ttm-textcolor-skincolor">Agriculture</span>  Service</h1>
                        </div>
                    </div><!-- section title end -->
                    <div class="mt-40">
                        <a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white">View More Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- row-title-section -->

<!-- priceplan-section -->
<section class="ttm-row priceplan-section clearfix">
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title text-center clearfix">
                    <div class="title-header">
                        <h5>PRICING PLAN</h5>
                        <h2 class="title">A Monthly Project Fee Plan</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row -->
        <!-- row -->
        <div class="row no-gutters mt-50 res-767-mt-0">
            <div class="col-md-4">
                <!--ttm-pricing-plan-->
                <div class="ttm-pricing-plan box-shadow text-left clearfix">
                    <div class="ttm-ptablebox-title"><h3>Professional</h3></div><!--title-->
                    <div class="ttm-ptablebox-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="ttm-ptablebox-content">
                        <div class="ttm-ptablebox-price-w">
                            <div class="ttm-ptablebox-cur-symbol-before">$</div>
                            <div class="ttm-ptablebox-price">70.00</div><!--price-->
                            <div class="ttm-ptablebox-frequency">per month</div>
                        </div>
                        <div class="ttm-ptablebox-features"><!--features-->
                            <ul class="ttm-feature-lines">
                                <li>24/7 Support</li>
                                <li>Advanced Options</li>
                                <li>16 GB Storage</li>
                                <li>Unlimited Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price_btn">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-grey mb-20 w-100" href="#">Order Now</a>
                    </div>
                </div><!--ttm-pricing-plan-->
            </div>
            <div class="col-md-4">
                <!--ttm-pricing-plan-->
                <div class="ttm-pricing-plan ttm-pricing-plan-col box-shadow text-left clearfix">
                    <div class="ttm-featured-title"><i class="fa fa-star"></i>MOST POPULAR</div>
                    <div class="ttm-ptablebox-title"><h3>Standard</h3></div><!--title-->
                    <div class="ttm-ptablebox-desc">Designed for businesses with standard health requirements</div>
                    <div class="ttm-ptablebox-content">
                        <div class="ttm-ptablebox-price-w">
                            <div class="ttm-ptablebox-cur-symbol-before">$</div>
                            <div class="ttm-ptablebox-price">90.00</div><!--price-->
                            <div class="ttm-ptablebox-frequency">per month</div>
                        </div>
                        <div class="ttm-ptablebox-features"><!--features-->
                            <ul class="ttm-feature-lines">
                                <li>24/7 Support</li>
                                <li>Advanced Options</li>
                                <li>16 GB Storage</li>
                                <li>Unlimited Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price_btn">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mb-20 w-100" href="#">Order Now</a>
                    </div>
                </div><!--ttm-pricing-plan-->
            </div>
            <div class="col-md-4">
                <!--ttm-pricing-plan-->
                <div class="ttm-pricing-plan box-shadow text-left clearfix">
                    <div class="ttm-ptablebox-title"><h3>Basic</h3></div><!--title-->
                    <div class="ttm-ptablebox-desc">Designed for businesses with standard health requirements</div>
                    <div class="ttm-ptablebox-content">
                        <div class="ttm-ptablebox-price-w">
                            <div class="ttm-ptablebox-cur-symbol-before">$</div>
                            <div class="ttm-ptablebox-price">60.00</div><!--price-->
                            <div class="ttm-ptablebox-frequency">per month</div>
                        </div>
                        <div class="ttm-ptablebox-features"><!--features-->
                            <ul class="ttm-feature-lines">
                                <li>24/7 Support</li>
                                <li>Advanced Options</li>
                                <li>16 GB Storage</li>
                                <li>Unlimited Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price_btn">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-grey mb-20 w-100" href="#">Order Now</a>
                    </div>
                </div><!--ttm-pricing-plan-->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- priceplan-section -->

@endsection