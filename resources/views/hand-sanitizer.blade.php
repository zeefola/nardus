@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Essential Oil
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Hand Sanitizer' , 'subtitle' => 'Hand Sanitizer'])
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
                            <img style="height:400px; width:100%;" src="/images/sanii.jpg" alt="single-img-nine">
                        </div>
                        <div class="ttm-service-description">
                            <h4>Hand Sanitizer</h4>
                            <p>Hand sanitizer is often an alcohol-based gelatinous solution that’s effective against harmful
                                agents which have the potential of getting into our bodies through our hands. While the
                                regular cleaning of the hands with soap and water is advised in order to diminish the risk
                                of infection, alcohol-based formulations, oftentimes, are preferred in the healthcare
                                setting.</p>
                            <p class="mb-30">There’s nothing that prevents against germs and infections better than
                                maintaining proper hygiene. And it starts with your hands. Given the recent spate of
                                infections traversing the globe like a promulgated law, it becomes imperative to always make
                                effort to protect oneself with the most potent hand sanitizer one could lay hands on. That
                                is why we offer you Nardus hand sanitizer.</p>
                            <h4>Why is Nardus Hand Sanitizer the best?</h4>
                            <p>Made with lemongrass essential oil blended with other organic powerful disinfecting agents,
                                it is not hard to fathom how drastically our hand sanitizing solution could prevent the risk
                                of infection, while improving the cosmetic effect of your skin. </p>
                        </div>
                        <hr>
                        <a href="#" target="_blank"
                            class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right"> Visit
                            Product Page For More Information <i class="ti ti-angle-double-right"></i> </a>
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
