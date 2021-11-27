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
                            <img src="{{asset('themes/portfolio/neo/images/blog/s1.jpg')}}" class="img-fluid rounded shadow mt-4" alt="">
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
                                                        <img src="{{asset('themes/portfolio/neo/images/client/01.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
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
                                                        <img src="{{asset('themes/portfolio/neo/images/client/02.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
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
                                                        <img src="{{asset('themes/portfolio/neo/images/client/03.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
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
                                                                <img src="{{asset('themes/portfolio/neo/images/client/01.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
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
                                    </div>
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
  