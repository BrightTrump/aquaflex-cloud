<x-guest-layout>
    @include('components.header')

    <!-- ==================== Shop-Grid Area (Start) ==================== -->
    <section class="shop">
        <!-- ========== Shop Sidebar Area (Start) ========== -->
        <!-- ========== Shop Sidebar Area (End) ========== -->

        <!-- ========== Shop Container (Start) ========== -->
        <div class="shop-container">
            <div class="intro">
                <div class="showing">Showing 6 of 35 Products</div>
                <div class="styles">
                    <a href="Shop-Grid.html" class="fas fa-th"></a>
                    <a href="Shop-List.html" class="fas fa-list"></a>
                </div>
                <div class="sorting-type">
                    <select name="sort" id="sort">
                        <option value="default">Default Sorting</option>
                        <option value="name, A to Z">Sort by Popularity</option>
                        <option value="mname, Z to A">Sort by Latest</option>
                        <option value="price, low to high">Sort by Average Price</option>
                        <option value="price, low to high">
                            Sort by Price: Low to High
                        </option>
                        <option value="price, high to low">
                            Sort by Price: High to Low
                        </option>
                    </select>
                </div>
            </div>

            <div class="product-container grid">

                @foreach ($products as $product)
                    <div class="product-item">
                        <div class="image">
                            <img src="/assets/images/{{$product->thumbnail}}" alt="" />
                        </div>
                        <div class="content">
                            <a href="Product-Single">
                                <h3>{{$product->name}}</h3>
                            </a>
                            <div class="price">${{$product->price}}</div>
                            <a href="/product-single" class="btn">Shop Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ========== Shop Container (End) ========== -->
    </section>
    <!-- ==================== Shop-Grid Area (End) ==================== -->

    @include('components.footer')
</x-guest-layout>
