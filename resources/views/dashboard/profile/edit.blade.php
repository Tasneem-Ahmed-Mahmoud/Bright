@extends('dashboard.layout.master')

@section('content')
    



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
     <div class="col-9">
         <div class="card mb-4">
           <div class="card-header d-flex justify-content-between align-items-center">
             <h5 class="mb-0">Information Update</h5>
             
           </div>
           <div class="card-body">
             <form action="{{ route('profile.update') }}" method="POST" >
                @csrf
                @method('patch')
               <div class="mb-3">
                 <label class="form-label" for="basic-default-fullname">Full Name</label>
                 <input type="text" class="form-control" id="basic-default-fullname" value="{{ auth()->user()->name }}" name="name">
                 @error('name')
                     <small class="text-danger">{{ $message }}</small>
                 @enderror
               </div>
              
               <div class="mb-3">
                 <label class="form-label" for="basic-default-email">Email</label>
                 <div class="input-group input-group-merge">
                   <input type="text" id="basic-default-email" class="form-control"  name="email" value="{{ auth()->user()->email }}" aria-label="john.doe" aria-describedby="basic-default-email2">
                   @error('email')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
                 </div>
               
               </div>
              
               <button type="submit" class="btn btn-primary">Update</button>
             </form>
           </div>
         </div>
       </div>
    
    
    
    
    
       <div class="col-9">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Change Password</h5>
            
          </div>
          <div class="card-body">
            <form action="{{ route('password.update') }}" method="POST" >
               @csrf
               @method('put')
              <div class="mb-3">
                <label class="form-label" for="current">Current Password</label>
                <input type="password" class="form-control" id="current"  name="current_password">
                @error('current_password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
             
              <div class="mb-3">
                <label class="form-label" for="password">New Password</label>
                <input type="password" class="form-control" id="password"  name="password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="confirm">Confirm  Password</label>
                <input type="password" class="form-control" id="confirm"  name="password_confirmation">
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
             
              <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
          </div>
        </div>
      </div>
   
   
    
    </div>
    
    
   </div>
 
      
 
 @endsection


