@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | About Us
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'About Us' , 'subtitle' => 'About Us'])
@endsection

@section('main_content')

    <!-- aboutus-section -->
    <section class="ttm-row second-about-section bg-img1 position-relative clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-6">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper after-border style2 position-relative ml-20">
                        <img class="img-fluid border-12px-solid white-border" src="/images/who.jpg" title="single-img-five"
                            alt="single-img-five">
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
                <div class="col-lg-6">
                    <div class="res-991-mt-50">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>About The Company</h5>
                                <h2 class="title">Who We Are</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                        </div><!-- section title end -->
                        <p>Nardus Company Ltd are a global supplier of Essential Oils into the Flavour, Fragrance and
                            Cosmetic industries. Nardus offer customers an extensive line of essential oils and
                            lemongrass-based domestic products.</p>
                        <p>Headquartered in Lagos, Nigeria, we support the worldwide production and distribution of the
                            finest Essential Oils, Spice Oleoresins, Herbal Extracts, Hydrosols and other naturally
                            formulated homecare products.</p>
                        <p> Apart from manufacturing many of our products ourselves, our volume purchases through our
                            Central Purchasing System enable us to offer the largest selection of pure essential oils at
                            affordable prices. We have a wide variety of pack sizes to meet all your specific needs, large,
                            small, or anywhere between. </p>
                        <!-- <div class="row ttm-bgcolor-white align-items-center mt-30"> -->
                        <!-- <div class="col-md-4 col-lg-4"> -->
                        <!--ttm-fid-->
                        <!-- <div class="ttm-fid inside without-icon style1">
                                                <div class="ttm-fid-contents text-center"> -->
                        <!--ttm-fid-contents-->
                        <!-- <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "35"
                                                        data-interval         = "2"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = "+"
                                                        data-after-style      = "sub"
                                                    >35</span><span class="ml-5">+</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">Our Team</h3> -->
                        <!--ttm-fid-title-->
                        <!-- </div>
                                            </div> -->
                        <!-- ttm-fid end-->
                        <!-- </div> -->
                        <!-- <div class="col-md-4 col-lg-4"> -->
                        <!--ttm-fid-->
                        <!-- <div class="ttm-fid inside  without-icon style1">
                                                <div class="ttm-fid-contents text-center"> -->
                        <!--ttm-fid-contents-->
                        <!-- <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "75"
                                                        data-interval         = "2"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = "+"
                                                        data-after-style      = "sub"
                                                    >75</span><span class="ml-5">+</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">Our Shop</h3> -->
                        <!--ttm-fid-title-->
                        <!-- </div>
                                            </div> -->
                        <!-- ttm-fid end-->
                        <!-- </div> -->
                        <!-- <div class="col-md-4 col-lg-4"> -->
                        <!--ttm-fid-->
                        <!-- <div class="ttm-fid inside without-icon style1">
                                                <div class="ttm-fid-contents text-center"> -->
                        <!--ttm-fid-contents-->
                        <!-- <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "150"
                                                        data-interval         = "2"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = "+"
                                                        data-after-style      = "sub"
                                                    >150</span><span class="ml-5">+</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">Our Brand</h3> -->
                        <!--ttm-fid-title-->
                        <!-- </div>
                                            </div> -->
                        <!-- ttm-fid end-->
                        <!-- </div> -->
                        <!-- </div> -->
                        <div class="row mt-30">
                            <div class="col-md-4 col-lg-4 col-sm-4">
                                <div class="text-left pt-15">
                                    <img src="https://via.placeholder.com/145X60/444444.png" alt="about-sign">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-8">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box without-icon style1 text-left pt-15">
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-desc">
                                            <!--  featured-desc -->
                                            <p>Call to ask any question</p>
                                        </div>
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5> {{ config('app.phone_1') }} </h5>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- aboutus-section end -->

    <!-- progress-section -->
    @includeIf('layouts.chooseUs')
    <!-- progress-section -->

    <!-- only-text-section -->
    <section class="ttm-row only-text-section ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img10 clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-md-flex justify-content-md-between align-items-md-center">
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box left-icon icon-align-top">
                            <div class="featured-icon">
                                <!--  featured-icon -->
                                <!-- <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-agriculture"></i> -->
                                <!--  ttm-icon -->
                                <!-- </div> -->
                            </div>
                            <div class="featured-content">
                                <!--  featured-content -->
                                <!-- <div class="featured-desc"> -->
                                <!--  featured-desc -->
                                <!-- <p>AGROTEK SPECIAL OFFERS</p>
                                            </div> -->
                                <div class="featured-title">
                                    <!--  featured-title -->
                                    <h5 class="fs-30">Talk to Our Support Team</h5>
                                </div>
                            </div>
                        </div><!--  featured-icon-box END -->
                        <div class="">

                            <a href="/contact-us"
                                class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white res-767-mt-20">
                                Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- only-text-section -->

    <!-- fid-section -->
    <section class="ttm-row zero-padding-section position-relative z-1 clearfix">
        <div class="container">
            <div class="row ttm-bgcolor-grey border-12px-solid white-border mt_80 no-gutters">
                <!-- row -->
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <!--ttm-fid-->
                    <div class="ttm-fid inside ttm-fid-view-lefticon style3">
                        <div class="ttm-fid-left">
                            <!--ttm-fid-left-->
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon flaticon-farmer"></i>
                            </div>
                        </div>
                        <div class="ttm-fid-contents text-left">
                            <!--ttm-fid-contents-->
                            <h4 class="ttm-fid-inner">
                                <span data-appear-animation="animateDigits" data-from="0" data-to="88" data-interval="5"
                                    data-before="" data-before-style="sup" data-after="" data-after-style="sub">88</span>
                            </h4>
                            <h3 class="ttm-fid-title">Happy Customers</h3>
                            <!--ttm-fid-title-->
                        </div>
                    </div><!-- ttm-fid end-->
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <!--ttm-fid-->
                    <div class="ttm-fid inside ttm-fid-view-lefticon style3">
                        <div class="ttm-fid-left">
                            <!--ttm-fid-left-->
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon flaticon-mill"></i>
                            </div>
                        </div>
                        <div class="ttm-fid-contents text-left">
                            <!--ttm-fid-contents-->
                            <h4 class="ttm-fid-inner">
                                <span data-appear-animation="animateDigits" data-from="0" data-to="20" data-interval="5"
                                    data-before="" data-before-style="sup" data-after="" data-after-style="sub">20</span>
                            </h4>
                            <h3 class="ttm-fid-title">Product Range</h3>
                            <!--ttm-fid-title-->
                        </div>
                    </div><!-- ttm-fid end-->
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <!--ttm-fid-->
                    <div class="ttm-fid inside ttm-fid-view-lefticon style3">
                        <div class="ttm-fid-left">
                            <!--ttm-fid-left-->
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon flaticon-agriculture-5"></i>
                            </div>
                        </div>
                        <div class="ttm-fid-contents text-left">
                            <!--ttm-fid-contents-->
                            <h4 class="ttm-fid-inner">
                                <span data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="2"
                                    data-before="" data-before-style="sup" data-after="" data-after-style="sub">10</span>
                            </h4>
                            <h3 class="ttm-fid-title">Essential Oils</h3>
                            <!--ttm-fid-title-->
                        </div>
                    </div><!-- ttm-fid end-->
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <!--ttm-fid-->
                    <div class="ttm-fid inside ttm-fid-view-lefticon style3">
                        <div class="ttm-fid-left">
                            <!--ttm-fid-left-->
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon flaticon-worldwide"></i>
                                <!-- <i class="ti ti-cup"></i> -->
                            </div>
                        </div>
                        <div class="ttm-fid-contents text-left">
                            <!--ttm-fid-contents-->
                            <h4 class="ttm-fid-inner">
                                <span data-appear-animation="animateDigits" data-from="0" data-to="5" data-interval="5"
                                    data-before="" data-before-style="sup" data-after="" data-after-style="sub">5</span>
                            </h4>
                            <h3 class="ttm-fid-title">Awards</h3>
                            <!--ttm-fid-title-->
                        </div>
                    </div><!-- ttm-fid end-->
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- fid-section -->

@endsection
