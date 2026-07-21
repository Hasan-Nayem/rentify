@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Settings</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
  </div>
<div class="card">
    <div class="card-header py-3">
      <h6 class="mb-0">Admin Profile</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                 @csrf
                 <div class="col-12 text-center mb-3">
                   @if(!empty($user->avatar))
                     <img src="{{ asset($user->avatar) }}" alt="Avatar" class="rounded-circle border" width="120" height="120" style="object-fit: cover;">
                   @else
                     <div class="rounded-circle bg-secondary d-inline-flex align-items-center justify-content-center text-white" style="width: 120px; height: 120px; font-size: 48px;">
                       {{ strtoupper(substr($user->name, 0, 1)) }}
                     </div>
                   @endif
                 </div>
                 <div class="col-12">
                   <label class="form-label">Avatar</label>
                   <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*">
                   @error('avatar')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                   <small class="text-muted">Upload a profile photo (JPEG, PNG, GIF, SVG, WebP). Max 2MB.</small>
                 </div>
                 <div class="col-12">
                   <label class="form-label">Name</label>
                   <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your full name" value="{{ old('name', $user->name) }}">
                   @error('name')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-12">
                   <label class="form-label">Email</label>
                   <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="your@email.com" value="{{ old('email', $user->email) }}">
                   @error('email')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">New Password</label>
                   <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Leave blank to keep current">
                   @error('password')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                   <small class="text-muted">Minimum 8 characters.</small>
                 </div>
                 <div class="col-6">
                   <label class="form-label">Confirm New Password</label>
                   <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter new password">
                 </div>
                 <div class="col-12">
                   <div class="d-grid">
                     <button class="btn btn-primary"><i class="bi bi-person-check me-2"></i>Update Profile</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
@endsection