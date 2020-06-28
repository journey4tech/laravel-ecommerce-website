@extends('front.master')
@section('content')
    <section class="main-container col1-layout home-content-container" >
        <div class="container">
            <div class="std">
                <div class="best-seller-pro wow bounceInUp animated">
                    <section class="col-main col-sm-12 wow bounceInUp animated">
                        {{--<div class="category-description std">--}}
                            {{--<div class="slider-items-products">--}}
                                {{--<div id="category-desc-slider" class="product-flexslider hidden-buttons">--}}
                                    {{--<div class="slider-items slider-width-col1">--}}

                                        {{--<!-- Item -->--}}
                                        {{--<div class="item"> <a href="grid.html#x"><img alt="" src="images/category-banner1.jpg"></a>--}}
                                            {{--<div class="cat-img-title cat-bg cat-box">--}}
                                                {{--<h2 class="cat-heading">Category Banner</h2>--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Item -->--}}

                                        {{--<!-- Item -->--}}
                                        {{--<div class="item"> <a href="grid.html#x"><img alt="" src="images/women_banner1.png"></a> </div>--}}
                                        {{--<!-- End Item -->--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="category-title">
                            <h1 style="text-align: center;margin-bottom: 20px;">Our Shop</h1>
                        </div>
                        <div class="category-products">

                            <ul class="products-grid">

                                @foreach($products as $product)
                                    <div class="col-md-3" style="margin-bottom: 20px;">
                                        @include('front.partials.product-view-template-latest')
                                    </div>

                                @endforeach

                                {{ $products->links() }}
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- End main container -->

@endsection
