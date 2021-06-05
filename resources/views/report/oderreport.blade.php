@extends("layouts.app")


@section('title')
    Order Report
@endsection

@section('content')



    <section class="content">
        <h3><b><center>Reports of Orders</center></b></h3>
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
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Shop Name</th>
                                    <th>Bill value</th>
                                    <th>Placed Date</th>
                                    <th>User</th>
                                    <th>More</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ordrep as $data)

                                    <tr>
                                        <td>{{$data->OrderID}}</td>
                                        <td>{{$data->shop_name}}</td>
                                        <td>{{$data->bill_value}}</td>
                                        <td>{{$data->placed_date}}</td>
                                        <td>{{$data->first_name}}</td>
                                        <th> <a class="btn btn-success" href="{{route('shop.orderdetailreport',$data->OrderID)}}">View</a></th>


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
