@extends("layouts.app")

@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Product Details</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('product.index')}}">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

<div class="row">
    <div class="table table-responsive">
        <table class="table table-bordered" id="productTable">

            <tr>
                <th>Product</th>
                <th>Details</th>
            </tr>

            <tr>
                <td>Product Id</td>
                <td> {{$product->productID}}</td>
            </tr>

            <tr>
                <td>Product Name</td>
                <td> {{$product->product_Name}}</td>
            </tr>

            <tr>
                <td>Cost Price</td>
                <td> {{$product->cost_price}}</td>
            </tr>

            <tr>
                <td>Sales Price</td>
                <td> {{$product->sales_price}}</td>
            </tr>

            <tr>
                <td>Labled Price</td>
                <td> {{$product->labled_price}}</td>
            </tr>

            <tr>
                <td>Weight</td>
                <td> {{$product->weight}}</td>
            </tr>


            <tr>
                <td>Category </td>
                <td> {{$product->categories->category_name}}</td>
            </tr>


            <tr>
                <td>Created At</td>
                <td> {{$product->created_at}}</td>
            </tr>

            <tr>
                <td>Updated At</td>
                <td> {{$product->updated_at}}</td>
            </tr>


            @endsection

        </table>
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
    </section>
