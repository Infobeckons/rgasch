@extends('theme::layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Porfo - Responsive Portfolio Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Minimal Portfolio Template" />
        <meta name="keywords" content="Portfolio, Minimal, Clean, Modern, Creative" />
        <meta content="Shreethemes-studio" name="author" />
        <meta content="support@shreethemes.in" name="mail" />
        <meta content="https://shreethemes.in/" name="website" />
        <meta content="3.1.0" name="version" />
        <!-- favicon -->
        <link rel="icon" href="{{ asset('themes/portfolio/images/favicon.ico') }}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('themes/portfolio/neo/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Tobii Lightbox -->
        <link href="{{asset('themes/portfolio/neo/css/tobii.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{asset('themes/portfolio/neo/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Main Css -->
        <link href="{{asset('themes/portfolio/neo/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{asset('themes/portfolio/neo/css/colors/default.css')}}" rel="stylesheet" id="color-opt">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

    </head>

    <body>
     
        @extends('theme::menu2.path')
        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" style="padding-top: 70px;">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h6>{{ theme('home_headline') }}</h6>
                            <h4 class="display-4 fw-bold my-4">{{ theme('home_subheadline') }}</h4>
                            <p class="text-muted para-desc">{{ theme('home_description') }}</p>
                            {{-- <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">Explore Works <span class="h5 mb-0 ms-1"><i class="uil uil-arrow-right align-middle"></i></span></a>
                            </div> --}}
                            <div class="mt-4">
                                <a href="{{ theme('home_cta_url') }}" class="btn btn-pills btn-primary" style="float:left;">
                                    {{ theme('home_cta') }}
                                </a>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-pills btn-primary" style="margin-left:30px; line-height:20px;">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="{{asset('themes/portfolio/neo/images/hero/1.png')}}" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="container-filter mb-0 categories-filter list-unstyled filter-options">
                                <li class="list-inline-item categories h6 position-relative text-dark active" data-group="all">All</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="branding">Branding</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="designing">Designing</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="photography">Photography</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="development">Development</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div id="grid" class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/1.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/1.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/2.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/2.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/3.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/3.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/4.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/4.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding", "development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/5.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/5.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/6.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/6.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/7.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/7.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/8.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/8.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="{{asset('themes/portfolio/neo/images/work/9.jpg')}}" class="lightbox" title="">
                                    <img src="{{asset('themes/portfolio/neo/images/work/9.jpg')}}" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                                
                <div class="row text-center">
                    <div class="col-12 mt-4 pt-2">
                        <a href="portfolio-creative-four.html" class="btn btn-pills btn-soft-primary">See works</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h6 class="text-muted font-weight-normal">Available for freelance projects</h6>
                            <h1 class="fw-bold display-5 my-4">Do you have designing project? <br> Let's talk.</h1>
                            <div class="mt-4 pt-2">
                                <a href="contact.html" class="btn btn-pills btn-primary"><span class="h5 mb-0 me-1"><i class="uil uil-comment align-middle"></i></span> Contact us</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

  

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i class="mdi mdi-arrow-up icons"></i></a>
        <!-- Back to top -->

       
        
        <!-- Javascript -->
        <script src="{{asset('themes/portfolio/neo/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Shuffle and Tobii -->
        <script src="{{asset('themes/portfolio/neo/js/shuffle.min.js')}}"></script>
        <script src="{{asset('themes/portfolio/neo/js/tobii.min.js')}}"></script>
        <script src="{{asset('themes/portfolio/neo/js/gallery.init.js')}}"></script>
        <!-- Switcher -->
        <script src="{{asset('themes/portfolio/neo/js/switcher.js')}}"></script>
        <!-- Main Js -->
        <script src="{{asset('themes/portfolio/neo/js/app.js')}}"></script>

        <script>
            const tobii = new Tobii()
        </script>

{{-- <script type="text/javascript">
	$("img").lazyload({
        duration : 200,
	    effect : "fadeIn"
	});
</script> --}}

    </body>

</html>
     @endsection