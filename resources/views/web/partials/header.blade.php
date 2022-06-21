<header class="header">
    <div class="container">
        <section class="wrapper">
            <div class="header-item-left">
                <a href="{{URL::to('/')}}" class="brand">
                    <img src="{{URL::to('public/asset/web/assets/images/logo.png')}}" alt="">
                </a>
            </div>
            <!-- Navbar Section -->
            <div class="header-item-center">
                <div class="overlay"></div>
                <nav class="menu" id="menu">
                    <div class="menu-mobile-header">
                        <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
                        <div class="menu-mobile-title"></div>
                        <button type="button" class="menu-mobile-close">x</button>
                    </div>
                    <ul class="menu-section">
                        <li class="menu-item "><a href="{{URL::to('/')}}">Home</a></li>
                        <li class="menu-item-has-children head_menu_list">
                            <a href="{{URL::to('service')}}">Services<i class="ion ion-ios-arrow-down"></i></a>
                        </li>
                        <li class="menu-item-has-children head_menu_list">
                            <a href="{{URL::to('about')}}">About us <i class="ion ion-ios-arrow-down"></i></a>
                        </li>
                        <!-- <li class="menu-item-has-children">
                            <a href="{{URL::to('contact')}}">Contact us <i class="ion ion-ios-arrow-down"></i></a>
                        </li> -->
                        <!-- <li class="menu-item-has-children">
                            <a href="{{URL::to('career')}}">Career <i class="ion ion-ios-arrow-down"></i></a>
                        </li> -->
                        <li class="menu-item"><a href="{{URL::to('news')}}">News/Blog</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-item-right">
                <a href="#" class="menu-icon"><i class="ion ion-md-search"></i></a>
                <a href="#" class="menu-icon"><i class="ion ion-md-heart"></i></a>
                <a href="#" class="menu-icon"><i class="ion ion-md-cart"></i></a>
                <button type="button" class="menu-mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </section>
    </div>
</header>
