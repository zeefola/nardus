@extends('layouts.frontend')

@section('slider')
    @includeIf('layouts.slider')
@endsection


@section('main_content')
    <!-- aboutus-section -->
    <section class="ttm-row first-about-section bg-img1 clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-5">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper mr_95 res-991-mr-0 position-relative z-1 res-991-center">
                        <img class="img-fluid" src="/images/essential_oil.png" title="nardus lemongrass essential oil" alt="lemongrass essential oil">
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
                <div class="col-lg-7">
                    <div class="spacing-1 ttm-bgcolor-white bordertop-12px-solid skincolor-border">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>ABOUT LEMONGRASS ESSENTIAL OIL</h5>
                                <h2 class="title">Pure Aroma from Nature</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                        </div><!-- section title end -->
                        <p>Experience the sheer potency of a natural essential oil derived through the most ethical
                            extraction and purification process.</p>
                        <p>Incorporating a myriad of properties that the world is yet to fully discover, our pure lemongrass
                            essential oil is the quintessential topical solution that helps improve your quality of life.
                        </p>
                        <div class="row no-gutters">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style1 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon flaticon-mill"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Spa</h5>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style1 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon flaticon-agriculture"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Massage</h5>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style1 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon flaticon-agronomy"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Fragrance</h5>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style1 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon flaticon-field-1"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Flavour</h5>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-md-4 col-lg-4 col-sm-4">
                                {{-- <div class="text-left pt-15">
                                    <img src="https://via.placeholder.com/145X60/444444.png" alt="about-sign">
                                </div> --}}
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-8">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box without-icon style1 text-left pt-15">
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        {{-- <div class="featured-desc"> --}}
                                            <!--  featured-desc -->
                                            <p>Call to ask any question</p>
                                        {{-- </div> --}}
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>{{ config('app.phone_1') }}</h5>
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
    <section class="ttm-row zero-padding-section mt_85 res-991-mt-0 clearfix">
        <div class="container">
            <div class="row ttm-bgcolor-skincolor featured-icon-box-style2-row m-0">
                <!-- row -->
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon style2 ttm-bgcolor-white">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-trees"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Essential Oils Production</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>Aromatherapy</p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon style2 ttm-bgcolor-white res-991-mt-20">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-sprinkler"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Flavour Formulation</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>Gourmet Flavours</p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon style2 ttm-bgcolor-white res-991-mt-20">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-agronomy "></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Fragrance Customisation</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>Oriental Scents</p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- services-section end -->

    <!-- row-title-section -->
    <section class="ttm-row first-row-title-section bg-img2 clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg mb-0">
                                <i class="flaticon flaticon-farmer fs-60"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <!-- section-title -->
                        <div class="section-title row-title clearfix">
                            <div class="title-header">
                                <h5 class="mb-10">ABOUT ESSENTIAL OILS</h5>
                                <h2 class="title fw-700 mb-5"> Pure Aroma From Nature </h2>
                                <!-- <h2 class="title font-weight-normal"> Solution Of Eco Environment </h2> -->
                            </div>
                        </div><!-- section-title end -->
                        <a href="/about-us" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey mt-20 mr-10">About
                            Nardus</a>
                        <a href="/services" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20"> Our
                            Services</a>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- row-title-section -->

    <!-- row-title-section -->
    <section class="ttm-row first-services-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-4">
                    <div class="res-991-mb-30">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>WHAT WE OFFER</h5>
                                <!-- <h2 class="title">Independently owned & operated</h2> -->
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                        </div><!-- section title end -->
                        <p>Here at Nardus, we do what we do best—sort the best plant and herb specimens to make superior
                            quality essential oils. Our essential oils contain only natural extracts derived through an
                            ethical steam distillation and purification process. This ensures the consistency in aroma,
                            flavour, and potency.</p>
                        <div class="mt-25">
                            <ul class="ttm-list ttm-list-style-icon">
                                <li><i class="fa fa-check-circle-o ttm-textcolor-skincolor"></i><span
                                        class="ttm-list-li-content">Nardus lemongrass essential oil possesses a highly
                                        concentrated citral compound which tops 75% of its formulation. This guarantees its
                                        effectiveness in aromatherapy, massage, and cosmetics.</span></li>
                                <li><i class="fa fa-check-circle-o ttm-textcolor-skincolor"></i><span
                                        class="ttm-list-li-content">Nardus turmeric essential oil possesses a high
                                        concentration of the cumin compound. It is an effective antibacterial and
                                        anti-fungal agent, and it also improves skin health.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon icon-align-top style3 ttm-bgcolor-white">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-agriculture"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">Natural Essential Oils</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>A wide selection of essential oils ideal for aromatherapy and food</p>
                                    </div>

                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon icon-align-top style3 ttm-bgcolor-white">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-plant"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">Bath & Body</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>Essential oils can be added to bath or applied to skin</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon icon-align-top style3 ttm-bgcolor-white">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-house"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">Household</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>Maintain proper hygiene in the home in a natural way</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon icon-align-top style3 ttm-bgcolor-white">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-sprinkler"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">Flavor</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>Organic spices for top of the class flavouring</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- row-title-section -->

    <!-- progress-section -->
    @includeIf('layouts.chooseUs')
    <!-- progress-section -->

    <!-- portfolio-text-section -->
    <section class="ttm-row portfolio-text-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center clearfix">
                        <div class="title-header">
                            <h5>RECENTLY COMPLETED</h5>
                            <h2 class="title">Our Latest Products</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- portfolio-text-section -->

    <!-- portfolio-section -->
    <section class="ttm-row topzero-padding-section clearfix">
        <div class="container">
            <div class="row multi-columns-row ttm-boxes-spacing-10px ttm-bgcolor-white mt_140">
                <!-- row -->
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/handwash.jpg" alt="handwash" title="nardus lemongrass handwash">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/handwash.jpg" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Hand Wash</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Fresh Garden</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/diffusser.png" alt="diffuser" title="nardus lemongrass diffuser">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/diffusser.png" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Diffuser</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Dairy Farm</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/essential.png" alt="lemongrass essential oil" title="nardus lemongrass essential oil">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/essential.png" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Essential Oil</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Garden Care</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/hydrosol.jpg" alt="hydrosol" title="nardus lemongrass hydrosol">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/hydrosol.jpg" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Hydrosol</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Dairy Farm</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/liquid-soap.jpg" alt="liquid soap" title="nardus lemongrass liquid soap">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/liquid-soap.jpg" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Liquid Soap</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Garden Care</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="featured-thumbnail">
                            <!-- featured-thumbnail-->
                            <img class="img-fluid" src="/images/sanitizer.png" alt="hand sanitizer" title="nardus lemongrass hand sanitizer">
                        </div><!-- featured-thumbnail END-->
                        <div class="ttm-box-view-overlay">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-media-link">
                                <!-- ttm-media-link-->
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title=""
                                    href="/images/sanitizer.png" data-rel="prettyPhoto">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="featured-content">
                                <!-- featured-content-->
                                <div class="featured-title">
                                    <!-- featured-title-->
                                    <h5><a href="#">Hand Sanitizer</a></h5>
                                </div>
                                <!-- <div class="category"> -->
                                <!-- category -->
                                <!-- <p>Fresh Garden, Dairy Farm</p>
                                            </div> -->
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div>
                    <!-- featured-imagebox -->
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- portfolio-section -->

@endsection
