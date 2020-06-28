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

                                    <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                        <ul class="moreview" id="moreview">

                                            @php
                                            $multiple = json_decode($product->multiple,true);
                                            @endphp
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


                                        @if($product->hasDiscount())
                                            <h4>  <span style="color:red;font-weight: bold;">Discount: {{ $product->discount() }} % </span> ( <span style="font-size: 12px;color:green">{{ $product->start }} to {{ $product->end  }}</span> )</h4>
                                        @endif
                                        <p class="availability in-stock">Availability: <span>{{ $product->stock >= 1 ? 'In Stock' : 'Out Stock'}}</span></p>
                                        <div class="price-block">
                                            <div class="price-box">
                                                @if($product->hasDiscount())
                                                    <p class="special-price"> <span class="price"> Tk. {{ $product->special_price }} </span> </p>
                                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                                                @else
                                                    <p class="special-price"> <span class="price"></span> <span class="price"> Tk. {{ $product->product_price}}</span> </p>
                                                @endif
                                            </div>
                                        </div>

                                        <form action="{{ route('store.review') }}" method="post" id="product_addtocart_form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input class="form-control" type="text" name="visitor_name" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Review</label>
                                                <textarea class="form-control" name="review" id="" cols="30" rows="3"></textarea>
                                            </div>
                                            <button  class="button btn-wishlist" title="Add Review" type="submit"><span><i class="icon-basket"></i> Add Review</span></button>
                                        </form>

                                    </div>

                            </div>
                        </div>
                        <!--product-view-->

                    </div>
                </div>
                <a id="fancybox-close" href="index.html"></a> </div>
        </div>
    </div>

@endsection
