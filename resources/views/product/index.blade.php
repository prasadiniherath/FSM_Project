@extends("layouts.app")

@section('title')
    FSM | Product
@endsection


@section('content')

@if($msg=Session::get('alert'))
<div class="alert alert-default-primary">
    <p>{{$msg}}</p>
</div>
@endif



<section class="content">
    <h1><b><center>Products</center></b></h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary"  href="{{route('product.create')}}">Create Product</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCreateModel" >Create Category</button><br>
                                    <form action="{{route('category.store')}}" method="POST">
                                        @csrf
                                        <div class="modal fade" id="createCreateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


                                            <!-- header of the popup form    -->

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <h5 class="modal-title" id="exampleModalLabel">Add new category details</h5>

                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                                                    </div>




                                                    <!-- Lable and text box of Product Name: -->

                                                    <div class="modal-body">

                                                        <div class="form-group">

                                                            <label>Category Name :</label><br>

                                                            <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
{{--                                                            @if ($errors->has('category_name'))--}}
{{--                                                                <span class="text-danger">{{ $errors->first('category_name') }}</span>--}}
{{--                                                            @endif--}}
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Cost Price</th>
                                            <th>Sales Price</th>
                                            <th width="200px">Category</th>
                                            <th class="text-center" width="380px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $data)

                                            <tr>
                                                <td>{{$data->product_Name}}</td>
                                                <td>{{$data->cost_price}}</td>
                                                <td>{{$data->sales_price}}</td>
                                                <td>{{$data->categories->category_name}}</td>
                                                <td>
                                                    <form action="{{route('product.destroy',$data->productID)}}" method="POST">
                                                        <a class="btn btn-primary" href="{{route('product.edit',$data->productID)}}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>


                                                        <a class="btn btn-success" href="{{route('product.show',$data->productID)}}">View</a>
                                                    </form>
                                                </td>

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
