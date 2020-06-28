

@extends('front.master')

@section('content')


    <section class="featured-pro container wow bounceInUp animated"  style="margin-top:100px !important;">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>All {{ $sub_wise_products->name }} Products</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">



                    @forelse($sub_wise_products->products as $product)
                        @include('front.partials.product-view-template-general')
                    @empty
                        <h3 style="margin-left: 10px;">No Related Item Found !</h3>
                    @endforelse


                </div>
            </div>
        </div>
    </section>





@endsection