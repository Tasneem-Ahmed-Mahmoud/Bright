@extends('dashboard.layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row justify-content-center">
   <div class="col-10">
       <div class="card mb-4">
         <div class="card-header d-flex justify-content-between align-items-center">
           <h5 class="mb-0">Update  Service</h5>
           
         </div>
         <div class="card-body">
           <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
             @method('put')
             <div class="mb-3">
               <label class="form-label" for="basic-default-fullname"> Name</label>
               <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('name')? old('name'):$service->name}}" name="name">
               @error('name')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
             </div>
             <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description" >{{ old('description')? old('description'):$service->description}}</textarea>
              @error('description')
              <small class="text-danger">{{ $message }}</small>
          @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control mb-2" type="file" id="formFile" name="image">
                <img src="{{ asset($service::PATH.$service->mainService->name.'/'. $service->image->name) }}" style="width: 5rem;height:5rem">
                @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname"> Image Alt</label>
                <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('alt')?old('alt'):$service->image->alt }}" name="alt">
                @error('alt')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mt-2 mb-3">
                <label for="largeSelect" class="form-label">Main Service</label>
                <select id="largeSelect" class="form-select form-select-lg" name="main_service_id">
                 @foreach ($main_services as $main_service )
                 <option value="{{ $main_service->id }}"  {{ $service->main_service_id==$main_service->id?'selected':'' }}>{{ $main_service->name }}</option>
                 @endforeach
                 @error('main_service_id')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname"> Url</label>
                <input type="text" class="form-control" id="basic-default-fullurl" value="{{ old('url')? old('url'):$service->seo->url }}" name="url">
                @error('url')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname"> SEO Title</label>
                <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('title')?old('title'):$service->seo->title }}" name="title">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> SEO Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="seo_description" >{{ old('seo_description')?old('seo_description'):$service->seo->description }}</textarea>
                @error('seo_description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
              </div>
            
            <div class="float-end">
              <button type="submit" class="btn btn-primary px-5">Update</button>
            </div>
           </form>
         </div>
       </div>
     </div>
  
  </div>
</div>

@endsection