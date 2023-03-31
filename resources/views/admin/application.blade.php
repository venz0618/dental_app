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
                            <th>Date Submitted</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Sevices</th>
                            <th>Dentist</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Date Submitted</th>
                            <th>Status</th>
                            <th>Action</th>
                           
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
                            <td>{{$a->date_submitted}}</td>
                            <td>
                                @if($a->app_status == 0)
                                <span class="badge badge-secondary">Pending</span>
                                @else
                                <span class="badge badge-success">Approved</span>
                                @endif
                            </td>

                             <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->app_id}}"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@foreach($app as $a)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$a->app_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('/admin/dentist') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-user" name="dentist_name" placeholder="{{$a->firstname}} {{$a->lastname}}">

                </div>
                <div class="form-group">
                    <label for="services">Services</label>
                    <input type="text" class="form-control form-control-user" name="dentist_name" placeholder="{{$a->service_name}}">

                </div>
                <div class="form-group">
                    <label for="dentist">Dentist</label>
                    <input type="text" class="form-control form-control-user" name="dentist_name" placeholder="{{$a->dentist_name}}">

                </div>
                <div class="form-group">
                    <select class="form-control" name="app_status" aria-label="Default select example">
                        <option disabled selected>Status</option>
                        <option value="1">Apporved</option>
                        <option value="2">Decline</option>
                        
                      </select>

                </div>
                <div class="form-group">
                   
                </div>
                
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
    </form>
        </div>
        
      </div>
    </div>
  </div>
@endforeach

@endsection