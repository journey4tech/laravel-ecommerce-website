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
                    <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Totally New and Exclusive Product</div>
                    <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{ $item->title }}</div>
                    <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                        <a href="{{ route('display.shop') }}" class="view-more">View More</a>
                        {{--<a href='index.html#' class="buy-btn">Buy Now</a>--}}
                    </div>
                    {{--<div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>--}}
                        {{--augue facilisis facilisis.</div>--}}
                    {{--<div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>--}}

                </li>
                @endforeach


              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
        <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
          <div class="RHS-banner">
            <div class="add"><a href="index.html#"><img alt="banner-img"  style="width:360px;height:460px" src="{{asset('frontEnd/assets/images/rhs-banner.jpg')}}"></a>
              <div class="overlay"><a class="info" href="index.html#">Learn More</a></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!-- end Slider -->