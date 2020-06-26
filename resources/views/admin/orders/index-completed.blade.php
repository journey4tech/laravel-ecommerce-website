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
                                    <th>Customer Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Order Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($completedCustomers as $item)

                                <tr>

                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->customer_name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->address}}</td>


                                  <td>
                                      <?php
                                      $dt = new DateTime($item->created_at);
                                      $tz = new DateTimeZone('Asia/Dhaka');

                                    $dt->setTimezone($tz);
                                    echo $dt->format('F j, Y, g:i a');
                                  ?>
                                  </td>

                                    <td>{{ $item->status }} </td>
                                    <td class="action-column">

                                      <a href="{{route('admin.orders.show',$item->id)}}" class="btn btn-info" title="Orders View">
                                          <span class="fas fa-eye"></span>
                                      </a>

                                      {{--{!! Form::open(['url' => route('admin.updateStatus',$item->id),'method'=>'post']) !!}--}}
                                      {{--<button type="submit" title="Confrimed" name="status" value="Confrimed" class="btn btn-success" >--}}
                                          {{--<span class="fas fa-check-circle"></span>--}}
                                      {{--</button>--}}
                                      {{--{!! Form::close() !!}--}}

                                      {!! Form::open(['url' => route('admin.orders.destroy',$item->id),'method'=>'DELETE']) !!}

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
