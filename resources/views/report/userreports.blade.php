@extends("layouts.app")


@section('title')
    Product Report
@endsection

@section('content')



    <section class="content">
        <h4><b><center>Reports of Shops</center></b></h4>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a class="btn btn-primary"  href="{{route('report.index')}}">Back</a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>USer ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>NIC</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Telephone Number</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Branch Name</th>
                                    <th>Approvel State</th>
                                    <th>User Type</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Shop as $data)

                                    <tr>
                                        <td>{{$data->ShopID}}</td>
                                        <td>{{$data->shop_name}}</td>
                                        <td>{{$data->owner_name}}</td>
                                        <td>{{$data->owner_NIC}}</td>
                                        <td>{{$data->lat}}</td>
                                        <td>{{$data->lng}}</td>
                                        <td>{{$data->address_no}}</td>
                                        <td>{{$data->suburb}}</td>
                                        <td>{{$data->city}}</td>
                                        <td>{{$data->province}}</td>
                                        <td>{{$data->country}}</td>
                                        <td>{{$data->telephone_numbers}}</td>
                                        <td>{{$data->registered_date}}</td>
                                        <td>{{$data->due_dates}}</td>
                                        <td>{{$data->user_id}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td><img src="{{asset('uploads/shop/'.$data->image)  }}"
                                                 class="img-bordered-sm" width="75px;" height="75px;" alt="Product-Image"></td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
