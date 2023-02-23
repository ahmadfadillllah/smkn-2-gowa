<header>
    <div id="main-menu"  class="main-menu-container">
        <div  class="main-menu">
            <div class="container">
                <div class="navbar-default">
                    <div class="navbar-header float-left">
                        <a class="navbar-brand text-uppercase" href="#"><img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/logo-full-light.png') }}" alt="logo"></a>
                    </div><!-- /.navbar-header -->
                    <div class="cart-search float-right ul-li">
                        <ul>
                            <li>
                                <button type="button" class="toggle-overlay search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                                <div class="search-body">
                                    <div class="search-form">
                                        <form action="#">
                                            <input class="search-input" type="search" placeholder="Search Here">
                                            <div class="outer-close toggle-overlay">
                                                <button type="button" class="search-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="log-in float-right">
                        <a  data-toggle="modal" data-target="#myModal" href="#">log in</a>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header backgroud-style">
                                        <div class="gradient-bg"></div>
                                        <div class="popup-logo">
                                            <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/logo.png') }}" alt="">
                                        </div>
                                        <div class="popup-text text-center">
                                            <h2> <span>Masuk</span> ke akunmu.</h2>
                                        </div>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        @include('notif.index')
                                        <div class="alt-text text-center"><a href="#">SIGN IN</a> </div>
                                        <form class="contact_form" action="{{ route('login.post') }}" method="POST">
                                            @csrf
                                            <div class="contact-info">
                                                <input class="name" name="email" type="email" placeholder="Masukkan Email">
                                            </div>
                                            <div class="contact-info">
                                                <input class="pass" name="password" type="password" placeholder="Masukkan Password">
                                            </div>
                                            <div class="nws-button text-center white text-capitalize">
                                                <button type="submit" value="Submit">Masuk  Sekarang</button>
                                            </div>
                                        </form>
                                        <div class="log-in-footer text-center">
                                            <p>Harap menjaga kerahasiaan akun.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <nav class="navbar-menu float-right">
                        <div class="nav-menu ul-li">
                            <ul>
                                <li><a href="{{ route('home.index') }}">Home</a></li>
                                <li><a href="{{ route('home.about') }}">Tentang</a></li>
                                <li><a href="{{ route('home.contact') }}">Saran/masukan</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="mobile-menu">
                        <div class="logo"><a href="index-1.html"><img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/logo-full-light.png') }}" alt="Logo"></a></div>
                        <nav>
                            <ul>
                                <li><a href="{{ route('home.index') }}">Home</a></li>
                                <li><a href="{{ route('home.about') }}">Tentang</a></li>
                                <li><a href="{{ route('home.contact') }}">Saran/masukan</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
