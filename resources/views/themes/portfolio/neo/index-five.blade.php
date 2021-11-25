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
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Tobii Lightbox -->
        <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="images/logo.png" class="me-1" height="28" alt="">
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
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-9">
                        <div class="title-heading text-center">
                            <img src="images/hero/3.jpg" class="avatar avatar-ex-large rounded-circle shadow-md" alt="">
                            <h4 class="display-4 fw-bold mt-4">Jessie Young</h4>
                            <p class="text-muted mx-auto para-desc mt-4">Porfo is a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">Hire me</a>
                            </div>
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
                            <img src="images/hero/3a.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                        </div>
                    </div><!--end col-->

                    <div class="col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title">
                            <h4 class="title mb-4">I Am <span class="text-primary typed-five"></span></h4>
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
                                <h5 class="mt-4"><a href="services.html" class="title text-dark">Digital Design</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="services.html" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-clipboard-alt"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="services.html" class="title text-dark">User Interface</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="services.html" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-credit-card-search"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="services.html" class="title text-dark">Photography</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="services.html" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-ruler-combined"></i>
                            </div>

                            <div class="card-body p-0 content">
                                <h5 class="mt-4"><a href="services.html" class="title text-dark">Digital Marketing</a></h5>
                                <p class="text-muted">The most well-known which is said to have originated</p>

                                <a href="services.html" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4 filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="container-filter mb-0 categories-filter list-unstyled filter-options">
                                <li class="list-inline-item categories h6 position-relative text-dark active" data-group="all">All</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="branding">Branding</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="designing">Designing</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="photography">Photography</li>
                                <li class="list-inline-item categories h6 position-relative text-dark" data-group="development">Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="grid" class="row" data-masonry='{"percentPosition": true }'>
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/10.jpg" class="lightbox" title="">
                                    <img src="images/work/10.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/2.jpg" class="lightbox" title="">
                                    <img src="images/work/2.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Mockup Collection</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Mockup</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/11.jpg" class="lightbox" title="">
                                    <img src="images/work/11.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Abstract images</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Abstract</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/12.jpg" class="lightbox" title="">
                                    <img src="images/work/12.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Yellow bg with Books</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Books</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/13.jpg" class="lightbox" title="">
                                    <img src="images/work/13.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Company V-card</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">V-card</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/6.jpg" class="lightbox" title="">
                                    <img src="images/work/6.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Mockup box with paints</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Photography</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/7.jpg" class="lightbox" title="">
                                    <img src="images/work/7.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Coffee cup</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Cups</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/14.jpg" class="lightbox" title="">
                                    <img src="images/work/14.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Yellow bg with Books</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Books</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/8.jpg" class="lightbox" title="">
                                    <img src="images/work/8.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Pen and article</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Article</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/9.jpg" class="lightbox" title="">
                                    <img src="images/work/9.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Yellow bg with Books</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Books</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
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
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/15.jpg" class="lightbox" title="">
                                    <img src="images/work/15.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Mockup Collection</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Mockup</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="images/work/16.jpg" class="lightbox" title="">
                                    <img src="images/work/16.jpg" class="img-fluid" alt="work-image">
                                </a>
                                <div class="content bg-white p-3 rounded shadow">
                                    <h5><a href="javascript:void(0)" class="text-dark title">Yellow bg with Books</a></h5>
                                    <h6 class="text-muted font-weight-normal tag mb-0">Books</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                
                <div class="row text-center">
                    <div class="col-12 mt-4 pt-2">
                        <a href="portfolio-classic-six.html" class="btn btn-pills btn-soft-primary">See works</a>
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
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Shuffle and Tobii -->
        <script src="js/shuffle.min.js"></script>
        <script src="js/tobii.min.js"></script>
        <script src="js/gallery.init.js"></script>
        <!-- Typed -->
        <script src="js/typed.js"></script>
        <script src="js/typed.init.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>

        <script>
            const tobii = new Tobii()
        </script>
    </body>

</html>