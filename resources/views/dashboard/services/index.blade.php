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
              <th>Image</th>
              <th >Description</th>
              <th >Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
           @foreach ($services as $service )

           <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $service->name }}</td>
            <td>
                <img src="{{ asset($service::PATH.$service->mainService->name.'/'.  $service->image->name) }}" style="width: 5rem ;height:5rem">
            </td>
            <td>{{ $service->description }}</td>
            <td class="d-flex justify-content-between align-items-center">
              <form action="{{ route('services.edit',$service->id) }}" mathod="post">
                  @csrf
                  @method('put')

                  <button type="submit" class="btn btn-info">Edit</button>
              </form>
              <a  data-confirm-delete="true" href="{{ route('services.destroy',$service->id) }}" class="btn btn-danger">Delete</a>
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