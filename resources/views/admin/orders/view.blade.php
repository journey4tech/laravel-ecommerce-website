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
                                        <td>{{$order->customer->customer_name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Phone Number :</td>
                                        <td>{{$order->customer->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td> Order Amount :</td>
                                        <td>{{$order->total_order}}</td>
                                    </tr>
                                    <tr>
                                        <td> Delievery Location </td>
                                        <td>{{$order->customer->address}}</td>
                                    </tr>
                                    <tr>
                                        <td> Order Status </td>
                                        <td>
                                            <form action="{{ route('status.change') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <select name="status">
                                                    <option {{ $order->status == 'Pending' ? " Selected": ''}}>Pending</option>
                                                    <option {{ $order->status == 'Confirmed' ? " Selected": ''}}>Confirmed</option>

                                                </select>

                                                <input type="submit"  value="Change">
                                            </form>

                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4 class="text-center"> Product Information</h4>
                                <table class="table table-striped">

                                    <tr>
                                        <td> Product Name:</td>
                                        <td>{{$order->product->product_name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Title :</td>
                                        <td>{{$order->product->product_title}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Category </td>
                                        <td>{{$order->product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Type </td>
                                        <td>{{$order->product->type}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Price </td>
                                        <td>{{$order->product->product_price}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Special Price </td>
                                        <td>{{$order->product->special_price}}</td>
                                    </tr>
                                    <tr>
                                        <td> Product Color </td>
                                        <td>{{$order->color}}</td>
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
