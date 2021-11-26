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
                            <h1 class="page-title display-2 text-shadow-title text-center mb-0">About Us</h1>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center">
                            <h4 class="title mb-4">We build creative and modern portfolio</h4>
                            <p class="para-desc mx-auto text-muted">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success. We specialize in user interface design, including front-end development which we consider to be an integral part.</p>

                            <p class="para-desc mx-auto text-muted mb-0">Limitations bring out the best in a situation, which is why we keep Small Studio a nimble little setup with confident and innovative.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-12 mt-5">
                        <img src="{{asset('themes/portfolio/neo/images/laptop.png')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">What we offer ?</h4>
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
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Client's Review</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4">
                        <div class="tiny-three-item">
                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/01.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                        <p class="text-primary mb-0">- Thomas Israel <small class="text-muted">C.E.O</small></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/02.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                        <p class="text-primary mb-0">- Barbara McIntosh <small class="text-muted">M.D</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/03.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                        <p class="text-primary mb-0">- Carl Oliver <small class="text-muted">P.A</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/04.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                        <p class="text-primary mb-0">- Christa Smith <small class="text-muted">Manager</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/05.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                        <p class="text-primary mb-0">- Dean Tolle <small class="text-muted">Developer</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex customer-testi m-2">
                                    <img src="{{asset('themes/portfolio/neo/images/client/06.jpg')}}" class="avatar avatar-small me-3 rounded shadow" alt="">
                                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                        <p class="text-primary mb-0">- Jill Webb <small class="text-muted">Designer</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">Recent Articles</h4>
                            <p class="text-muted mx-auto para-desc mt-4">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 blog-post shadow rounded">
                            <div class="card-body p-4">
                                <ul class="list-unstyled d-flex justify-content-between mb-4">
                                    <li><a href="javascript:void(0)" class="text-primary small">Branding</a></li>
                                    <li class="text-muted small">20th February 2021</li>
                                </ul>
                                <img src="{{asset('themes/portfolio/neo/images/blog/1.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="mt-4">
                                    <h5><a href="javascript:void(0)" class="title text-dark mb-0">What is special about it?</a></h5>
                                    <p class="text-muted mb-2">Dummy text is also known as 'fill text'. It is said that song composers</p>
                                    <a href="javascript:void(0)" class="text-primary">Read more <i class="uil uil-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 blog-post shadow rounded">
                            <div class="card-body p-4">
                                <ul class="list-unstyled d-flex justify-content-between mb-4">
                                    <li><a href="javascript:void(0)" class="text-primary small">Designing</a></li>
                                    <li class="text-muted small">20th February 2021</li>
                                </ul>
                                <img src="{{asset('themes/portfolio/neo/images/blog/2.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="mt-4">
                                    <h5><a href="javascript:void(0)" class="title text-dark mb-0">The place easily mistaken</a></h5>
                                    <p class="text-muted mb-2">Dummy text is also known as 'fill text'. It is said that song composers</p>
                                    <a href="javascript:void(0)" class="text-primary">Read more <i class="uil uil-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 blog-post shadow rounded">
                            <div class="card-body p-4">
                                <ul class="list-unstyled d-flex justify-content-between mb-4">
                                    <li><a href="javascript:void(0)" class="text-primary small">Photography</a></li>
                                    <li class="text-muted small">20th February 2021</li>
                                </ul>
                                <img src="{{asset('themes/portfolio/neo/images/blog/3.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="mt-4">
                                    <h5><a href="javascript:void(0)" class="title text-dark mb-0">Information you need to know</a></h5>
                                    <p class="text-muted mb-2">Dummy text is also known as 'fill text'. It is said that song composers</p>
                                    <a href="javascript:void(0)" class="text-primary">Read more <i class="uil uil-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
        
{{-- 
        <!-- Footer Start -->
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