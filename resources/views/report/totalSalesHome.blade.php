@extends('layouts.app')

@section('title')
    Reports | Home
@endsection



@section('content')
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

{{--                    First Card--}}
                    <div class="card">
                        <div class="card-header row" >
                            <div class="float-left">
                            <h3><b>Total Sales</b></h3>
                            </div>
                            <label  class="col-sm-10 control-label"></label>
                                <a class="btn btn-primary float-right"  style="margin: 5px" href="{{route('report.index')}}">Back</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                                <form  action="{{route('shop.allSales')}}" method="GET">
                                    @csrf
                                    <div class="row">
                                        <label  class="col-sm-1 control-label">Start Date:</label>
                                        <input  type="date"  name="start_date"  required >

                                        <label  class="col-sm-1 control-label"></label>

                                        <label  class="col-sm-1 control-label">End Date:</label>
                                        <input  type="date"  name="end_date"  required >

                                        <label  class="col-sm-2 control-label"></label>

                                        <button type="submit"  Value="Save" class="btn btn-success">View Report</button>
                                    </div>
                                </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
{{--First card End--}}
                    <br><br>


{{--Second carrd--}}
                    <div class="card">
                        <div class="card-header" >
                            <h3><b>User Wise Sales</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form  action="{{route('shop.allSalesByUser')}}" method="GET">
                                @csrf
                                <div class="row">
                                    <label  class="col-sm-1 control-label">Start Date:</label>
                                    <input  type="date"  name="start_date"  required >

                                    <label  class="col-sm-1 control-label"></label>

                                    <label  class="col-sm-1 control-label">End Date:</label>
                                    <input  type="date"  name="end_date"  required >

                                    <label  class="col-sm-2 control-label"></label>

                                    <button type="submit"  Value="Save" class="btn btn-success">View Report</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
{{--Second Card end--}}
<br><br>

  {{--third carrd--}}
                    <div class="card">
                        <div class="card-header" >
                            <h3><b>Product Wise  Sales</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form  action="{{route('shop.allSalesOfProducts')}}" method="GET">
                                @csrf
                                <div class="row">
                                    <label  class="col-sm-1 control-label">Start Date:</label>
                                    <input  type="date"  name="start_date"  required >

                                    <label  class="col-sm-1 control-label"></label>

                                    <label  class="col-sm-1 control-label">End Date:</label>
                                    <input  type="date"  name="end_date"  required >

                                    <label  class="col-sm-2 control-label"></label>

                                    <button type="submit"  Value="Save" class="btn btn-success">View Report</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                {{--third Card end--}}

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
