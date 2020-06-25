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
                                           <form method="post" action="shopping_cart.html#updatePost/">
                                               <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
                                               <fieldset>
                                                   <table class="data-table cart-table" id="shopping-cart-table">
                                                       <thead>
                                                       <tr class="first last">
                                                           <th rowspan="1">&nbsp;</th>
                                                           <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                           <th rowspan="1"></th>
                                                           <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                                           <th class="a-center" rowspan="1">Qty</th>
                                                           <th colspan="1" class="a-center">Subtotal</th>
                                                           <th class="a-center" rowspan="1">&nbsp;</th>
                                                       </tr>
                                                       </thead>
                                                       <tfoot>
                                                       <tr class="first last">
                                                           <td class="a-right last" colspan="7"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button>
                                                               <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Cart</span></span></button>
                                                               <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
                                                       </tr>
                                                       </tfoot>
                                                       <tbody>
                                                       @foreach($carts as $cart)
                                                           <tr class="first odd">
                                                               <td class="image"><a class="product-image" title="Sample Product"><img width="75" alt="Sample Product" src="{{ asset('uploads/documents/productimages/'.$cart->options->images) }}"></a></td>
                                                               <td><h2 class="product-name"> <a href="product_detail.html">{{ $cart->name }}</a> </h2></td>
                                                               <td class="a-center"><a title="Edit item parameters" class="edit-bnt" href="shopping_cart.html#configure/id/15945/"></a></td>
                                                               <td class="a-right"><span class="cart-price"> <span class="price">Tk. {{ $cart->price }}</span> </span></td>
                                                               <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="{{ $cart->qty }}" name="cart[15945][qty]"></td>
                                                               <td class="a-right movewishlist"><span class="cart-price"> <span class="price">Tk. {{ $cart->price*$cart->qty }}</span> </span></td>
                                                               <td class="a-center last"><a class="button remove-item" title="Remove item" href="shopping_cart.html#"><span><span>Remove item</span></span></a></td>
                                                           </tr>
                                                       @endforeach

                                                       </tbody>
                                                   </table>
                                               </fieldset>
                                           </form>
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
                                                        <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                                                        <td class="a-right"><strong><span class="price">Tk. {{Cart::subtotal()}}</span></strong></td>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td class="a-left" colspan="1"> Subtotal </td>
                                                        <td class="a-right"><span class="price">$649.00</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="checkout">
                                                    {!! Form::open(['url' => route('product.order.confirm'),'method'=>'post']) !!}
                                                    <li>

                                                        <button type="submit" title="Proceed to Checkout" class="button btn-proceed-checkout" onclick="#"><span>Proceed to Checkout</span></button>
                                                    </li>
                                                    {!! Form::close() !!}

                                                    <li><a href="shopping_cart.html#" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a> </li>
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