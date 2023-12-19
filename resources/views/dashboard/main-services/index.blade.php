@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Main Services</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Main Services</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th >#</th>
              <th >Name</th>
              <th >Description</th>
              <th >Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
           @foreach ($main_services as $main_service )

           <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $main_service->name }}</td>
            <td>{{ $main_service->description }}</td>
            <td class="d-flex justify-content-between align-items-center">
              <form action="{{ route('main-services.edit',$main_service->id) }}" mathod="post">
                  @csrf
                  @method('put')

                  <button type="submit" class="btn btn-info">Edit</button>
              </form>
              <a  data-confirm-delete="true" href="{{ route('main-services.destroy',$main_service->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
               
           @endforeach
          
          
            
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>

     

@endsection