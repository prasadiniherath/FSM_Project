@extends('layouts.app')

@section('title')
    FSM | User
@endsection



@section('content')



    @if($msg = Session::get('add'))
        <div class="alert alert-default-primary">
            <p>{{$msg}}</p>
        </div>
    @endif

    <section class="content">
        <h1><b><center>User</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary"  href="{{route('user.create')}}">Create user</a>
                            <a class="btn btn-primary"  href="{{route('usertype.create')}}">Create user type</a>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped display nowrap">
                                <thead>
                                <tr>
                                    <th>user Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($user as $data)


{{--                                        <td>{{$data->route_name}}</td>--}}
                                        <td>{{$data->first_name}}</td>
                                        <td>{{$data->middle_name}}</td>
                                        <td>{{$data->last_name}}</td>
                                        <td>
                                            <form action="{{route('user.destroy',$data->userID )}}" method="POST">

                                                <a class="btn btn-primary" href="{{route('user.edit',$data->userID )}}">Edit</a>
                                                {{--                                                <button type="button" data-toggle="modal" class="btn btn-danger" data-target="#exampleModal" >Delete</button>--}}
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger">Delete</button>
                                                <a class="btn btn-primary" href="{{route('user.show',$data->userID )}}">View</a>


                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Delete Alert</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="color:#233554">
                                            You are going to delete a route. Do you want to continue ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>




                                        </div>
                                    </div>
                                </div>


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
        </div>

    </section>



@endsection


