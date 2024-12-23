<header class="header-area header-style-1 header-height-2 px-4 sm:px-6 lg:px-20 shadow-sm">
    <div class="header-middle py-3">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="logo w-24 sm:w-32">
                    <h6 class="text-lg font-semibold">VECOM</h6>
                </div>

                <!-- Desktop Search Bar -->
                <div class="hidden lg:block flex-grow px-4 sm:px-8">
                    <form action="{{ route('home') }}" class="w-full">
                        <input id="search" name="search" type="text" placeholder="Search for any product, category, brand..." class="w-full p-2 rounded border border-gray-300"/>
                    </form>
                </div>

                <!-- Desktop Account & Cart -->
                <div class="flex items-center space-x-4">
                    <!-- Authenticated User Section -->
                    @auth
                        <div class="">
                            <button class="text-black font-bold text-lg">Hi, {{ Auth::user()->name }}</button>
                            <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-lg w-40">
                                <ul class="d-none">
                                    <li><a href="#">My Account</a></li>
                                    @if (Auth::user()->is_admin)
                                        <li><a href="/admin">Admin Dashboard</a></li>
                                    @endif
                                    <li><a href="{{ route('dashboard') }}">Orders Dashboard</a></li>
                                    <li><a href="{{ route('profile.edit') }}">Account Settings</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="flex space-x-4">
                            <a href="{{ route('login') }}" class="text-md font-semibold">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-sm btn-default">Register</a>
                            @endif
                        </div>
                    @endauth

                    <!-- Cart Icon -->
                    <div class="relative">
                        <a href="{{ route('cart') }}" class="text-3xl">
                            <i class="fi-rs-shopping-cart"></i>
                            <span class="absolute top-0 right-0 bg-blue-500 text-white rounded-full text-xs px-2 py-1">{{ Cart::count() }}</span>
                        </a>
                    </div>
                </div>

                <!-- Mobile Hamburger Icon -->
                    <!-- <div class=""> -->
                <div class="sm:block relative">
                    <button id="hamburger-menu-btn" class="text-3xl">
                        <i class="fi-rs-user"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="mobile-menu hidden absolute bg-white p-20 h-80 w-full z-60" id="mobile-menu">
            <ul class="space-y-4 py-4">
                @auth
                    <li><h1 class="text-black font-bold">Hi, {{ Auth::user()->name }}</h1></li>
                    <li><a href="#">My Account</a>
                        <ul class="space-y-2 pl-4">
                            @if (Auth::user()->is_admin)
                                <li><a href="/admin">Admin Dashboard</a></li>
                            @endif
                            <li><a href="{{ route('dashboard') }}">Orders Dashboard</a></li>
                            <li><a href="{{ route('profile.edit') }}">Account Settings</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
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
</header>

<script>
    // Toggle Mobile Menu
    document.getElementById("hamburger-menu-btn").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
