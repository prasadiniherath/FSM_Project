@extends("layouts.app")


@section('title')
    Detailed Report of Order
  Made By : {{$orders[0]->first_name}} {{$orders[0]->last_name}}
   Placed Date : {{$orders[0]->placed_date}}
   Shop Name : {{$orders[0]->shop_name}}
   Total Bill Value : {{$orders[0]->bill_value}}

@endsection

@section('content')



    <section class="content">
        <h3><b><center>Reports of Order Details</center></b></h3>
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


                            <table></table>
                            <h4><b><center>Made By : {{$orders[0]->first_name}} {{$orders[0]->last_name}}</center></b></h4>
                            <h4><b><center>Placed Date : {{$orders[0]->placed_date}}</center></b></h4>
                            <h4><b><center>Shop Name : {{$orders[0]->shop_name}}</center></b></h4>
                            <h4><b><center>Total Order Value : {{$orders[0]->bill_value}}</center></b></h4>
                            <h4><b><center>Return Value : {{$orders[0]->return_total}}</center></b></h4>
                            <h4><b><center>Final Bill : {{$orders[0]->final_bill}}</center></b></h4>
                            <table id="example15" class="table  table-responsive-md">
                                <thead>
                                <tr>
{{--                                    <th >Order ID</th>--}}
                                    <th>Product Name</th>
                                    <th>QTY</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $data)

                                    <tr>
{{--                                        <td>{{$data->OrderID}}</td>--}}
                                        <td>{{$data->product_Name}}</td>
                                        <td>{{$data->quantity_per_product}}</td>

                                    </tr>

                                @endforeach

                                <tr>
                                    <td><b>Total No Of Products</b></td>
                                    <td><b>{{$ordertotal[0]->quantity}}</b></td>
                                </tr>


                                </tbody>


                            </table>

                            <br><br>



                            <h1><b><center>Returns</center></b></h1>



                            <table id="example15" class="table  table-responsive-md">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>QTY</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($returns as $data)

                                    <tr>
                                        <td>{{$data->product_Name}}</td>
                                        <td>{{$data->quantity_per_product}}</td>
                                    </tr>

                                @endforeach

{{--                                <tr>--}}
{{--                                    <td><b>Total No Of Products</b></td>--}}
{{--                                    <td><b>{{$ordertotal[0]->quantity}}</b></td>--}}
{{--                                </tr>--}}
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


@section('jscript')



    {{--for csv pdf execl--}}
    <script >
        $(document).ready(function() {
            $('#example15').DataTable( {
                dom: 'B',
                buttons: ['print','pdf']
            } );
        } );
    </script>





@endsection
