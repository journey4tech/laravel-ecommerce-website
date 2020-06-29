@extends('front.master')



@section('content')





    <div id="body-content">
        <div id="main-content">
            <div class="main-content">

                <div id="shopify-section-page-contact-template" class="shopify-section">

                    <div class="wrap-breadcrumb bw-color">
                        <div id="breadcrumb" class="breadcrumb-holder container">

                            {{--<ul class="breadcrumb">--}}
                                {{--<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">--}}
                                    {{--<a itemprop="url" href="/">--}}
                                        {{--<span itemprop="title" class="d-none">Arena Electro</span>Home--}}
                                    {{--</a>--}}
                                {{--</li>--}}

                                {{--<li class="active">Cart List</li>--}}

                            {{--</ul>--}}

                        </div>
                    </div>

                    <div class="page-contact" style="margin-top: 50px;">

                        <div class="container">
                            <div id="col-main" class="page-contact-content">
                               <div class="col-md-8">
                                   <div class="cart wow bounceInUp animated">
                                       <div class="page-title">
                                           <h2>Your Cart Items</h2>
                                       </div>
                                       <div class="table-responsive">


                                               <fieldset>
                                                   <table class="data-table cart-table" id="shopping-cart-table">
                                                       <thead>
                                                       <tr class="first last">
                                                           <th rowspan="1">No.</th>
                                                           <th rowspan="1">Image</th>
                                                           <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                           <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                                           <th class="a-center" rowspan="1">Qty</th>
                                                           <th class="a-center" rowspan="1">Action</th>
                                                           <th colspan="1" class="a-center">Subtotal</th>

                                                       </tr>
                                                       </thead>
                                                       <tfoot>
                                                       <tr class="first last">
                                                           <td class="a-right last" colspan="7"><a href="{{ route('home') }}"><button class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button></a>

                                                               <a href="{{ route('cart.destroy') }}"><button id="empty_cart_button" class="button btn-empty" title="Clear Cart"><span><span>Clear Cart</span></span></button></a>
                                                               </td>
                                                       </tr>
                                                       </tfoot>
                                                       <tbody>
                                                       @foreach($carts as $cart)
                                                           <tr class="first odd">
                                                               <td>{{ $loop->iteration }}</td>
                                                               <td class="image"><a class="product-image" title="Sample Product"><img width="75" alt="Sample Product" src="{{ asset('uploads/documents/productimages/'.$cart->options->images) }}"></a></td>
                                                               <td><h2 class="product-name"> <a href="product_detail.html">{{ $cart->name }}</a> </h2></td>
                                                               <td class="a-right"><span class="cart-price"> <span class="price">Tk. {{ $cart->price }}</span> </span></td>
                                                               {!! Form::open(['url' => route('cart.update'),'method'=>'post']) !!}
                                                               @csrf
                                                               <input type="hidden" name="rowId" value="{{$cart->rowId}}">
                                                               <td class="a-center movewishlist"><input  maxlength="12" class="input-text qty" title="Qty" size="4" value="{{ $cart->qty }}" name="qty"></td>
                                                               <td class="a-center"><button style="border:none;outline:none;" class="edit-bnt" type="submit"></button>  <a style="margin-left:20px;" class="button remove-item" title="Remove item" href="{{ route('cart.item.remove',$cart->rowId) }}"><span><span>Remove item</span></span></a></td>
                                                               {!! Form::close() !!}
                                                               <td class="a-right movewishlist"><span class="cart-price"> <span class="price">Tk. {{ $cart->price*$cart->qty }}</span> </span></td>

                                                           </tr>
                                                       @endforeach

                                                       </tbody>
                                                   </table>
                                               </fieldset>

                                       </div>
                                   </div>
                               </div>
                                <div class="col-md-4">

                                        <div class="totals">
                                            <h3>Cart Total</h3>
                                            <div class="inner">
                                                <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                                    <colgroup>
                                                        <col>
                                                        <col width="1">
                                                    </colgroup>
                                                    <tfoot>
                                                    <tr>
                                                        <td class="a-left" colspan="1"><strong>Total</strong></td>
                                                        <td class="a-right"><strong><span class="price">Tk. {{Cart::subtotal()}}</span></strong></td>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    {{--<tr>--}}
                                                        {{--<td class="a-left" colspan="1"> Subtotal </td>--}}
                                                        {{--<td class="a-right"><span class="price">$649.00</span></td>--}}
                                                    {{--</tr>--}}
                                                    </tbody>
                                                </table>
                                                <ul class="checkout">

                                                    <li>

                                                        <a href="{{ route('checkout.product') }}"><button id="checkoutButton" title="Proceed to Checkout" class="button btn-proceed-checkout"><span>Proceed to Checkout</span></button></a>
                                                    </li>


                                                    {{--<li><a href="shopping_cart.html#" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a> </li>--}}
                                                    <br>
                                                </ul>
                                            </div>
                                            <!--inner-->
                                        </div>
                                        <!--totals-->

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function(){

            if( "{{ \Gloudemans\Shoppingcart\Facades\Cart::count() == 0 }}" ){
                $("#checkoutButton").css("display", "none");


            }


        });
    </script>
@endpush