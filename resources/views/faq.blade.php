@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | FAQ
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'FAQ\'s' , 'subtitle' => 'FAQ'])
@endsection

@section('main_content')
    <!-- services-section -->
    <section class="ttm-row faqpage-section clearfix" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center clearfix">
                        <div class="title-header mb-50">
                            <h5>WHAT WE OFFER</h5>
                            <h2 class="title">Do you have any Questions?</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid" src="/images/question.jpg" title="single-img-eight" alt="single-img-eight">
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
                <div class="col-lg-6" >
                    <!-- acadion -->
                    @foreach ($datas as $data)
                        <div class="accordion grey-background res-991-mt-30">
                            <!-- toggle -->
                            <div class="toggle">
                                <div class="toggle-title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" itemprop="name">
                                        {{ $data->question }} </a>
                                </div>
                                <div class="toggle-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="mb-0"  itemprop="text"> {{ $data->answer }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- toggle end -->
                        </div><!-- acadion  end-->
                    @endforeach
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- services-section end -->
@endsection
