@extends('admin.master')
@section('content')

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
                                <li class="breadcrumb-item"><a href="#">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">All Users</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title"></h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>

                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th> Phone Number</th>
                                    <th>Home Address</th>
                                    <th>Delievery Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>

                                    <th scope="row">{{$data->id}}</th>
                                    <td>

                                        <img style="width:100px;height:100px;" class="rounded-circle avatar-lg img-thumbnail" src="{{asset('uploads/userimages/'.$data->image)}}">
                                    </td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->home_address}}</td>
                                    <td>{{$data->delivery_address}}</td>

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
