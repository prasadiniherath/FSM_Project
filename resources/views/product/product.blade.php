@extends("layouts.app")

@section('content')


<div class="container">
    <div class="row">

        <div class="col-sm">
        </div>

        <div class="col-sm">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Product Details</button><br><br>

        </div>

        <div class="col-sm">
            <table class="table table-bordered">
                <tr>
                    <th>Product_ID</th>
                    <th>Product_Name</th>
                    <th>Cost_price</th>
                    <th>Sales_price</th>
                    <th>Labled_price</th>
                    <th>Weight</th>
                    <th>Expire_date	</th>
                    <th>User_id</th>
                    <th>Category_id</th>
                    <th>Action</th>
                </tr>

            </table>
        </div>


    </div>



    <form action="{{route('product.store')}}" method="POST">
        @csrf

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new product details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>



                    <div class="modal-body">
                        <div class="form-group">
                            <label>Product Name:</label><br>
                            <input type="text" class="form-control" name="product_Name" placeholder="Enter product name">
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="form-group">
                            <label>Cost Price</label><br>
                            <input type="text" class="form-control" name="cost_price" placeholder="Enter cost price">
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="form-group">
                            <label>Sales Price</label><br>
                            <input type="text" class="form-control" name="sales_price" placeholder="Enter sales price">
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="form-group">
                            <label>Labled Price</label><br>
                            <input type="text" class="form-control" name=" labled_price" placeholder="Enter labled price">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Weight</label><br>
                            <input type="text" class="form-control" name=" weight" placeholder="Enter weight">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Expire Date</label><br>
                            <input type="date" class="form-control" name="Expire_date" placeholder="Enter expire date">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>User Id</label><br>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user id">
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category ID</label><br>
                            <input type="text" class="form-control" name="category_id" placeholder="Enter category name">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>

            </div>
    </form>


    @endsection
