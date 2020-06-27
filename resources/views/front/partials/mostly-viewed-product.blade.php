  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Mostly Viewed Products</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col3"> 
                    @foreach ($most_viewed_products as $product)
                        @include('front.partials.product-view-template-latest')
                    @endforeach
                    <!-- Item -->
                 </div>
              </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 