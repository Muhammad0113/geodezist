<!-- Header Start -->
<div class="header-area header-transparent">
        <div class="main-header  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('template.index1') }}"><img src="/img/logo/logo3.png" alt=""></a>
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
                                                <li><a href="#">{{ $menu->name }}</a>    
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
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li><a href="{{ route('citizens.index') }}">Murojaatlar</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('citizens.create') }}">{{ __('Rezume') }}</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Chiqish') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                    
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

