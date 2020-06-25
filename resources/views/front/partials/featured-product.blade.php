<!-- Featured Slider -->
<section class="featured-pro container wow bounceInUp animated">
  <div class="slider-items-products">
    <div class="new_title center">
      <h2>Featured Products</h2>
    </div>
    <div id="featured-slider" class="product-flexslider hidden-buttons">
      <div class="slider-items slider-width-col4">


      @foreach($featured_products as $product)

         @include('front.partials.product-view-template-general')
      @endforeach



      </div>
    </div>
  </div>
</section>
<!-- End Featured Slider -->