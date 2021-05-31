@extends('layouts.app')

@section('title')
    Reports | Home
@endsection



@section('content')
    <section class="content">
        <h1><b><center>Reports</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

<center>

                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('product.productreport')}}">
                                            <h4><center><b>Product Reports</b></center></h4>
                                    </a>
                                </div>
                            </div>
                            </div>



                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('route.routereport')}}">
                                            <h4><center><b>Route Reports</b></center></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('shop.shopreport')}}">
                                            <h4><center><b>Shop Reports</b></center></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('attendence.attreport')}}">
                                            <h4><center><b>Attendance Reports</b></center></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('shop.unpreport')}}">
                                            <h4><center><b>Shop Unproductive Reports</b></center></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-teal">
                                    <div class="inner"><a href="{{route('shop.orderreport')}}">
                                            <h4><center><b>Orders Reports</b></center></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>




</center>
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
