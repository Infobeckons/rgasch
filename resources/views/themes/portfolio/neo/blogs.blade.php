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
                            <h1 class="page-title display-2 text-shadow-title text-center mb-0">Blogs & Articles</h1>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
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
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
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
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
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
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 blog-post shadow rounded">
                            <div class="card-body p-4">
                                <ul class="list-unstyled d-flex justify-content-between mb-4">
                                    <li><a href="javascript:void(0)" class="text-primary small">Branding</a></li>
                                    <li class="text-muted small">20th February 2021</li>
                                </ul>
                                <img src="{{asset('themes/portfolio/neo/images/blog/4.jpg')}}" class="img-fluid rounded" alt="">
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
                                <img src="{{asset('themes/portfolio/neo/images/blog/5.jpg')}}" class="img-fluid rounded" alt="">
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
                                <img src="{{asset('themes/portfolio/neo/images/blog/6.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="mt-4">
                                    <h5><a href="javascript:void(0)" class="title text-dark mb-0">Information you need to know</a></h5>
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
                                    <li><a href="javascript:void(0)" class="text-primary small">Branding</a></li>
                                    <li class="text-muted small">20th February 2021</li>
                                </ul>
                                <img src="{{asset('themes/portfolio/neo/images/blog/7.jpg')}}" class="img-fluid rounded" alt="">
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
                                <img src="{{asset('themes/portfolio/neo/images/blog/8.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="mt-4">
                                    <h5><a href="javascript:void(0)" class="title text-dark mb-0">The place easily mistaken</a></h5>
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
