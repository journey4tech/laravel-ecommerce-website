<div class="item">
    <div class="col-item">

        @if($product->hasDiscount())
            <div class="new-label new-top-right">
                {{ $product->discount() }} %
            </div>


        @endif

        <?php $images=collect(json_decode($product->multiple))->first(); ?>
        <div class="product-image-area"> <a class="product-image" title="{{ $product->product_title }}" href="{{route('product',$product->slug)}}"> <img style="width:270px;height:300.5px;" src="{{ asset('uploads/documents/productimages/'.$images) }}" class="img-responsive" alt="{{ $product->product_title }}" /> </a>
            <div class="hover_fly">
                <a class="exclusive ajax_add_to_cart_button" href="{{route('product',$product->slug)}}" title="Add to cart">
                    <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                </a>

                <a class="quick-view" href="{{route('quick.view', $product->slug)}}">
                    <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                </a>
                {{--<a class="add_to_compare" href="compare.html">--}}
                {{--<div><i class="icon-random"></i><span>Add to compare</span></div>--}}
                {{--</a> --}}
                <a class="addToWishlist wishlistProd_5" href="{{route('quick.review',$product->slug)}}" >
                    <div><i class="icon-heart"></i><span>Add Review</span></div>
                </a> </div>
        </div>
        <div class="info">
            <div class="info-inner">
                <div class="item-title"> <a title=" {{ $product->product_name }}" href="{{route('product',$product->slug)}}"> {{ $product->product_name }} </a> </div>
                <!--item-title-->
                <div class="item-content">
                    <div class="ratings">
                        <div class="rating-box">
                            <div class="rating"></div>
                        </div>
                    </div>
                    <div class="price-box">
                        {{--@php--}}
                            {{--$discount_price =  $product->product_price - round(($product->product_price*$product->discount)/100)--}}

                        {{--@endphp--}}
                        @if($product->hasDiscount())
                            <p class="special-price"> <span class="price"> Tk. {{ $product->special_price}} </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                        @else
                        <p class="special-price"> <span class="price"></span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                        @endif
                    </div>
                </div>
                <!--item-content-->
            </div>
            <!--info-inner-->

            <div class="clearfix"> </div>
        </div>
    </div>
</div>