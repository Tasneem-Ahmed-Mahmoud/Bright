@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Features</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="d-flex justify-content-between px-4 py-2">
            <h5 class="card-header">Features</h5>
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalLong">
                New
            </button>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Fleet</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($features as $feature )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $feature->name }}</td>
                        <td>{{ $feature->fleet->name }}</td>
                        <td class="d-flex justify-content-between align-items-center">
                           
                            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#update{{ $feature->id }}">
                                Edit
                            </button>
                            <a data-confirm-delete="true" href="{{ route('features.destroy',$feature->id) }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>


                    <div class="col-lg-4 col-md-3">

                        <!-- Modal -->
                        <div class="modal fade" id="update{{ $feature->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLongTitle">Update Feature</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('features.update',$feature->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="modal-body">
                    
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname"> Feature</label>
                                                <input type="text" class="form-control" id="basic-default-fullname"
                                                    value="{{ old('name')?old('name'):$feature->name }}" name="name">
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <input type="text" hidden name="fleet_id" value="{{ $fleet_id }}">
                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                                                update
                                            </button>
                    
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    @endforeach
                </tbody>
            </table>

            <div class="float-end me-5">
                {{ $features->links() }}
            </div>

        </div>
    </div>
    <!--/ Basic Bootstrap Table -->



</div>

{{-- model --}}
<!-- Modal Scroll long content -->
<div class="col-lg-4 col-md-3">

    <!-- Modal -->
    <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLongTitle">New Feature</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('features.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname"> Feature</label>
                            <input type="text" class="form-control" id="basic-default-fullname"
                                value="{{ old('name')??'' }}" name="name">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <input type="text" hidden name="fleet_id" value="{{ $fleet_id }}">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                            Save
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>











@endsection