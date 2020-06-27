

<?php $images=collect(json_decode($product->multiple))->first(); ?>

<div class="item">
    <div class="col-item">
        @if($product->hasDiscount())
            <div class="sale-label sale-top-right">
                {{ $product->discount() }} %
                {{--{{ round(($product->product_price*$product->discount) /100 )}} %--}}
            </div>
        @endif
        <div class="product-image-area"> <a class="product-image" title="{{ $product->name }}" href="{{route('product',$product->slug)}}"> <img src="{{ asset('uploads/documents/productimages/'.$images) }}" style="width:173px;height:210px;" class="img-responsive" alt="a" /> </a>
            <div class="actions-links"><span class="add-to-links">
                      <a title="magik-btn-quickview" class="magik-btn-quickview" href="{{route('quick.view',$product->slug)}}">
                        <span>quickview</span>
                      </a>
                      <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html">
                        <span>Add to Wishlist</span>
                      </a>
                    {{--<a title="Add to Compare" class="link-compare" href="compare.html">--}}
                    {{--<span>Add to Compare</span>--}}
                    {{--</a>--}}
                    </span>
            </div>
        </div>
        <div class="info">
            <div class="info-inner">
                <div class="item-title"> <a title="{{ $product->product_name}}" href="{{route('product',$product->slug)}}">{{ $product->product_name }} </a> </div>
                <!--item-title-->
                <div class="item-content">
                    <div class="ratings">
                        <div class="rating-box">
                            <div class="rating"></div>
                        </div>
                    </div>
                    {{--@php--}}
                        {{--$discount_price =  $product->product_price - round(($product->product_price*$product->discount)/100)--}}

                    {{--@endphp--}}
                    <div class="price-box"> <span class="regular-price"> <span class="price"> Tk. {{ $product->special_price ?? $product->product_price  }}</span> </span> </div>
                </div>
                <!--item-content-->
            </div>
            <!--info-inner-->
            <div class="actions">
                <a href="{{route('product',$product->slug)}}"><button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button></a>
            </div>
            <!--actions-->

            <div class="clearfix"> </div>
        </div>
    </div>
</div>