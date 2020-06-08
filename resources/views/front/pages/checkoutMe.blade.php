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
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cartcontent as $data)
                                                <tr class="cart_item">
                                                    <td class="product-name">{{$data->name}}
                                                        <strong class="product-quantity">× {{$data->qty}}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">৳ {{$data->price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount">৳ {{Cart::subtotal()}}</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Delevery Charge</th>
                                                <td><span class="amount">৳ 50</span></td>
                                            </tr>




                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="amount">৳ {{$total = str_replace(',', '', Cart::subtotal()) +50}}</span></strong> </td>
                                            </tr>
                                            </tfoot>
                                        </table>



                                    </div>

                                    <div class="contact-form-wrapper col-md-6 col-sm-12">

                                        <div class="title-wrapper">
                                            <h3>Provide  Information</h3>

                                        </div>

                                        <div class="contact-form">
                                            {!! Form::open(['url' => route('order.confirm'),'method'=>'post']) !!}

                                            <div id="contact-form">
                                                <div class="row">
                                                    <div class="form-group col-lg-6 col-md-12">
                                                        <label for="name">Name<span class="req">*</span></label>
                                                        <input type="text" id="name" class="form-control" value="" name="name" />
                                                    </div>


                                                    <div class="form-group  col-lg-6 col-md-12">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" id="phone" class="form-control" value="" name="phone" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="number" id="address" class="form-control" value="" name="address" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea required id="message" class="form-control" cols="40" rows="7" name="description"></textarea>
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
