<header class="header-area header-style-1 header-height-2 px-20 shadow-sm">
    <style>
        /* Hamburger menu visibility on mobile */
@media (max-width: 1024px) {
    .d-lg-none {
        display: block;
    }

    .d-lg-block {
        display: none;
    }

    /* Mobile menu visibility */
    #mobile-menu {
        display: none;
    }

    .mobile-menu.active {
        display: block;
    }
}

    </style>
    <div class="header-middle py-3">
        <div class="container">
            <div class="header-wrap flex justify-between items-center">
                <div class="logo w-[6rem]">
                    <h6>VECOM</h6>
                </div>

                <!-- Desktop Search Bar -->
                <div class="search-style-1 flex-grow px-20 d-none d-lg-block">
                    <form action="{{ route('home') }}" class="w-100">
                        <input id="search" name="search" type="text" placeholder="Search for any product, category, brand..."/>
                    </form>
                </div>

                <!-- Desktop Account & Cart -->
                <div class="header-action-right">
                    <div class="header-action-2">
                        @auth
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2">
                                <nav>
                                    <ul>
                                        <li>
                                            <h1 class="text-black font-bold text-[1rem]">Hi, {{ Auth::user()->name }}</h1>
                                        </li>
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                @if (Auth::user()->is_admin)
                                                    <li><a href="/admin">Admin Dashboard</a></li>
                                                @endif
                                                <li><a href="{{ route('dashboard') }}">Orders Dashboard</a></li>
                                                <li><a href="{{ route('profile.edit') }}">Account Settings</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="pr-4 text-md font-semibold">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-sm btn-default">Register</a>
                            @endif
                        @endauth
                    </div>

                    <!-- Cart Icon -->
                    <div class="header-action-icon-2 ml-10">
                        <a class="mini-cart-icon" href="{{ route('cart') }}">
                            <i class="fi-rs-shopping-cart text-3xl"></i>
                            <span class="pro-count blue">{{ Cart::count() }}</span>
                        </a>
                    </div>
                    <!-- Hamburger Icon (For Mobile) -->
                <div class="d-sm-block">
                    <button class="hamburger-btn" id="hamburger-menu-btn">
                        <i class="fi-rs-menu"></i>
                    </button>
                </div>
            </div>
                </div>

                <!-- Hamburger Icon (For Mobile) -->
                <div class="d-lg-none">
                    <button class="hamburger-btn" id="hamburger-menu-btn">
                        <i class="fi-rs-menu"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div class="mobile-menu d-lg-none" id="mobile-menu">
                <ul>
                    @auth
                        <li><h1 class="text-black font-bold">Hi, {{ Auth::user()->name }}</h1></li>
                        <li><a href="#">My Account</a>
                            <ul class="sub-menu">
                                @if (Auth::user()->is_admin)
                                    <li><a href="/admin">Admin Dashboard</a></li>
                                @endif
                                <li><a href="{{ route('dashboard') }}">Orders Dashboard</a></li>
                                <li><a href="{{ route('profile.edit') }}">Account Settings</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                    <li><a href="{{ route('cart') }}">Cart ({{ Cart::count() }})</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>
<script>
    document.getElementById('hamburger-menu-btn').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('active');
    });
</script>
