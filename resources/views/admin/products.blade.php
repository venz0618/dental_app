@extends('admin.layout.index')
@section('title', 'List of Products')
@section('button_name', 'ADD')
@section('admin_content')

<div class="container-fluid">

    <!-- Page Heading -->
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="appointment" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Type of Products</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Type of Services</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>$183,000</td>
                             <td><a class="btn btn-success "><i class="fa fa-eye"></i></a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection