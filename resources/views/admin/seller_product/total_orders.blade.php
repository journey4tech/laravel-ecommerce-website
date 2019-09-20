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
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                             @foreach ($order_full_details  as $product)
                              <tr>
                                  <td>
                                      {{$product->product_info->products->product_name}}
                                  </td>
                                  <td >{{$product->product_info->products->product_price}}</td>
                                  <td >{{$product->order_quantity}}</td>
                                  <td ></td>

                                    <td class="action-column">


                                        <a href="" class="btn btn-info" title="View">
                                            <span class="fas fa-eye"></span>
                                        </a>

                                        <button type="submit" title="Approved" name="status" value="1" class="btn btn-success" >
                                            <span class="fas fa-check-circle"></span>
                                        </button>



                                        <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>

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
