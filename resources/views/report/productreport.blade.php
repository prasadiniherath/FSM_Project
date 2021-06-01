@extends("layouts.app")


@section('title')
    Product Report
@endsection

@section('content')



    <section class="content">
        <h3><b><center>Reports of Products</center></b></h3>
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
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Cost Price</th>
                                    <th>Sales Price</th>
                                    <th>Labeled Price</th>
                                    <th>Weight</th>
                                    <th>Category name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $data)

                                    <tr>
                                        <td>{{$data->productID}}</td>
                                        <td>{{$data->product_Name}}</td>
                                        <td>{{$data->cost_price}}</td>
                                        <td>{{$data->sales_price}}</td>
                                        <td>{{$data->labled_price}}</td>
                                        <td>{{$data->weight}}</td>
                                        <td>{{$data->categories->category_name}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>

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
