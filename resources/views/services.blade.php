@extends('layouts.frontend')

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Services' , 'subtitle' => 'Services'])
@endsection

@section('main_content')

    <!-- aboutus-section -->
    <section class="ttm-row about-section bg-img11 clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-6">
                    <div class="ml-40">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="/images/service.jpg" title="nardus essential oils"
                                alt="essential oils">
                        </div><!-- ttm_single_image-wrapper end -->
                        <!--ttm-fid-->
                        <div class="ttm-fid inside without-icon ttm-highlight-fid-style-2">
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="20" data-interval="1"
                                        data-before="" data-before-style="sup" data-after="+"
                                        data-after-style="sub">20</span><span class="ml-5">+</span>
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
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-like"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Excellent Delivery Service</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>A smart nationwide logistics network that guarantees safe and fast delivery.
                                            </p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style8 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-farmer"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Experience & Talent</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Our work is founded on 20+ years of experience and driven by a line-up of
                                                remarkable corporate talents.</p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style8 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-agronomy"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>24/7 Customer Support</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We have an experienced customer support team that responds to inquiries in
                                                real time.</p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <!--  featured-icon-box -->
                                <div class="featured-icon-box style8 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <!--  featured-icon -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-worldwide"></i><!--  ttm-icon -->
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!--  featured-content -->
                                        <div class="featured-title">
                                            <!--  featured-title -->
                                            <h5>Research & Development</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Continuous research on organics with focus on promoting a healthier world.
                                            </p>
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
    <section class="ttm-row grid-section clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center clearfix">
                        <div class="title-header mb-50">
                            <h5>DISCOVER OUR PRODUCTS</h5>
                            <h2 class="title">100% Pure and Organic</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <div class="row">
                @foreach ($datas as $data)

                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-services -->
                        <div class="featured-imagebox featured-imagebox-services mb-30">
                            <div class="featured-thumbnail">
                                <!-- featured-thumbnail -->
                                <img class="img-fluid" src=" {{ $data->featured_thumbnail }} " alt="{{ $data->img_alt }}" title="{{ $data->img_title }}">
                            </div>
                            <div class="featured-content box-shadow">
                                <div
                                    class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                    <i class="flaticon flaticon-agriculture"></i><!--  ttm-icon -->
                                </div>
                                <div class="featured-title">
                                    <!-- featured-title -->
                                    <h5><a href="#"> {{ $data->featured_title }}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <!-- featured-title -->
                                    <p> {{ $data->featured_description }} </p>
                                </div>
                                <hr>

                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right"
                                    href="{{ $data->go_to }}">Learn More <i class="ti ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- services-section -->

@endsection
