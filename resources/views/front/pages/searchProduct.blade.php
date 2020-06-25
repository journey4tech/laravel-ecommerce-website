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
                            @if( !$results->isEmpty())
                            <div class="slider-items slider-width-col3">
                                @foreach ($results as $product)
                                    @include('front.partials.product-view-template-latest')
                            @endforeach
                            <!-- Item -->
                            </div>
                                @else
                                <h2>Oops ! No item found.</h2>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main container -->

@endsection
