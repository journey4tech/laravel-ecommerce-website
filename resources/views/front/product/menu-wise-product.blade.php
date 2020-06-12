@extends('')



@push('styles')

@endpush

@section('content')
    <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated animated" style="visibility: visible;">
        <div class="category-description std">
            <div class="slider-items-products">
                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col1 owl-carousel owl-theme" style="opacity: 1; display: block;">

                        <!-- Item -->
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3392px; left: 0px; display: block;"><div class="owl-item" style="width: 848px;"><div class="item"> <a href="grid.html#x"><img alt="" src="images/category-banner1.jpg"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading">Category Banner</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 848px;"><div class="item"> <a href="grid.html#x"><img alt="" src="images/women_banner1.png"></a> </div></div></div></div>
                        <!-- End Item -->

                        <!-- Item -->

                        <!-- End Item -->

                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div>
                </div>
            </div>
        </div>
        <div class="category-title">
            <h1>Tops &amp; Tees</h1>
        </div>
        <div class="category-products">
            <div class="toolbar">
                <div class="sorter">
                    <div class="view-mode"> <span title="Grid" class="button button-active button-grid">Grid</span><a href="list.html" title="List" class="button button-list">List</a> </div>
                </div>
                <div id="sort-by">
                    <label class="left">Sort By: </label>
                    <ul>
                        <li><a href="grid.html#">Position<span class="right-arrow"></span></a>
                            <ul>
                                <li><a href="grid.html#">Name</a></li>
                                <li><a href="grid.html#">Price</a></li>
                                <li><a href="grid.html#">Position</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="button-asc left" href="grid.html#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
                <div class="pager">
                    <div id="limiter">
                        <label>View: </label>
                        <ul>
                            <li><a href="grid.html#">15<span class="right-arrow"></span></a>
                                <ul>
                                    <li><a href="grid.html#">20</a></li>
                                    <li><a href="grid.html#">30</a></li>
                                    <li><a href="grid.html#">35</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="pages">
                        <label>Page:</label>
                        <ul class="pagination">
                            <li><a href="grid.html#">«</a></li>
                            <li class="active"><a href="grid.html#">1</a></li>
                            <li><a href="grid.html#">2</a></li>
                            <li><a href="grid.html#">3</a></li>
                            <li><a href="grid.html#">4</a></li>
                            <li><a href="grid.html#">5</a></li>
                            <li><a href="grid.html#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="products-grid">
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product3.jpg" class="img-responsive" alt="a"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                    </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product2.jpg" class="img-responsive" alt="a"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product4.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                    </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product6.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                    </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">
                        <div class="new-label new-top-right">New</div>
                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product7.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product8.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product9.jpg"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                    </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="col-item">

                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product13.jpg" class="img-responsive" alt="a"> </a>
                            <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="grid.html#" title="Add to cart">
                                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="quick_view.html">
                                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="compare.html">
                                    <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html">
                                    <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                        </div>
                        <div class="info">
                            <div class="info-inner">
                                <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                    </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--info-inner-->

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection

@push('scripts')

@endpush