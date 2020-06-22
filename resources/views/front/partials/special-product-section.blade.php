  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Special Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
        
          @foreach($special_products as $product)
          <?php $images=collect(json_decode($product->multiple))->first(); ?>
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              
              <div class="product-image-area"> <a class="product-image" title="{{ $product->product_title }}" href="{{route('product',$product->slug)}}"> <img src="{{ asset('uploads/documents/productimages/'.$images) }}" style="width:173px;height:210px;" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="{{route('product',$product->slug)}}"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title="{{ $product->product_title }}" href="{{route('product',$product->slug)}}">{{ $product->product_name }} </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price"> Tk. {{ $product->special_price}}</span> </span> </div>
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
          @endforeach
          <!-- End Item --> 
         
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 