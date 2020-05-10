  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
          <!-- Item -->
          {{-- <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{asset('frontEnd/assets/products-images/product13.jpg')}}" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
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
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div> --}}
          <!-- End Item --> 
          @foreach($featured_products as $product)
          <?php $images=collect(json_decode($product->multiple))->first(); ?>
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              
              <div class="product-image-area"> <a class="product-image" title="{{ $product->product_title }}" href="product_detail.html"> <img src="{{ asset('uploads/documents/productimages/'.$images) }}" style="width:173px;height:210px;" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title="{{ $product->product_title }}" href="product_detail.html">{{ $product->product_name }} </a> </div>
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
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
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