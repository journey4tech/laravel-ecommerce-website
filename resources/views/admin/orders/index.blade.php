@extends('admin.master') @section('content')

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
                                    <th>Coustomer Name</th>
                                    <th>Product Name</th>
                                    <th>Product Qty</th>
                                    <th>Product Price</th>
                                    <th>Location</th>

                                    <th>Customer Phone </th>
                                    <th>Order Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pending_orders as $data)

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

                                  <td>
                                      <?php
                                      $dt = new DateTime($data->created_at);
                                      $tz = new DateTimeZone('Asia/Dhaka');

                                    $dt->setTimezone($tz);
                                    echo $dt->format('F j, Y, g:i a');
                                  ?>
                                  </td>


                                    <td class="action-column">

                                      <a href="{{route('admin.orders.show',$data->id)}}" class="btn btn-info" title="Orders View">
                                          <span class="fas fa-eye"></span>
                                      </a>

                                      {!! Form::open(['url' => route('admin.updateStatus',$data->id),'method'=>'post']) !!}
                                      <button type="submit" title="Confrimed" name="status" value="Confrimed" class="btn btn-success" >
                                          <span class="fas fa-check-circle"></span>
                                      </button>
                                      {!! Form::close() !!}

                                      {!! Form::open(['url' => route('admin.orders.destroy',$data->id),'method'=>'DELETE']) !!}

                                        <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                        {!! Form::close() !!}
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
