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

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="title-heading">
                            <h4 class="mb-0">Information you need to know</h4>
                            <ul class="list-unstyled mt-3 mb-0">
                                <li class="list-inline-item small font-weight-normal user text-muted me-2"><i class="uil uil-user text-dark"></i> Calvin Carlo</li>
                                <li class="list-inline-item small font-weight-normal tag text-muted me-2"><i class="uil uil-bookmark text-dark"></i> Branding</li>
                                <li class="list-inline-item small font-weight-normal date text-muted"><i class="uil uil-calendar-alt text-dark"></i> 13th August, 2019</li>
                            </ul>
                            <img src="images/blog/s1.jpg" class="img-fluid rounded shadow mt-4" alt="">
                            <p class="text-muted mt-4">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                            <p class="text-muted">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                            <p class="text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). For this reason, dummy text usually consists of a more or less random series of words or syllables. This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces.</p>
                        
                        
                            <div class="card border-0 mt-4">
                                <div class="card-body p-0">
                                    <h6 class="card-title mb-0">Comments :</h6>

                                    <ul class="media-list list-unstyled mb-0">
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading font-weight-normal text-dark">Lorenzo Peterson</a></h6>
                                                        <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                            </div>
                                        </li>
        
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="images/client/02.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading font-weight-normal text-dark">Tammy Camacho</a></h6>
                                                        <small class="text-muted">15th August, 2019 at 05:44 pm</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                            </div>
                                        </li>
                                        
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="images/client/03.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading font-weight-normal text-dark">Tammy Camacho</a></h6>
                                                        <small class="text-muted">16th August, 2019 at 03:44 pm</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                            </div>
        
                                            <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                                <li class="mt-4">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a class="pe-3" href="#">
                                                                <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                            </a>
                                                            <div class="commentor-detail">
                                                                <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading font-weight-normal text-dark">Lorenzo Peterson</a></h6>
                                                                <small class="text-muted">17th August, 2019 at 01:25 pm</small>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                    <div class="mt-3">
                                                        <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card border-0 mt-4">
                                <div class="card-body p-0">
                                    <h6 class="card-title mb-0">Leave A Comment :</h6>

                                    <form class="mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label">Your Comment</label>
                                                    <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control" required=""></textarea>
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <input id="email" type="email" placeholder="Email" name="email" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-md-12">
                                                <div class="send">
                                                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div>   
                            
                            <div class="card border-0 mt-5">
                                <div class="card-body p-0">
                                    <h6 class="card-title mb-0">Related Post :</h6>
                                    
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                            <div class="card border-0 blog-post shadow rounded">
                                                <div class="card-body p-4">
                                                    <ul class="list-unstyled d-flex justify-content-between mb-4">
                                                        <li><a href="javascript:void(0)" class="text-primary small">Branding</a></li>
                                                        <li class="text-muted small">20th February 2021</li>
                                                    </ul>
                                                    <img src="images/blog/1.jpg" class="img-fluid rounded" alt="">
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
                                                    <img src="images/blog/2.jpg" class="img-fluid rounded" alt="">
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
                                                    <img src="images/blog/3.jpg" class="img-fluid rounded" alt="">
                                                    <div class="mt-4">
                                                        <h5><a href="javascript:void(0)" class="title text-dark mb-0">Information you need to know</a></h5>
                                                        <p class="text-muted mb-2">Dummy text is also known as 'fill text'. It is said that song composers</p>
                                                        <a href="javascript:void(0)" class="text-primary">Read more <i class="uil uil-arrow-right align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                </div>
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
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

</html>