<footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cta_wrapper">
                                <div class="ttm-quicklink-box">
                                   <div class="ttm-leftlink-box">
                                       <h5 class="custom-heading"><a href="#"> <span class="ti ti-arrow-circle-left ttm-arrow-box"></span> Find Our Nearest Shop</a></h5>
                                       <i class="flaticon flaticon-house ttm-textcolor-skincolor"></i>
                                  </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ttm-custom-ctabox">
                                <div class="cta-bg-icon"><span class="flaticon-support"></span></div>
                                <h3 class="ttm-cta-heading ttm-textcolor-skincolor">Call Us On</h3>
                                <h5 class="ttm-cta-content">{{ config('app.phone_2') }}</h5>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta_wrapper">
                                <div class="ttm-quicklink-box">
                                   <div class="ttm-rightlink-box">
                                        <i class="flaticon flaticon-support ttm-textcolor-skincolor"></i>
                                        <h5 class="custom-heading"><a href="#"> Help Center <span class="ti ti-arrow-circle-right ttm-arrow-box"></span></a></h5>
                                  </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title"> About Nardus </h3>
                                <div class="">
                                    <p>Nardus Company Ltd are a global supplier of Essential Oils into the Flavour, Fragrance and Cosmetic industries. Nardus offer customers an extensive line of essential oils and lemongrass-based domestic products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                               <h3 class="widget-title">Useful Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="/about-us">About</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                                <h3 class="widget-title">Featured Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="/distributors-form"> Distributors </a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Get in touch</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>{{ config('app.location_2') }} <br> {{ config('app.location_1') }}</li>
                                    <li><i class="fa fa-phone"></i>{{ config('app.phone_2') }} </li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                </ul>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="{{ config('app.facebook') }}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="{{ config('app.twitter') }}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="{{ config('app.instagram') }}" data-tooltip="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright © {{ date("Y") }}&nbsp;<a href="/">Nardus</a> All Right Reserved </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>