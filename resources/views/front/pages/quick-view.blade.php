@extends('front.master')
@section('content')
    <style>
        footer.footer{
            display:none !important;
        }
    </style>
    <div id="fancybox-overlay">
        <div id="fancybox-wrap">
            <div id="fancybox-outer">
                <div id="fancybox-content"> <a href="index.html"></a>
                    <div>
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="{{ route('cartpost') }}" method="post" id="product_addtocart_form">
                                    @csrf
                                    <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                        <ul class="moreview" id="moreview">
                                            {{--<li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product2.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="products-images/product3.jpg" alt="thumbnail"></li>--}}
                                            {{--<li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="products-images/product4.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product4.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="http://htmldemo.magikcommerce.com/ecommerce/polo-html-template/Variation1/green/images/product4.jpg" alt="thumbnail"></li>--}}
                                            {{--<li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="products-images/product5.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product5.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="products-images/product5.jpg" alt="thumbnail"></li>--}}
                                            {{--<li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="products-images/product6.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product6.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="products-images/product6.jpg" alt="thumbnail"></li>--}}
                                            {{--<li class="moreview_thumb thumb_5"> <img class="moreview_thumb_image" src="products-images/product7.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product7.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="products-images/product7.jpg" alt="thumbnail"></li>--}}
                                            {{--<li class="moreview_thumb thumb_6"> <img class="moreview_thumb_image" src="products-images/product8.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product8.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img class="zoomImg" src="products-images/product8.jpg" alt="thumbnail"></li>--}}
                                            <?php
                                            $multiple = json_decode($product->multiple,true);
                                            ?>
                                            @foreach($multiple as $image)
                                                <li class="moreview_thumb thumb_6 "> <img class="moreview_thumb_image" src="{{ asset('uploads/documents/productimages/'.$image)}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product8.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="{{ asset('frontEnd/assets/products-images/product8.jpg')}}" alt="thumbnail"></li>
                                            @endforeach
                                        </ul>
                                        <div class="moreview-control"> <a href="javascript:void(0)" class="moreview-prev"></a> <a href="javascript:void(0)" class="moreview-next"></a> </div>
                                    </div>
                                    <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                        {{--<div class="product-next-prev"> <a class="product-next" href="quick_view.html#"><span></span></a> </div>--}}
                                        <a style="float: right;background: orange" class="button remove-item" title="Remove item" href="{{ route('home') }}"><span><span>Close</span></span></a>
                                        <div class="product-name">
                                            <h1>{{ $product->product_name }}</h1>
                                        </div>
                                        {{--<div class="ratings">--}}
                                            {{--<div class="rating-box">--}}
                                                {{--<div class="rating"></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="rating-links"> <a href="quick_view.html#">1 Review(s)</a> <span class="separator">|</span> <a href="quick_view.html#">Add Your Review</a> </p>--}}
                                        {{--</div>--}}

                                        @if($product->hasDiscountTime())
                                            <h4>  <span style="color:red;font-weight: bold;">Discount: {{ $product->discount }} % </span> ( <span style="font-size: 12px;color:green">{{ $product->start }} to {{ $product->end  }}</span> )</h4>
                                        @endif
                                        <p class="availability in-stock">Availability: <span>{{ $product->stock >= 1 ? 'In Stock' : 'Out Stock'}}</span></p>
                                        <div class="price-block">
                                            <div class="price-box">
                                                @if($product->hasDiscountTime())
                                                    <p class="special-price"> <span class="price"> Tk. {{ $product->discountedAmount() }} </span> </p>
                                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                                                @else
                                                    <p class="special-price"> <span class="price"></span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="short-description">
                                            <h2>Quick Overview</h2>
                                            <p>{{ $product->product_title }}</p>
                                        </div>

                                        <div class="short-description">
                                            <h2>Colors</h2>
                                            @php
                                                $colors = json_decode($product->color)
                                            @endphp
                                            @if(! empty($colors))
                                                @foreach($colors as $color)
                                                    <span >{{ $color }}</span>
                                                    @if(!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <label for="qty">Quantity:</label>
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input type="hidden"  name="product_id" value="{{ $product->id }}">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                    </div>
                                                </div>
                                                <button  class="button btn-cart" title="Add to Cart" type="submit"><span><i class="icon-basket"></i> Add to Cart</span></button>

                                                {{--<div class="email-addto-box">--}}
                                                    {{--<ul class="add-to-links">--}}
                                                        {{--<li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>--}}
                                                        {{--<li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<p class="email-friend"><a href="quick_view.html#" class=""><span>Email to a Friend</span></a></p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>

                                        {{--<div class="social">--}}
                                            {{--<ul>--}}
                                                {{--<li class="fb"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="tw"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="googleplus"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="rss"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="pintrest"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="linkedin"><a href="quick_view.html#"></a></li>--}}
                                                {{--<li class="youtube"><a href="quick_view.html#"></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--product-view-->

                    </div>
                </div>
                <a id="fancybox-close" href="index.html"></a> </div>
        </div>
    </div>

@endsection
