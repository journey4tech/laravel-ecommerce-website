@extends('admin.master') @section('content')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="header-title">Manage Reviews</h4>
                        <h2>{{ Session::get('message') }}</h2>

                        <div class="table-responsive">
                            <table class="table table-striped fixed mb-0">
                                <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Visitor Name</th>
                                    <th>Product Name</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($reviews as $item)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>

                                        <td>{{$item->visitor_name}}</td>
                                        <td> {{$item->product->product_name}}</td>
                                        <td> {{$item->review}}</td>
                                        <td>{{$item->status }}</td>



                                        {!! Form::open(['url' => route('admin.reviews.destroy',$item->id),'method'=>'get']) !!}

                                        <td>


                                            {{--<a href="{{route('admin.products.show',$product->id)}}" class="btn btn-info" title="Product View">--}}
                                            {{--<span class="fas fa-eye"></span>--}}
                                            {{--</a>--}}
                                            <a href="{{route('admin.reviews.show',$item->id)}}" class="btn btn-success" title="Review show">
                                                <span class="fas fa-pen"></span>
                                            </a>
                                            <button type="submit" title="Review Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </td>
                                        {!! Form::close() !!}

                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                            {{ $reviews->render() }}

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
