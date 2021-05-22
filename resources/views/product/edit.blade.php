@extends("layouts.app")


@section('title')
    Product-Edit | Sales Automation system
@endsection


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
                                    <h3 class="float-left"><b>Product Edit</b></h3>
                                    <a class="btn btn-primary float-right" href="{{route('product.index')}}">back</a>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">

                            <form action="{{route('product.update',$product->productID)}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Product Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$product->product_Name}}" name="product_Name" placeholder="Enter product name" value="{{old('product_Name')}}">
                                        @if ($errors->has('product_Name'))
                                            <span class="text-danger">{{ $errors->first('product_Name') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Cost Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$product->cost_price}}" name="cost_price" placeholder="Enter cost price" value="{{old('cost_price')}}">
                                        @if ($errors->has('cost_price'))
                                            <span class="text-danger">{{ $errors->first('cost_price') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Sales Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$product->sales_price}}" name="sales_price" placeholder="Enter sales price" value="{{old('sales_price')}}">
                                        @if ($errors->has('sales_price'))
                                            <span class="text-danger">{{ $errors->first('sales_price') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Labled Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$product->labled_price}}" name="labled_price" placeholder="Enter labled price" value="{{old('labled_price')}}">
                                        @if ($errors->has('labled_price'))
                                            <span class="text-danger">{{ $errors->first('labled_price') }}</span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Weight</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$product->weight}}" name="weight" placeholder="Enter weight" value="{{old('weight')}}">
                                        @if ($errors->has('weight'))
                                            <span class="text-danger">{{ $errors->first('weight') }}</span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="category_id" >
                                            <option value="{{$product->category_id}}">{{$product->category_id}} - {{$product->categories->category_name}}</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->categoryID}}">{{$category->categoryID}} -  {{$category->category_name}} </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>



                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                    <a class="btn btn-secondary" href="{{route('product.index')}}">Cancel</a>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section
@endsection
