@extends('admin.layout.index')
@section('title', 'List of Dentist')
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
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dentists as $s)
                        <tr>
                            <td>{{$s->dentist_name}}</td>
                            <td>
                                @if($s->dentist_status == 0)
                                <span class="badge badge-secondary">Not Available</span>
                                @else
                                <span class="badge badge-success">Available</span>
                                @endif
                            </td>
                             <td><a class="btn btn-success "><i class="fa fa-eye"></i></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Dentist</h5>
   
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('/admin/dentist') }}">
                @csrf

                <div class="form-group">

                    <input type="text" class="form-control form-control-user" name="dentist_name" placeholder="Name">

                </div>
                <div class="form-group">
                    <select class="form-control" name="dentist_status" aria-label="Default select example">
                        <option selected>Status</option>
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


@endsection