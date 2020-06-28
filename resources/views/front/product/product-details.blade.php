@extends('front.master')
@section('content')

<section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">

                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                  <ul class="moreview" id="moreview">
                    {{-- <li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="{{ asset('frontEnd/assets/products-images/product1.jpg')}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product2.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="{{ asset('frontEnd/assets/products-images/product3.jpg')}}" alt="thumbnail"></li>
                    <li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="{{ asset('frontEnd/assets/products-images/product4.jpg')}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product4.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="http://htmldemo.magikcommerce.com/ecommerce/polo-html-template/Variation1/green/images/product4.jpg" alt="thumbnail"></li>
                    <li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="{{ asset('frontEnd/assets/products-images/product5.jpg')}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product5.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="{{ asset('frontEnd/assets/products-images/product5.jpg')}}" alt="thumbnail"></li>
                    <li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="{{ asset('frontEnd/assets/products-images/product6.jpg')}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product6.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="{{ asset('frontEnd/assets/products-images/product6.jpg')}}" alt="thumbnail"></li>
                    <li class="moreview_thumb thumb_5"> <img class="moreview_thumb_image" src="{{ asset('frontEnd/assets/products-images/product7.jpg')}}" alt="thumbnail"> <img class="moreview_source_image" src="{{ asset('frontEnd/assets/products-images/product7.jpg')}}" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="{{ asset('frontEnd/assets/products-images/product7.jpg')}}" alt="thumbnail"></li> --}}
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
                  {{--<div class="product-next-prev"> <a class="product-next" href="product_detail.html#"><span></span></a> <a class="product-prev" href="product_detail.html#"><span></span></a> </div>--}}
                  <div class="product-name">
                    <h1>{{ $product->product_name }}</h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div class="rating">
                        {{--<p class="rating-links"> <a >1 Review(s)</a> <span class="separator">|</span> <a href="{{route('quick.review',$product->slug)}}">Add Your Review</a> </p>--}}
                      </div>

                    </div>

                    @if($product->hasDiscount())
                     <h4>  <span style="color:red;font-weight: bold;">Discount: {{ $product->discount() }} % </span> ( <span style="font-size: 12px;color:green">{{ $product->start }} to {{ $product->end  }}</span> )</h4>
                    @endif
                    <p class="rating-links"> <a>{{ $reviews_count }} Review(s)</a> <span class="separator">|</span> <a href="{{ route('quick.review', $product->slug) }}">Add Your Review</a> </p>
                  </div>
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


                      <form action="{{ route('cartpost') }}" method="post" id="product_addtocart_form">
                        @csrf
                        <label for="qty">Quantity:</label>
                        <div class="pull-left">
                          <div class="custom pull-left">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <input type="hidden"  name="product_id" value="{{ $product->id }}">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          </div>
                        </div>


                        <div class="pull-left">
                          <div class="custom pull-left">
                            <select name="color" id="">
                              @php
                                $colors = json_decode($product->color)
                              @endphp
                              @if(! empty($colors))
                                @foreach($colors as $color)
                                  <option>{{ $color }}</option>

                                @endforeach
                              @endif


                            </select>
                          </div>
                        </div>

                        <button  class="button btn-cart" title="Add To Cart" type="submit"><span><i class="icon-basket"></i> Add To Cart</span></button>

                      {{--<div class="email-addto-box">--}}
                        {{--<ul class="add-to-links">--}}
                          {{--<li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>--}}
                          {{--<li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>--}}
                        {{--</ul>--}}
                        {{--<p class="email-friend"><a href="product_detail.html#" class=""><span>Email to a Friend</span></a></p>--}}
                      {{--</div>--}}
                    </div>
                  </div>

                </div>
              </form>
            </div>
            <div class="product-collateral">
              <div class="col-sm-12 wow bounceInUp animated">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="product_detail.html#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                  <li> <a href="product_detail.html#reviews_tabs" data-toggle="tab">Reviews</a> </li>

                </ul>
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      {!! $product->description !!}
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_tags">
                    <div class="box-collateral box-tags">
                      <div class="tags">
                        <form id="addTagForm" action="product_detail.html#" method="get">
                          <div class="form-add-tags">
                            <label for="productTagName">Add Tags:</label>
                            <div class="input-box">
                              <input class="input-text required-entry" name="productTagName" id="productTagName" type="text" >
                              <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                            </div>
                            <!--input-box-->
                          </div>
                        </form>
                      </div>
                      <!--tags-->
                      <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="reviews_tabs">
                    <div class="box-collateral box-reviews" id="customer-reviews">
                      <div class="box-reviews1">
                        <div class="form-add">
                          <form id="review-form" method="post" action="product_detail.html#">
                            <h3>Write Your Own Review</h3>

                          </form>
                        </div>
                      </div>
                      <div class="box-reviews2">
                        <h3>Customer Reviews</h3>
                        <div class="box visible">
                          <ul>
                            @forelse($reviews as $item)
                              <li>
                                <div class="review">
                                  <h6>{{ $product->product_name }}</h6>
                                  <small>Review by <span>{{ $item->visitor_name }} </span>on {{ $item->created_at->format('m/d/Y') }} </small>
                                  <div class="review-txt">{{ $item->review }}</div>
                                </div>
                              </li>
                            @empty
                              <p>No reviews Yet !!</p>
                            @endforelse



                          </ul>
                        </div>
                        {{--<div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>--}}
                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom">
                    <div class="product-tabs-content-inner clearfix">
                      <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It
                        was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</span></p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom1">
                    <div class="product-tabs-content-inner clearfix">
                      <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem

                        Lorem Ipsumis
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It
                        was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="box-additional">
                  <div class="related-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Related Products</h2>
                      </div>
                      <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">


                          {{--@foreach($related_products as $product)--}}

                            {{--@include('front.partials.product-view-template-latest')--}}
                          {{--@endforeach--}}

                            @forelse($related_products as $product)
                              @include('front.partials.product-view-template-latest')
                            @empty
                              <h3 style="margin-left: 10px;">No Related Item Found !</h3>
                            @endforelse


                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End main-container -->

@endsection
