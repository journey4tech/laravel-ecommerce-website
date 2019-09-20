@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <h4 class="text-center"> Product Info</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td> ID:</td>
                                        <td>{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Name:</td>
                                        <td>{{$order->customer->name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Phone Number :</td>
                                        <td>{{$order->customer->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <td> Delievery Location </td>
                                        <td>{{$order->customer->delivery_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name:</td>
                                        <td>
                                            <?php
                                              $name = json_decode($order->product_name);
                                                              ?>
                                                <ul>
                                                    @foreach($name as $value)
                                                    <li>{{ $value }}</li>
                                                    @endforeach
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Price:</td>
                                        <td>{{$order->product_price}}</td>
                                    </tr>

                                    <tr>
                                        <td>Product Quantity</td>
                                        <td>
                                            <?php
                                              $quantity = json_decode($order->product_qty);
                                                              ?>
                                                <ul>
                                                    @foreach($quantity as $qty)
                                                    <li>{{ $qty }}</li>
                                                    @endforeach
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method :</td>
                                        <td>{{$order->pay_method->name}}</td>

                                    </tr>

                                </table>
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
