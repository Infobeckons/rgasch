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
        <section class="bg-half-100 d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading">
                            <h1 class="page-title display-2 text-shadow-title text-center mb-0">Services</h1>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="me-lg-4">
                            <img src="{{ asset('themes/portfolio/neo/images/1.jpg')}}" class="img-fluid rounded-md shadow-lg" alt="">
                        </div>
                    </div><!--end col-->

                    <div class="col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title">
                            <h4 class="title mb-4">Our Story : Porfo</h4>
                            <p class="text-muted para-desc mt-4">I’m probably the most passionate designer you will ever work with. I help agencies & brands like Iflix, Samsung and others to turn their ideas into designs. It’s time to see some work. Here are few shots, pitch work and design explorations I’ve done for clients.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">See Portfolio</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">Services</h4>
                            <p class="text-muted mx-auto para-desc mt-4">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-airplay"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Digital Design</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-clipboard-alt"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">User Interface</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-credit-card-search"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Photography</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-ruler-combined"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Digital Marketing</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-airplay"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Branding</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-clipboard-alt"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Web Design</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-credit-card-search"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Development</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-ruler-combined"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Social Marketing</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
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