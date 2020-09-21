@extends('layouts.frontend')

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Essential Oils' , 'subtitle' => 'Essential Oils'])
@endsection

@section('main_content')
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area order-lg-2">
                    <!-- ttm-service-single-content-are -->
                    <!-- ttm-service-single-content-are -->
                    <div class="ttm-service-single-content-area">
                        <div class="ttm_single_image-wrapper mb-35">
                            <img style="height:400px; width:100%;" src="/images/hydrosss.jpg" alt="single-img-nine">
                        </div>
                        <div class="ttm-service-description">
                            <h4>Hydrosol</h4>
                            <p>Also known as herbal distillates or floral waters, hydrosols are “by products” of essential
                                oils extracted through steam or water distillation.</p>
                            <h4>What is the importance of hydrosols?</h4>
                            <p>In some cultures, traditional medicine men and households have used hydrosols for ages. Until
                                recently, hydrosols were predominantly treated as an unsolicited spin-off of distillation.
                                However, that has changed with the growing popularity of alternative medicine and organic
                                skincare.</p>
                            <div class="row mt-30">
                                <div class="col-lg-6">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon mb-30">
                                        <div class="featured-icon">
                                            <!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-bgcolor-grey ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-sprout fs-34"></i><!--  ttm-icon -->
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <!--  featured-content -->
                                            <!-- <div class="featured-title"> -->
                                            <!--  featured-title -->
                                            <!-- <h5 class="mb-5">Excellent Service</h5>
                                                    </div> -->
                                            <div class="featured-desc">
                                                <!--  featured-desc -->
                                                <p>When it comes to multipurpose home cleaning, many people resort to
                                                    unforgiving chemical compounds. Though these chemicals have extreme
                                                    effects on microbial and other opportunistic organisms, they may also be
                                                    as unsafe for our bodies, thereby jeopardising our health in ways we may
                                                    not know.</p>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                                <div class="col-lg-6">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon mb-30">
                                        <div class="featured-icon">
                                            <!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-bgcolor-grey ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-sprout fs-34"></i><!--  ttm-icon -->
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <!--  featured-content -->
                                            <!-- <div class="featured-title"> -->
                                            <!--  featured-title -->
                                            <!-- <h5 class="mb-5">Quality & Reliability</h5>
                                                    </div> -->
                                            <div class="featured-desc">
                                                <!--  featured-desc -->
                                                <p>Nardus Hydrosol is produced by steam-distilling our own 100% organic
                                                    lemongrass plant. The result is a perfect distillate which carries with
                                                    it a potent protective quality against foreign bodies and harmful
                                                    organisms that cause infection and disease.</p>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                                <div class="col-lg-6">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon mb-30">
                                        <div class="featured-icon">
                                            <!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-bgcolor-grey ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-sprout fs-34"></i><!--  ttm-icon -->
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <!--  featured-content -->
                                            <!-- <div class="featured-title"> -->
                                            <!--  featured-title -->
                                            <!-- <h5 class="mb-5">Expert Farmer</h5>
                                                    </div> -->
                                            <div class="featured-desc">
                                                <!--  featured-desc -->
                                                <p>Lemongrass is known for its purifying properties and gorgeous aroma.
                                                    Infused with 100% pure organic lemongrass essence, Nardus Hydrosol has
                                                    both preventive and remedial actions against several bacterial and
                                                    fungal strains. Nardus Hydrosol is a natural solution that will help you
                                                    cut through grease while doubling as a strong antimicrobial and
                                                    antibacterial agent. This combination offers great cleaning power in its
                                                    most natural way.</p>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                                <div class="col-lg-6">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon  mb-30">
                                        <div class="featured-icon">
                                            <!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-bgcolor-grey ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-sprout fs-34"></i><!--  ttm-icon -->
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <!--  featured-content -->
                                            <!-- <div class="featured-title"> -->
                                            <!--  featured-title -->
                                            <!-- <h5 class="mb-5">Clean Working</h5>
                                                    </div> -->
                                            <div class="featured-desc">
                                                <!--  featured-desc -->
                                                <p> Nardus Hydrosol is highly effective in the sterilisation of bathrooms,
                                                    sinks, toilet seats, furniture, and floors. And it comes with aromatic
                                                    perks—a fresh, deodorant, reviving scent that tantalises your olfactory
                                                    sense with notes of citrusy lemon. </p>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                            </div>
                            <hr>
                            <a href="#" target="_blank"
                                class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right"> Visit
                                Product Page For More Lemongrass Based Products <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ttm-service-single-content-are end -->
                </div>
                <div class="col-lg-3 widget-area">
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            <li class="active"><a href="/essential-oil">Essential Oils</a></li>
                            <li><a href="/hand-sanitizer">Hand Sanitizer</a></li>
                            <li><a href="/hydrosol"> Hydrosol</a></li>
                        </ul>
                    </aside>
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            <li><i class="fa fa-map-marker"></i> {{ config('app.location_2') }} <br>
                                {{ config('app.location_1') }}</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">
                                    {{ config('app.email') }}</a></li>
                            <li><i class="fa fa-phone"></i>{{ config('app.phone_1') }}</li>
                            <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 8:00am to 5:00pm (Sunday Closed)</li>
                        </ul>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
@endsection
