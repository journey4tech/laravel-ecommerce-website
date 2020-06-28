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
                                    <h4 class="text-center"> Customer Information</h4>
                                    <table class="table table-striped">

                                        <tr>
                                            <td> Customer Name:</td>
                                            <td>{{ $customer->name}}</td>
                                        </tr>
                                        <tr>
                                            <td> Customer Phone Number :</td>
                                            <td>{{$customer->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td> District</td>
                                            <td>{{$customer->district}}</td>
                                        </tr>

                                        <tr>
                                            <td> Delievery Location </td>
                                            <td>{{$customer->address}}</td>
                                        </tr>
                                        <tr>
                                            <td> Payment Type </td>
                                            <td>{{$customer->payment_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>Money Received From Mobile No. </td>
                                            <td>{{$customer->your_bkash_no ?? 'Not Available'}}</td>
                                        </tr>
                                        <tr>
                                            <td> Order Status </td>
                                            <td>
                                                <form action="{{ route('status.change') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                                    <select name="status">
                                                        <option {{ $customer->status == 'Pending' ? " Selected": ''}}>Pending</option>
                                                        <option {{ $customer->status == 'Completed' ? " Selected": ''}}>Completed</option>

                                                    </select>

                                                    <input type="submit"  value="Change">
                                                </form>

                                            </td>
                                        </tr>

                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <h4 class="text-center"> Order Information</h4>
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Order No.</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <th>Color</th>
                                            <th>Total Order</th>

                                            <th>Product Price</th>
                                            <th>Price</th>


                                        </tr>
                                        @php
                                            $subtotal = 0;
                                            $total_cost = 0;
                                        @endphp
                                        @foreach($orders as $order)
                                            @php
                                                $images=collect(json_decode($order->product->multiple))->first();
                                                    $subtotal =  $order->total_order * ($order->product->special_price ?? $order->product->product_price);
                                                    $total_cost +=$subtotal;
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$order->product->product_name}}</td>
                                                <td><img style="width:100px;height:100px;" src="{{ asset('uploads/documents/productimages/'.$images) }}" /></td>
                                                <td>{{$order->product->sub_category->name}}</td>
                                                <td>{{$order->product->type}}</td>
                                                <td>{{$order->color}}</td>
                                                <td>{{$order->total_order}}</td>
                                                <td>{{$order->product->special_price ?? $order->product->product_price}}</td>
                                                <td>{{$subtotal}}</td>



                                            </tr>

                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Service Charge:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                            <td style="background: green;color:white"><b>Total Cost:</b> </td>
                                            <td style="background: green;color:white">{{ $total_cost }}</td>
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
