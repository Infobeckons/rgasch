
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="{{('index')}}">
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
                                <li><a href="{{('index')}}" class="sub-menu-item">Home One</a></li>
                                <li><a href="{{('index-two')}}" class="sub-menu-item">Home Two</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Company</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{('aboutus')}}" class="sub-menu-item">About us</a></li>
                                <li><a href="{{('services')}}" class="sub-menu-item">Services</a></li>
                                <li><a href="{{('team')}}" class="sub-menu-item">Team</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            {{-- <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span> --}}
                            <ul class="submenu">
                                {{-- <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Classic </a><span class="submenu-arrow"></span> --}}
                                    {{-- <ul class="submenu">
                                        <li><a href="{{('portfolio-classic-two')}}" class="sub-menu-item"> Classic Two Col</a></li>
                                    </ul> --}}
                                {{-- </li> --}}

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Modern </a><span class="submenu-arrow"></span>
                                    {{-- <ul class="submenu">
                                        <li><a href="{{('portfolio-modern-two')}}" class="sub-menu-item"> Modern Two Col</a></li>
                                    </ul> --}}
                                </li>                                

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Creative </a><span class="submenu-arrow"></span>
                                    {{-- <ul class="submenu">
                                        <li><a href="{{('portfolio-creative-two')}}" class="sub-menu-item"> Creative Two Col</a></li>
                                    </ul> --}}
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Masonry </a><span class="submenu-arrow"></span>
                                    {{-- <ul class="submenu">
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item"> Masonry Two Col</a></li>
                                    </ul> --}}
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Portfolio Detail</a><span class="submenu-arrow"></span>
                                    {{-- <ul class="submenu">
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Detail One</a></li>
                                    </ul>   --}}
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{('blog')}}" class="sub-menu-item">Blogs & Articles</a></li>
                                <li><a href="{{('blog-detail')}}" class="sub-menu-item">Blog Detail</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('wave.contact')}}" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
