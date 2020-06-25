

@extends('front.master')

@section('content')


    <section class="featured-pro container wow bounceInUp animated"  style="margin-top:100px !important;">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>All {{ $sub_wise_products->name }} Products</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">


                @foreach($sub_wise_products->products as $product)
                    <?php $images=collect(json_decode($product->multiple))->first(); ?>
                    <!-- Item -->
                        @include('front.partials.product-view-template-general')
                @endforeach
                <!-- End Item -->


                </div>
            </div>
        </div>
    </section>





@endsection