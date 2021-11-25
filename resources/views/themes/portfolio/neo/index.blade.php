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
        <link rel="shortcut icon" href="images/favicon.ico">
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
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="{{asset('themes/portfolio/neo/images/logo.png')}}" class="me-1" height="28" alt="">
                </a>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Home One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Home Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Home Three</a></li>
                                <li><a href="index-four.html" class="sub-menu-item">Home Four</a></li>
                                <li><a href="index-five.html" class="sub-menu-item">Home Five</a></li>
                                <li><a href="index-six.html" class="sub-menu-item">Home Six</a></li>
                                <li><a href="index-seven.html" class="sub-menu-item">Home Seven</a></li>
                                <li><a href="index-eight.html" class="sub-menu-item">Home Eight</a></li>
                                        <li><a href="index-boxed.html" class="sub-menu-item">Home Boxed</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Company</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About us</a></li>
                                <li><a href="services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="team.html" class="sub-menu-item">Team</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Classic </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="portfolio-classic-two.html" class="sub-menu-item"> Classic Two Col</a></li>
                                        <li><a href="portfolio-classic-three.html" class="sub-menu-item"> Classic Three Col</a></li>
                                        <li><a href="portfolio-classic-four.html" class="sub-menu-item"> Classic Four Col</a></li>
                                        <li><a href="portfolio-classic-five.html" class="sub-menu-item"> Classic Five Col</a></li>
                                        <li><a href="portfolio-classic-six.html" class="sub-menu-item"> Classic Six Col</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Modern </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="portfolio-modern-two.html" class="sub-menu-item"> Modern Two Col</a></li>
                                        <li><a href="portfolio-modern-three.html" class="sub-menu-item"> Modern Three Col</a></li>
                                        <li><a href="portfolio-modern-four.html" class="sub-menu-item"> Modern Four Col</a></li>
                                        <li><a href="portfolio-modern-five.html" class="sub-menu-item"> Modern Five Col</a></li>
                                        <li><a href="portfolio-modern-six.html" class="sub-menu-item"> Modern Six Col</a></li>
                                    </ul>
                                </li>                                

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Creative </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="portfolio-creative-two.html" class="sub-menu-item"> Creative Two Col</a></li>
                                        <li><a href="portfolio-creative-three.html" class="sub-menu-item"> Creative Three Col</a></li>
                                        <li><a href="portfolio-creative-four.html" class="sub-menu-item"> Creative Four Col</a></li>
                                        <li><a href="portfolio-creative-five.html" class="sub-menu-item"> Creative Five Col</a></li>
                                        <li><a href="portfolio-creative-six.html" class="sub-menu-item"> Creative Six Col</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Masonry </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item"> Masonry Two Col</a></li>
                                        <li><a href="portfolio-masonry-three.html" class="sub-menu-item"> Masonry Three Col</a></li>
                                        <li><a href="portfolio-masonry-four.html" class="sub-menu-item"> Masonry Four Col</a></li>
                                        <li><a href="portfolio-masonry-five.html" class="sub-menu-item"> Masonry Five Col</a></li>
                                        <li><a href="portfolio-masonry-six.html" class="sub-menu-item"> Masonry Six Col</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Portfolio Detail</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Detail One</a></li>
                                        <li><a href="portfolio-detail-two.html" class="sub-menu-item">Detail Two</a></li>
                                        <li><a href="portfolio-detail-three.html" class="sub-menu-item">Detail Three</a></li>
                                        <li><a href="portfolio-detail-four.html" class="sub-menu-item">Detail Four</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item">Blogs & Articles</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h6>Designer, Developer, Minimalist</h6>
                            <h4 class="display-4 fw-bold my-4">A Full Service <br> Digital Agency</h4>
                            <p class="text-muted para-desc">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">Explore Works <span class="h5 mb-0 ms-1"><i class="uil uil-arrow-right align-middle"></i></span></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="images/hero/1.png" class="img-fluid" alt="">
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
                                <a href="{{asset('themes')}}images/work/1.jpg" class="lightbox" title="">
                                    <img src="images/work/1.jpg" class="img-fluid" alt="work-image">
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["development"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding", "development"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
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

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded shadow">
                            <div class="card-body p-0">
                                <a href="images/work/9.jpg" class="lightbox" title="">
                                    <img src="images/work/9.jpg" class="img-fluid" alt="work-image">
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
        <!-- end Style switcher -->
        
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