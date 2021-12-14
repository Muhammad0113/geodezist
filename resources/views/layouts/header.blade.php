<!-- Header Start -->
<div class="header-area header-transparent">
        <div class="main-header  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('template.index') }}"><img src="/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="menu-main d-flex align-items-center justify-content-end">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">  
                                    <li class="active"><a href="{{ route('template.index') }}">Home</a></li>
                                    <li><a href="{{ route('template.about') }}">About</a></li>
                                    <li><a href="{{ route('template.services') }}">Services</a></li>
                                    <li><a href="{{ route('template.blog') }}">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('template.blog') }}">Blog</a></li>
                                            <li><a href="{{ route('template.blog_details') }}">Blog Details</a></li>
                                            <li><a href="{{ route('template.elements') }}">Element</a></li>
                                            <li><a href="{{ route('template.apply') }}">Apply Now</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('template.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-btn f-right d-none d-lg-block">
                            <a href="#" class="btn header-btn">+880.762.009.00 </a>
                        </div>
                    </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Header End -->

