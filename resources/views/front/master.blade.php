<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="author" content="">
<title>Sami Computer</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />


<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/animate.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/revslider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/owl.theme.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontEnd/assets/css/font-awesome.css')}}" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="page"> 
    @include('front/partials/header')
    @include('front/partials/sidebar')
    @include('front/partials/best-sale-product')
    @include('front/partials/offer-banner-section')
    @include('front/partials/featured-slider-section')
  
 
  

  

  

  

  <!-- promo banner section -->
  <div class="promo-banner-section container wow bounceInUp animated">
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
  </section>
  <!-- End Latest Blog -->
  @include('front/partials/footer')
 
  
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/parallax.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/common.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/revslider.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontEnd/assets/js/owl.carousel.min.js')}}"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
</body>
</html>