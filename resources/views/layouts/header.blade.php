<header id="masthead" class="header ttm-header-style-01">
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-topbar-content">
                                <ul class="top-contact text-left">
                                    <li>Pure Aroma From Nature</li>
                                </ul>
                                <div class="topbar-right text-right">
                                    <ul class="top-contact">
                                        <li>Office Hour : 08:00am - 5:00pm</li>
                                    </ul>
                                    <div class="ttm-social-links-wrapper list-inline">
                                        <ul class="social-icons">
                                            <li><a href="{{ config('app.facebook') }}"><i
                                                        class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="{{ config('app.instagram') }}"><i
                                                        class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <div class="ttm-widget_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex flex-row align-items-center">
                                <!-- site-branding -->
                                <div class="site-branding mr-auto">
                                    <a class="home-link" href="/" title="Nardus" rel="home">
                                        <img src="images/logo.jpg" id="logo-img" class="img-center" alt="logo">
                                    </a>
                                </div><!-- site-branding end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon-call"></i></div>
                                    <div class="widget_content">
                                        <h5 class="widget_title">{{ config('app.phone_1') }}</h5>
                                        <p class="widget_desc">Make A Call</p>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon-email"></i></div>
                                    <div class="widget_content">
                                        <h5 class="widget_title">{{ config('app.email') }}</h5>
                                        <p class="widget_desc">Send Us a Mail</p>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon-worldwide"></i></div>
                                    <div class="widget_content">
                                        <h5 class="widget_title">{{ config('app.location_1') }}</h5>
                                        <p class="widget_desc">{{ config('app.location_2') }}</p>
                                    </div>
                                </div><!-- widget-info end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-custombutton">
                                <a href="/distributors-form" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor">
                                    Distributor</a>
                            </div>
                            <!-- header-icons -->
                            <div class="ttm-header-icons ">
                                <span class="ttm-header-icon ttm-header-cart-link">
                                    <a href="#"><i class="fa fa-shopping-cart"></i>
                                        <span class="number-cart">0</span>
                                    </a>
                                </span>
                                <div class="ttm-header-icon ttm-header-search-link">
                                    <a href="#" class="sclose"><i class="ti ti-search"></i></a>
                                    <div class="ttm-search-overlay">
                                        <div class="ttm-bg-layer"></div>
                                        <div class="ttm-icon-close"></div>
                                        <div class="ttm-search-outer">
                                            <form method="get" class="ttm-site-searchform" action="#">
                                                <input type="search" class="field searchform-s" name="s"
                                                    placeholder="Type Word Then Enter...">
                                                <button type="submit">
                                                    <i class="ti ti-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- header-icons end -->
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                @yield('site_navigation')
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div>
    <!--ttm-header-wrap end -->
</header>
