
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
                <link rel="shortcut icon" href="{{asset('themes/portfolio/neo/images/favicon.ico')}}">
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
            </head>
        
            <body>
             
                @extends('theme::menu2.path')

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-9">
                        <div class="title-heading text-center">
                            <img src="images/hero/2.jpg" class="avatar avatar-ex-large rounded-circle shadow-md" alt="">
                            <h4 class="display-4 fw-bold my-5">Complete Solution for <br> Your Brand</h4>
                            <div class="mt-4">
                                <a href="{{('aboutus')}}" class="btn btn-pills btn-soft-primary">Check Our Works</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container-fluid">
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
                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/1.jpg" class="lightbox" title="">
                                    <img src="images/work/1.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/2.jpg" class="lightbox" title="">
                                    <img src="images/work/2.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/3.jpg" class="lightbox" title="">
                                    <img src="images/work/3.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/4.jpg" class="lightbox" title="">
                                    <img src="images/work/4.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["branding", "development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/5.jpg" class="lightbox" title="">
                                    <img src="images/work/5.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/6.jpg" class="lightbox" title="">
                                    <img src="images/work/6.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/7.jpg" class="lightbox" title="">
                                    <img src="images/work/7.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/8.jpg" class="lightbox" title="">
                                    <img src="images/work/8.jpg" class="img-fluid" alt="work-image">
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
                        <a href="portfolio-modern-five.html" class="btn btn-pills btn-soft-primary">See works</a>
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

        {{-- <!-- Footer Start -->
        <footer class="bg-light py-4">
            <div class="container text-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Porfo. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes-studio</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-4 mt-4 mt-sm-0">
                        <ul class="list-unstyled social-icon text-sm-end social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-dribbble" title="dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-facebook-f" title="facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-instagram" title="instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-twitter" title="twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-envelope" title="email"></i></a></li>
                        </ul>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i class="mdi mdi-arrow-up icons"></i></a>
        <!-- Back to top -->

        <!-- Style switcher -->
        <div id="style-switcher" class="bg-light border p-3" onclick="toggleSwitcher()">
            <div>
                <h6 class="title text-center">Select Your Color</h6>
                <ul class="pattern">
                    <li class="list-inline-item">
                        <a class="color1" href="javascript:void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color2" href="javascript:void(0);" onclick="setColor('blue')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color3" href="javascript:void(0);" onclick="setColor('purple')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color4" href="javascript:void(0);" onclick="setColor('red')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color5" href="javascript:void(0);" onclick="setColor('green')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color6" href="javascript:void(0);" onclick="setColor('cyan')"></a>
                    </li>
                </ul>

                <h6 class="title text-center pt-3 mb-0 border-top">Theme Option</h6>
                <ul class="text-center list-unstyled mb-0">
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary rtl-version t-rtl-light mt-2" onclick="setTheme('style-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary ltr-version t-ltr-light mt-2" onclick="setTheme('style')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-rtl-version t-rtl-dark mt-2" onclick="setTheme('style-dark-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-ltr-version t-ltr-dark mt-2" onclick="setTheme('style-dark')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">Dark</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">Light</a></li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript:void(0);" class="settings bg-white shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
            </div>
        </div>
        <!-- end Style switcher --> --}}
        
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

</body>

</html>
@endsection


        {{-- <!-- Javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Shuffle and Tobii -->
        <script src="js/shuffle.min.js"></script>
        <script src="js/tobii.min.js"></script>
        <script src="js/gallery.init.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
        
        <script>
            const tobii = new Tobii()
        </script>
    </body>

</html> --}}