@extends('front.master')

@section('content')
@include('front/partials/slider')

@includeWhen(request()->is('/category/*'), 'front/partials/category_wise_product')


@include('front/partials/latest-product')
@include('front/partials/offer-banner-section')
@include('front/partials/special-product-section')
@include('front/partials/featured-product')










<!-- promo banner section -->
{{-- <div class="promo-banner-section container wow bounceInUp animated">
<div class="row">
  <div class="col-lg-12"> <img alt="promo-banner3" src="{{asset('frontEnd/assets/images/jewelry-banner.jpg')}}"></div>
</div>
</div>
<!-- End promo banner section --> 
<!-- middle slider -->
<section class="middle-slider container wow bounceInUp animated">
<div class="row">
  <div class="col-md-6">
    <div class="bag-product-slider small-pr-slider cat-section">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Bags</h2>
        </div>
        <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col3"> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{asset('frontEnd/assets/products-images/product7.jpg')}}" class="img-responsive" alt="a" /> </a>
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
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{asset('frontEnd/assets/products-images/product21.jpg')}}" class="img-responsive" alt="a" /> </a>
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
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product22.jpg')}}"> </a>
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
                      <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                    </div>
                    <!--item-content--> 
                  </div>
                  <!--info-inner-->
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product23.jpg')}}"> </a>
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
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product2.jpg')}}"> </a>
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
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product3.jpg')}}"> </a>
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
                      <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                    </div>
                    <!--item-content--> 
                  </div>
                  <!--info-inner-->
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="shoes-product-slider small-pr-slider cat-section">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Shoes</h2>
        </div>
        <div id="shoes-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col3"> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{asset('frontEnd/assets/products-images/product22.jpg')}}" class="img-responsive" alt="a" /> </a>
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
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{asset('frontEnd/assets/products-images/product2.jpg')}}" class="img-responsive" alt="a" /> </a>
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
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product1.jpg')}}"> </a>
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
                      <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                    </div>
                    <!--item-content--> 
                  </div>
                  <!--info-inner-->
                  <div class="actions">
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product11.jpg')}}"> </a>
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
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{asset('frontEnd/assets/products-images/product12.jpg')}}"> </a>
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
                    <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                  </div>
                  <!--actions-->
                  
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End middle slider --> 

<!-- Latest Blog -->
<section class="latest-blog container wow bounceInUp animated">
<div class="blog-title">
  <h2><span>Latest Blog</span></h2>
</div>
<div class="col-xs-12 col-sm-4">
  <div class="blog-img"> <img src="{{asset('frontEnd/assets/images/blog-img1.jpg')}}" alt="Image">
    <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
  </div>
  <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
  <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
</div>
<div class="col-xs-12 col-sm-4">
  <div class="blog-img"> <img src="{{asset('frontEnd/assets/images/blog-img2.jpg')}}" alt="Image">
    <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
  </div>
  <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
  <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
</div>
<div class="col-xs-12 col-sm-4">
  <div class="blog-img"> <img src="{{asset('frontEnd/assets/images/blog-img3.jpg')}}" alt="Image">
    <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
  </div>
  <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
  <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
</div>
</section> --}}
<!-- End Latest Blog -->

@endsection
