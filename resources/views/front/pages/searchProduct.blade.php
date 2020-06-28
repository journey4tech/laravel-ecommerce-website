@extends('front.master')
@section('content')
    <section class="main-container col1-layout home-content-container" style="margin-top:100px !important;">
        <div class="container">
            <div class="std">
                <div class="best-seller-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Searched Products</h2>
                        </div>
                        <div id="best-seller-slider" class="product-flexslider hidden-buttons">

                            <div class="slider-items slider-width-col3">
                                   @forelse($results as $product)
                                        @include('front.partials.product-view-template-latest')
                                    @empty
                                        <h3 style="margin-left: 10px;">No Related Item Found !</h3>
                                    @endforelse
                            <!-- Item -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main container -->

@endsection
