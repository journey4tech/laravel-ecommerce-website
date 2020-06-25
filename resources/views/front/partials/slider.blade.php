 <!-- Slider -->
 <div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 wow bounceInUp animated">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                @foreach ($sliders as $item)
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('uploads/documents/sliderimages/'.$item->images)}}'>
                    <img src='{{asset('uploads/documents/sliderimages/'.$item->images)}}' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                </li>
                @endforeach


              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
        <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
          <div class="RHS-banner">
            <div class="add"><a href="index.html#"><img alt="banner-img" src="{{asset('frontEnd/assets/images/rhs-banner.jpg')}}"></a>
              <div class="overlay"><a class="info" href="index.html#">Learn More</a></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!-- end Slider -->