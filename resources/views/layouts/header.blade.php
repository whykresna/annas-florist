<header class="header-area">

    <!-- ***** Top Header Area ***** -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <a href="mailto:annasfloristjember@gmail.com" data-toggle="tooltip" data-placement="bottom" title="annasfloristjember@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: annasfloristjember@gmail.com</span></a>
                            <a href="tel:+6289683792377" data-toggle="tooltip" data-placement="bottom" title="+62 896 8379 2377"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +62 896 8379 2377</span></a>
                        </div>

                        <!-- Top Header Content -->
                        <div class="top-header-meta d-flex">
                            <!-- Login -->
                            @auth
                                <div class="login">
                                    <a href={{ url('/admin/dashboard') }}><i class="fa fa-columns" aria-hidden="true"></i> <span>Dashboard</span></a>
                                </div>
                            @endauth
                            @guest
                                <div class="login">
                                    <a href={{ url('/login') }}><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                            @endguest
                            <!-- Cart -->
                            <div class="cart">
                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Navbar Area ***** -->
    <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="alazeaNav">

                    <!-- Nav Brand -->
                    <a href={{ url('/') }} class="nav-brand"><h3 style="color: #ffffff; font-weight: bold">ANNAS<span style="color: #70c745">FLORIST</span></h3></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href={{ url('/') }}>Home</a></li>
                                <li><a href={{ url('/shop') }}>Shop</a></li>
                                <li><a href={{ url('/portfolio') }}>Portfolio</a></li>
                                <li><a href={{ url('/blog') }}>Blog</a></li>
                                <li><a href={{ url('/contact') }}>Contact</a></li>
                            </ul>

                            <!-- Search Icon -->
                            <div id="searchIcon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
