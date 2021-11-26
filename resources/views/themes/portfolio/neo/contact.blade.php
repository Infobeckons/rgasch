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
                            <h1 class="page-title display-2 text-shadow-title text-center mb-0">Contact Us</h1>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-phone"></i>
                            </div>

                            <div class="card-body p-0 content mt-4">
                                <h5 class="mb-4">Phone</h5>
                                <p class="text-muted">Start working with Porfo that can provide everything</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-envelope"></i>
                            </div>

                            <div class="card-body p-0 content mt-4">
                                <h5 class="mb-4">Email</h5>
                                <p class="text-muted">Start working with Porfo that can provide everything</p>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                            <div class="icons rounded h2 text-center text-primary px-3 mx-auto">
                                <i class="uil uil-map-marker"></i>
                            </div>

                            <div class="card-body p-0 content mt-4">
                                <h5 class="mb-4">Location</h5>
                                <p class="text-muted">C/54 Northwest Freeway, Suite 558, Houston, USA 485</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#watchlocation" class="video-play-icon text-primary">View on Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-end">
                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                        <div class="card shadow rounded border-0">
                            <div class="card-body py-5">
                                <h4 class="card-title">Get In Touch !</h4>
                                <div class="custom-form mt-3">
                                    <form method="post" name="myForm" onsubmit="return validateForm()">
                                        <p id="error-msg"></p>
                                        <div id="simple-msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                                    </div>
                                                </div> 
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Subject</label>
                                                    <div class="form-icon">
                                                        <input name="subject" id="subject" class="form-control" placeholder="subject :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end custom-form-->
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                        <img src="{{asset('themes/portfolio/neo/images/contact.svg')}}" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
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

        <!-- Video Popup Start -->
        <div class="modal fade" id="watchlocation" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content video-modal rounded overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" title="YouTube video" allowfullscreen></iframe>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Video Popup End -->

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
         --}}
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