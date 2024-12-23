<x-app-layout>
    <section class="mt-50 mb-50">
        <!-- <div class="search-style-1 flex-grow px-20 d-none d-sm-block m-10">
                    <form action="{{ route('home') }}" class="w-100">
                        <input id="search" name="search" type="text" placeholder="Search for any product, category, brand..."/>
                    </form>
                </div>
                <div class="max-w-2xl mx-auto"> -->
<div class="container-fluid mb-50">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
    <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-80 md:h-96" data-carousel-inner>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1580828343064-fde4fc206bc6?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"class="object-cover w-full h-full" alt="Slide 1">
                <!-- <img src="/slider.jpg" class="object-cover w-full h-full" alt="Slide 1"> -->
                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-bold text-white md:text-2xl dark:text-danger-300">Vert Ecommerce Best Mini Selling Plateform</span>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <!-- <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" -->
                  <img src="https://www.addwebsolution.com/app/uploads/2024/03/eCommerce-Solution-webp-web.webp"
                    class="object-cover w-full h-full" alt="Slide 2">
                    <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold text-white md:text-2xl dark:text-gray-800">Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/public/assets/img/slider/slider-1.png"
                    class="object-cover w-full h-full" alt="Slide 3">
                    <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold text-white md:text-2xl dark:text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-warning-200/50 rounded-full hover:bg-warning-300 focus:outline-none transition"
            data-carousel-prev>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button type="button"
            class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-warning-200/50 rounded-full hover:bg-warning-300 focus:outline-none transition"
            data-carousel-next>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
<div class="col-lg-6 col-sm-12">
<!-- <img src="https://www.addwebsolution.com/app/uploads/2024/03/eCommerce-Solution-webp-web.webp"
                    class="object-cover w-full h-full" alt="Slide 2"> -->
                    <div class="text-content container-fluid text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-indigo-700 text-center mt-8">
                    Vert Ecommerce
                        </h2>

                        <!-- <h1 class="p-20">Vert Ecommerce</h1> -->
                        <p class="p-0 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis officiis itaque voluptatibus?</p>
                        <a href="" class="btn-warning bg-indigo-700 btn">Login</a>
                        <a href="" class="btn-transparent btn bg-gray-700">Register</a>
                    </div>
</div>
</div>

    <!-- <p class="mt-5 text-center text-gray-700 dark:text-gray-300">
        This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn more
        by going to the official
        <a class="text-blue-600 hover:underline" href="https://flowbite.com/docs/getting-started/introduction/"
            target="_blank">
            Flowbite Documentation
        </a>.
    </p> -->
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</div></div>
<div class="container">

            <div class="row">
                @include('livewire.sidebar')
                <div class="col-lg-9 col-sm-6">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand">{{ $products->total() }}</strong> items</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span>
                                            @if ($sort === 'latest')
                                                Latest: New Released
                                            @elseif ($sort === 'low-to-high')
                                                Price: Low to High
                                            @elseif ($sort === 'high-to-low')
                                                Price: High to Low
                                            @else
                                                Default Sorting
                                            @endif
                                            <i class="fi-rs-angle-small-down"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="{{ $sort === 'latest' ? 'active' : '' }}"
                                                href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'latest'])) }}">Latest:
                                                New Released</a></li>
                                        <li><a class="{{ $sort === 'low-to-high' ? 'active' : '' }}"
                                                href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'low-to-high'])) }}">Price:
                                                Low to High</a></li>
                                        <li><a class="{{ $sort === 'high-to-low' ? 'active' : '' }}"
                                                href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'high-to-low'])) }}">Price:
                                                High to Low</a></li>
                                        <li><a href="{{ route('home') }}">Default Sorting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-3">
                        
                        @foreach ($products as $p)
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6 ">
                                <div class="product-cart-wrap mb-30 border-slate-200 shadow-md">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.details', $p->id) }}" class="">
                                                <img class="default-img" src="{{  asset('storage/'.$p->image) }}"
                                                    alt="{{$p->name}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category flex gap-2 mb-2">
                                            @foreach ($p->categories as $index => $cat)
                                                @if ($index < 4)
                                                    <a class="bg-indigo-400 py-1 px-2 text-white font-semibold rounded-full"
                                                        href="/?{{ http_build_query(array_merge(request()->query(), ['category' => $cat->slug])) }}"
                                                        rel="tag">{{ $cat->name }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <h2>
                                            <a href="{{ route('product.details', $p->id) }}"
                                                class="text-xl">
                                                {{ strlen($p->name) > 20 ? substr($p->name, 0, 17) . '...': $p->name }}
                                            </a>
                                        </h2>
                                        <div class="flex items-center justify-between">
                                            <div class="">
                                                <p class="text-xl font-bold text-indigo-500">${{ $p->price }}</p>
                                                <p class="text-md line-through opacity-50">${{ $p->old_price }}</p>
                                            </div>
                                            <div class="show flex justify-end mt-3">
                                                <form action="{{ route('cart.add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $p->id }}">
                                                    <a onclick="this.closest('form').submit()" class="text-indigo-500 hover:text-black duration-100">
                                                        {{-- Add to cart --}}
                                                        <i class="fi-rs-shopping-cart-add text-3xl"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--pagination-->
                    {{ $products->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
