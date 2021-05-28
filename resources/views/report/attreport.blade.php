@extends("layouts.app")


@section('title')
    Attendance Report
@endsection

@section('content')



    <section class="content">
        <h4><b><center>Reports of Attendance</center></b></h4>
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
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Check IN</th>
                                    <th>Check Out</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($att as $data)

                                    <tr>
                                        <td>{{$data->user_id}}</td>
                                        <td>{{$data->user->first_name}}  {{$data->user->last_name}}</td>
                                        <td>{{$data->check_in_time}}</td>
                                        <td>{{$data->check_out_time}}</td>

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
