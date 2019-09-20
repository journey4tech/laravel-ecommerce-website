@extends('customer.master') @section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Yinimini</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.categories.create')}}">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Total Orders </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h2>{{ Session::get('message') }}</h2>
                    <h4 class="header-title">Manage Orders</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th> Name</th>
                                    <th>Product Name</th>
                                    <th>Product Qty</th>
                                    <th>Product Price</th>
                                    <th>Location</th>

                                    <th> Phone </th>

                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $data)

                                <tr>

                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->customer->name}}</td>
                                    <td>
                                        <?php
                                            $name = json_decode($data->product_name);
                                                            ?>
                                            <ul>
                                                @foreach($name as $value)
                                                <li>{{ $value }}</li>
                                                @endforeach
                                            </ul>
                                    </td>
                                    <td>
                                        <?php
                                            $quantity = json_decode($data->product_qty);
                                                            ?>
                                            <ul>
                                                @foreach($quantity as $qty)
                                                <li>{{ $qty }}</li>
                                                @endforeach
                                            </ul>
                                    </td>
                                    <td>{{$data->product_price}}</td>
                                    <td>{{$data->delivery_address}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>

                                        <a href="" class="btn btn-info" title="Confrimed">
                                            <span class="fas fa-eye"></span>
                                        </a>

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>
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
