<div class="col-lg-3 primary-sidebar sticky-sidebar">
    <div class="row">
        <div class="col-lg-12 col-mg-6">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @elseif (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="col-lg-12 col-mg-6"></div>
    </div>
   <!-- Categories Dropdown -->
<div class="widget-category mb-30 rounded-3xl border-slate-200 shadow-md d-lg-block d-none">
    <h1 class="font-bold text-lg tracking-widest text-indigo-500 mb-2 uppercase">Categories</h1>
    <div class="relative">
        <select id="category-dropdown" class="w-full p-2 rounded-md border-slate-200 shadow-md" onchange="window.location.href = this.value;">
            <option value="{{ url()->current() }}">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['category' => $category->slug])) }}"
                    {{ $selectedCategory === $category->slug ? 'selected' : '' }}>
                    {{ ucfirst($category->name) }}
                </option>
            @endforeach
        </select>
    </div>


<!-- Filter By Price Dropdown -->
<div class=" mt-10 sidebar-widget price_range range mb-30 rounded-3xl border-slate-200 shadow-md" style="border-radius: 30px">
    <h1 class="font-bold text-lg tracking-widest text-indigo-500 mb-4 uppercase">Filter by price</h1>
    <div class="price-filter">
        <form action="{{ url()->current() }}" method="get">
            <div class="price-filter-inner">
                <div class="relative">
                    <!-- Slider for price range -->
                    <div id="slider-range"></div>
                    <div class="price_slider_amount">
                        <div class="label-input">
                            <span>Range:</span>
                            <input type="text" id="amount" name="range" placeholder="Required format $xx - $xx" readonly>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <select id="price-range-dropdown" name="range" class="w-full p-2 rounded-md border-slate-200 shadow-md" onchange="this.form.submit()">
                        <option value="">Select Price Range</option>
                        <option value="$0 - $50">$0 - $50</option>
                        <option value="$51 - $100">$51 - $100</option>
                        <option value="$101 - $200">$101 - $200</option>
                        <option value="$201 - $500">$201 - $500</option>
                        <option value="$500+">$500+</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-indigo-700 btn-sm mt-3">Apply Filter</button>
        </form>
    </div>
</div>
</div>
</div>
