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
                                    <h4 class="text-center"> Review Information</h4>
                                    <table class="table table-striped">

                                        <tr>
                                            <td> Visitor Name:</td>
                                            <td>{{ $review->visitor_name}}</td>
                                        </tr>
                                        <tr>
                                            <td> Product Name :</td>
                                            <td>{{$review->product->product_name}}</td>
                                        </tr>
                                        <tr>
                                            <td> Review</td>
                                            <td>{{$review->review}}</td>
                                        </tr>

                                       <tr>
                                            <td>Date </td>
                                            <td>{{$review->getTime()}}</td>
                                        </tr>
                                        <tr>
                                            <td> Review Status </td>
                                            <td>
                                                <form action="{{ route('admin.reviews.status') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="review_id" value="{{$review->id}}">
                                                    <select name="status">
                                                        <option {{ $review->status == 'Pending' ? " Selected": ''}}>Pending</option>
                                                        <option {{ $review->status == 'Approved' ? " Selected": ''}}>Approved</option>

                                                    </select>

                                                    <input type="submit"  value="Change">
                                                </form>

                                            </td>
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
