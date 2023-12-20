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
            <td>
              <div class="demo-inline-spacing">
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalLong{{ $main_service->id }}">
                  Description
                </button>
              </div>
            </td>
            
            <td class="d-flex justify-content-between align-items-center">
              <form action="{{ route('main-services.edit',$main_service->id) }}" mathod="post">
                  @csrf
                  @method('put')

                  <button type="submit" class="btn btn-info">Edit</button>
              </form>
              <a  data-confirm-delete="true" href="{{ route('main-services.destroy',$main_service->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
               


          {{-- model --}}
  <!-- Modal Scroll long content -->
  <div class="col-lg-4 col-md-3">
   
    <!-- Modal -->
    <div class="modal fade" id="modalLong{{ $main_service->id }}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Description</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
           
            <p>{{ $main_service->description }}</></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
           
          </div>
        </div>
      </div>
    </div>  
  </div>
           @endforeach
          
          
            
          </tbody>
        </table>
        {{ $main_services->links() }}
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>
  
  

  

@endsection