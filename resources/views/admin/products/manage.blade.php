@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Product</h4>
                          <h2>{{ Session::get('message') }}</h2>

                    <div class="table-responsive">
                        <table class="table table-striped fixed mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach($products as $product)

                                <tr>
                                    <th scope="row">{{$product->id}}</th>

                                    <td>{{$product->product_name}}</td>
                                    <td> {{$product->sub_category->category->name}}</td>
                                    <td> {{$product->sub_category->name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->status==1?'Published':'Unpublished'}}</td>


                      {!! Form::open(['url' => route('admin.products.destroy',$product ->id),'method'=>'DELETE']) !!}

                                    <td>


                                        {{--<a href="{{route('admin.products.show',$product->id)}}" class="btn btn-info" title="Product View">--}}
                                            {{--<span class="fas fa-eye"></span>--}}
                                        {{--</a>--}}
                                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-success" title="Product Edit">
                                            <span class="fas fa-pen"></span>
                                        </a>
                                        <button type="submit" title="Product Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                    {!! Form::close() !!}

                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        {{ $products->render() }}

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
