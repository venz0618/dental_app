@extends('admin.layout.index')
@section('title', 'Appoinments')
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
                            <th>Name</th>
                            <th>Sevices</th>
                            <th>Dentist</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Date Updated</th>
                            <th>Status</th>
                           
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Sevices</th>
                            <th>Dentist</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Date Updated</th>
                            <th>Status</th>
                     
                           
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($app as $a)
                        <tr>
                            <td>{{$a->firstname}} {{$a->lastname}}</td>
                            <td>{{$a->service_name}}</td>
                            <td>{{$a->dentist_name}}</td>
                            <td>{{$a->date}}</td>
                            <td>{{$a->time}}</td>
                            <td>{{$a->updated_at}}</td>
                            <td>
                                @if($a->app_status == 1)
                      
                                <span class="badge badge-success">Approved</span>
                                @else
                                <span class="badge badge-warning">Decline</span>
                                @endif
                            </td>

                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection