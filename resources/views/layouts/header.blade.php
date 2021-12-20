<!-- Header Start -->
<div class="header-area header-transparent">
        <div class="main-header  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('template.index1') }}"><img src="/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="menu-main d-flex align-items-center justify-content-end">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">

                                    @foreach($menus as $menu)      
                                            @if(!$menu->menu_id)
                                                <li><a href="{{ route('menus.show', ['menu' => $menu->slug]) }}">{{ $menu->name }}</a>    
                                            @endif
                                            @if($menu->is_submenu)
                                                <ul class="submenu">
                                                @foreach($menus as $menu_)
                                                    @if($menu->id == $menu_->menu_id)
                                                        <li><a href="{{ route('menus.show', ['menu' => $menu_->slug]) }}">{{ $menu_->name }}</a></li>
                                                    @endif
                                                @endforeach
                                                </ul>
                                            @endif
                                            </li>
                                    @endforeach  
                       
                                </ul>
                            </nav>
                        </div>
                        <!-- <div class="header-right-btn f-right d-none d-lg-block">
                            <a href="#" class="btn header-btn">+880.762.009.00 </a>
                        </div> -->
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

