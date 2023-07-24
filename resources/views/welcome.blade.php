@extends('layouts.app')
@push('style')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center" style="background: gray; color:#f1f7fa; font-weight:bold;">
                    Create New Data
                </div>
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create New User
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form 
            class="w-px-500 p-3 p-md-3 needs-validation" 
            action="{{ route('user.store') }}" 
            method="post"
            role="form"
            novalidate
        >
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card-body">                    
                <div class="row mb-3 form-group">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            placeholder="Name"
                            maxlength="10" 
                            minlength="3"
                            pattern="^[a-zA-Z0-9_.-]*$"
                            required
                        >
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="row mb-3 form-group">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input 
                            type="email" 
                            class="form-control" 
                            name="email" 
                            placeholder="Email"
                            required
                        >
                    </div>
                </div>
                <div class="row mb-3 form-group">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input 
                            type="password" 
                            class="form-control" 
                            name="password" 
                            id="password"
                            placeholder="Password"
                            minlength="4"
                            required
                        >
                    </div>
                </div>
                <div class="row mb-3 form-group">
                    <label class="col-sm-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input 
                            type="password" 
                            class="form-control" 
                            name="confirm_password" 
                            placeholder="Confirm password"
                            required
                        >
                    </div>
                </div>
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

@endsection
@push('script')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
});
</script>
@endpush