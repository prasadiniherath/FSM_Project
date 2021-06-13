@extends("layouts.app")


@section('title')
    Unproductive Report
@endsection

@section('content')



    <section class="content">
        <h4><b><center>Reports of Unproductive Shops</center></b></h4>
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
                                    <th>Shop Name</th>
                                    <th>Reason</th>
                                    <th>Date</th>
                                    <th>Sales Representative</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($unp as $data)

                                    <tr>
                                        <td>{{$data->shop_name}}</td>
                                        <td>{{$data->unproductive_reason}}</td>
                                        <td>{{$data->unproductive_date}}</td>
                                        <td>{{$data->first_name}} {{$data->last_name}} </td>
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
