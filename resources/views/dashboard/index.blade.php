@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <i class="bx bxl-angular bx-sm text-danger me-3"></i>
               
              </td>
              <td> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore possimus numquam cumque blanditiis? Tenetur nostrum possimus unde beatae, est minus Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam facere. Molestiae ducimus quam optio expedita, molestias quisquam accusamus deleniti voluptatem earum excepturi. Provident optio architecto recusandae, soluta nemo reiciendis. expedita quos aperiam excepturi corporis laudantium sunt, consectetur, distinctio ullam. </td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li >
                    <img src="{{ asset('dashboard') }}/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle " style="height: 5rem; width:5rem">
                  </li>
                
                </ul>
              </td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          
            <tr>
                <td>
                  <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                 
                </td>
                <td> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore possimus numquam cumque blanditiis? Tenetur nostrum possimus unde beatae, est minus Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam facere. Molestiae ducimus quam optio expedita, molestias quisquam accusamus deleniti voluptatem earum excepturi. Provident optio architecto recusandae, soluta nemo reiciendis. expedita quos aperiam excepturi corporis laudantium sunt, consectetur, distinctio ullam. </td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li >
                      <img src="{{ asset('dashboard') }}/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle " style="height: 5rem; width:5rem">
                    </li>
                  
                  </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>

     

@endsection