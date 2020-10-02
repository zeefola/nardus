@extends('layouts.frontend')

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Distributors' , 'subtitle' => 'Distributors Form'])
@endsection

@section('main_content')

    <!-- contactbox-section -->
    <section class="ttm-row contact-form-section clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="spacing-6 ttm-bgcolor-grey mt-0 mb-0">
                        @includeIf('layouts.error_template')
                        <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post"
                            action="/distributors-form">
                            {{ csrf_field() }}
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="surname" type="text" class="form-control with-border bg-white"
                                        placeholder=" Surname*">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="othername" type="text" class="form-control with-border bg-white"
                                        placeholder=" Other Names*">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone Number*"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="email" type="text" placeholder="Email Address*"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="dob" type="text" placeholder="Date of Birth*" onfocus="(this.type='date')"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="occupation" type="text" placeholder="Occupation*"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control with-border bg-white" name="gender">
                                        <option value=" "> Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input name="business_address" type="text" placeholder="Business Address"
                                        class="form-control with-border bg-white">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input name="home_address" type="text" placeholder="Home Address"
                                        class="form-control with-border bg-white">
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
                <div class="col-lg-2">
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- contactbox-section end -->


@endsection
