@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>  fleets</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">fleets</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th >#</th>
              <th >Name</th>
              <th>Photo</th>
              <th >Description</th>
              <th>Features</th>
              <th>Images</th>
              <th >Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
           @foreach ($fleets as $fleet )

           <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $fleet->name }}</td>
            <td>
                <img src="{{ asset($fleet::PATH. $fleet->photo) }}" style="width: 5rem ;height:5rem" alt="({{ $fleet->alt }})">
            
              </td>
            <td><!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalLong{{ $fleet->id }}">
                Description
              </button></td>
              <td > 
             
                <a  href="{{ route('features.index',$fleet->id) }}" class="btn btn-warning">Features</a>
             
              </td>
              <td > 
                <div class="d-flex justify-content-between">
                  <a  href="{{ route('images.index',$fleet->id) }}" class="btn btn-success"> Images</a>
                </div>
                </td>
            <td >
        <div class="d-flex justify-content-between ">
          <form action="{{ route('fleets.edit',$fleet->id) }}" mathod="post">
            @csrf
            @method('put')

            <button type="submit" class="btn btn-info">Edit</button>
        </form>
        <a  data-confirm-delete="true" href="{{ route('fleets.destroy',$fleet->id) }}" class="btn btn-danger">Delete</a>
      
        </div>
            </td>
          </tr>
               


                 {{-- model --}}
  <!-- Modal Scroll long content -->
  <div class="col-lg-4 col-md-3">
   
    <!-- Modal -->
    <div class="modal fade" id="modalLong{{ $fleet->id }}" tabindex="-1" aria-hidden="true">
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
            
           
            <p>{{ $fleet->description }}</></p>
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

       <div class="float-end me-5">
        {{ $fleets->links() }}
       </div>

      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>

     

@endsection