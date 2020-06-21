@extends('front.master')
@section('content')
    <section class="main-container col1-layout home-content-container">
        <div class="container">
            <div class="std">
                <div class="best-seller-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Searched Products</h2>
                        </div>
                        <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                            @if( !$results->isEmpty())
                            <div class="slider-items slider-width-col3">
                                @foreach ($results as $product)
                                    <div class="item">
                                        <div class="col-item">
                                            <?php $images=collect(json_decode($product->multiple))->first(); ?>
                                            <div class="product-image-area"> <a class="product-image" title="{{ $product->product_title }}" href="{{route('product',$product->slug)}}"> <img style="width:270px;height:300.5px;" src="{{ asset('uploads/documents/productimages/'.$images) }}" class="img-responsive" alt="{{ $product->product_title }}" /> </a>
                                                <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="{{route('product',$product->slug)}}" title="Add to cart">
                                                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                                    </a> <a class="quick-view" href="quick_view.html">
                                                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                                    </a> <a class="add_to_compare" href="compare.html">
                                                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                                                    </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                                                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                                    </a> </div>
                                            </div>
                                            <div class="info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> {{ $product->product_title }} </a> </div>
                                                    <!--item-title-->
                                                    <div class="item-content">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating"></div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="special-price"> <span class="price"> ${{ $product->special_price}} </span> </p>
                                                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> ${{ $product->product_price}}</span> </p>
                                                        </div>
                                                    </div>
                                                    <!--item-content-->
                                                </div>
                                                <!--info-inner-->

                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- Item -->
                            </div>
                                @else
                                <h2>No item found !!</h2>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main container -->

@endsection
