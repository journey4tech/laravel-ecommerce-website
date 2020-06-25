@extends('front.master')



@section('content')
    <style>
        table th, td{
            font-size: 16px;
        }
        .order-total th,.order-total td{
            color:white;
            background:#65d31f;
        }
    </style>
    <div id="body-content">
        <div id="main-content">
            <div class="main-content">

                <div id="shopify-section-page-contact-template" class="shopify-section">

                    <div class="wrap-breadcrumb bw-color">
                        <div id="breadcrumb" class="breadcrumb-holder container">

                            <ul class="breadcrumb">
                                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a itemprop="url" href="/">
                                        <span itemprop="title" class="d-none">Arena Electro</span>Home
                                    </a>
                                </li>

                                <li class="active">Product Confirm page</li>

                            </ul>

                        </div>
                    </div>

                    <div class="page-contact">

                        <div class="container">
                            <div id="col-main" class="page-contact-content">
                                <div class="row">

                                    <div class="contact-form-wrapper col-md-6 col-sm-12">
                                        <div class="title-wrapper">
                                            <h3>Order Details</h3>
                                            <a href="{{ route('home') }}" style="color:green;margin-bottom:10px;">Continue Shopping</a>
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($carts as $data)
                                                <tr class="cart_item">
                                                    <td class="product-name">{{$data->name}}
                                                        <strong class="product-quantity">× {{$data->qty}}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">Tk. {{$data->price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount">Tk. {{Cart::subtotal()}}</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Delevery Charge</th>
                                                <td><span class="amount">Tk. 50</span></td>
                                            </tr>




                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="amount">Tk. {{$total = str_replace(',', '', Cart::subtotal())}}</span></strong> </td>
                                            </tr>
                                            </tfoot>
                                        </table>



                                    </div>

                                    <div class="contact-form-wrapper col-md-6 col-sm-12">

                                        <div class="title-wrapper">
                                            <h3>Provide  Information</h3>

                                        </div>

                                        <div class="contact-form">
                                            {!! Form::open(['url' => route('product.order.confirm'),'method'=>'post']) !!}

                                            <div id="contact-form">
                                                <div class="row">
                                                    <div class="form-group col-lg-6 col-md-12">
                                                        <label for="name">Name<span class="req">*</span></label>
                                                        <input type="text" id="customer_name" class="form-control" value="" name="customer_name" />
                                                    </div>


                                                    <div class="form-group  col-lg-6 col-md-12">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" id="phone" class="form-control" value="" name="phone" />
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="message">Address</label>
                                                    <textarea required id="address" class="form-control" cols="40" rows="7" name="address"></textarea>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success">Confirm an Order
                                                    </button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
