@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Contact Us
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Contact Us' , 'subtitle' => 'Contact'])
@endsection

@section('main_content')

    <!-- contactbox-section -->
    <section class="ttm-row contact-box-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon p-15 ttm-bgcolor-white mb-20">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-sm">
                                <i class="flaticon flaticon-phone-call"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Phone</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>{{ config('app.phone_1') }}</p>
                                <p>{{ config('app.phone_2') }}</p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon p-15 ttm-bgcolor-white mb-20">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-sm">
                                <i class="flaticon flaticon-envelope"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content" style="padding-bottom: 27px;">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Email Us</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>
                                <p>{{ config('app.email') }}</p>
                                </p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-lg-4">
                    <!--  featured-icon-box -->
                    <div class="featured-icon-box left-icon p-15 ttm-bgcolor-white mb-20">
                        <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-sm">
                                <i class="flaticon flaticon-placeholder"></i><!--  ttm-icon -->
                            </div>
                        </div>
                        <div class="featured-content">
                            <!--  featured-content -->
                            <div class="featured-title">
                                <!--  featured-title -->
                                <h5>Address</h5>
                            </div>
                            <div class="featured-desc">
                                <!--  featured-desc -->
                                <p>{{ config('app.location_2') }}, {{ config('app.location_1') }}.</p>
                            </div>
                        </div>
                    </div><!--  featured-icon-box END -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- contactbox-section end -->
    <!-- contactbox-section -->
    <section class="ttm-row contact-form-section clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                    </div><!-- section title end -->
                    <p>Our customer support team is happy to answer your questions. Fill out the form, and we’ll be in touch
                        within the day.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon style9 ttm-bgcolor-white mb-30">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-support"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">24/7 Customer Support</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>We have an experienced customer support team that responds to inquiries in real
                                            time.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-12">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon style9 ttm-bgcolor-white">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-lorry"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <!--  featured-content -->
                                    <div class="featured-title">
                                        <!--  featured-title -->
                                        <h5 class="mb-5">Excellent Delivery Service</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <!--  featured-desc -->
                                        <p>A smart nationwide logistics network that guarantees safe and fast delivery.</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="spacing-6 ttm-bgcolor-grey mt-0 mb-0">
                        @includeIf('layouts.error_template')
                        <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="/contact-us">
                            {{ csrf_field() }}
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="fullname" type="text" class="form-control with-border bg-white"
                                        placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone Number*"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input name="email" type="text" placeholder="Email Address*"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupSelect01" class="input-group-text"
                                                style="color: rgb(146, 117, 125); font-size: 0.9rem;">Category</label>
                                        </div>
                                        <select id="inputGroupSelect01" class="custom-select" name="category">
                                            <option value=" "> </option>
                                            <option value="inquiry">Inquiry</option>
                                            <option value="complain">Complain</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input name="subject" type="text" placeholder="Subject"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" rows="4" placeholder="Write A Message..."
                                        class="form-control with-border bg-white"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="text-left">
                                    <button type="submit" id="submit"
                                        class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey w-100" value="">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- contactbox-section end -->

@endsection
