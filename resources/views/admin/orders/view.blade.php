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
                                        <td>{{ $customer->customer_name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Phone Number :</td>
                                        <td>{{$customer->phone}}</td>
                                    </tr>

                                    <tr>
                                        <td> Delievery Location </td>
                                        <td>{{$customer->address}}</td>
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
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Color</th>
                                        <th>Total Order</th>

                                        <th>Regular Price</th>
                                        <th>Discount</th>
                                        <th>Discounted Price</th>
                                    </tr>
                                    @php
                                        $total_cost = 0;
                                    @endphp
                                    @foreach($orders as $order)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$order->product->product_name}}</td>
                                            <td>{{$order->product->sub_category->name}}</td>
                                            <td>{{$order->product->type}}</td>
                                            <td>{{$order->color}}</td>
                                            <td>{{$order->total_order}}</td>
                                            <td>{{$order->product->product_price}}</td>
                                            <td>{{$order->product->discount}}%</td>
                                            <td>{{ $total_cost += 200 }}</td>

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
