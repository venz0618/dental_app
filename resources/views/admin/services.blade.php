@extends('admin.layout.index')
@section('title', 'List of Services')
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
                            <th>Type of Services</th>
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
                        @foreach ($services as $s)
                        <tr>
                            <td>{{$s->service_name}}</td>
                            <td>
                                @if($s->service_status == 0)
                                <span class="badge badge-secondary">Not Available</span>
                                @else
                                <span class="badge badge-success">Available</span>
                                @endif
                            </td>
                             <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal{{$s->id}}"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Sevices</h5>
              
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('/admin/services') }}">
                        @csrf

                        <div class="form-group">

                            <input required type="text" class="form-control form-control-user" name="service_name" placeholder="Type Of Services">

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="service_status" aria-label="Default select example">
                                <option disabled selected>Status</option>
                                <option value="0">Not Available</option>
                                <option value="1">Available</option>
                                
                              </select>

                        </div>
                        <div class="form-group">
                           
                        </div>
                        
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
            </div>
        </div>


        @foreach($services as $s)
<!-- Modal -->
<div class="modal fade" id="updateModal{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('services.update', $s->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Type of Services</label>
                    <input type="text" class="form-control form-control-user" name="service_name" value="{{$s->service_name}}">

                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="service_status" aria-label="Default select example">
                        <option disabled selected>Status</option>
                        <option value="0">Not Available</option>
                        <option value="1">Available</option>
                        
                      </select>

                </div>

                          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
        </div>
      </div>
   
@endforeach

@endsection