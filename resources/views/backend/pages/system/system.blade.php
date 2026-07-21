@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Settings</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">System</li>
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
      <h6 class="mb-0">System Settings</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3" method="POST" action="{{ route('system.update') }}" enctype="multipart/form-data">
                 @csrf
                 <div class="col-6">
                   <label class="form-label">System / App Name</label>
                   <input type="text" name="system_name" class="form-control @error('system_name') is-invalid @enderror" placeholder="Application name" value="{{ old('system_name', $settings->system_name ?? '') }}">
                   @error('system_name')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Copyright Text</label>
                   <input type="text" name="copyright" class="form-control @error('copyright') is-invalid @enderror" placeholder="e.g. &copy; 2026 Rentaly. All rights reserved." value="{{ old('copyright', $settings->copyright ?? '') }}">
                   @error('copyright')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Logo</label>
                   <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" accept="image/*">
                   @error('logo')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                   @if(!empty($settings->logo))
                     <div class="mt-2 d-flex align-items-center gap-2">
                       <img src="{{ asset($settings->logo) }}" alt="Current Logo" style="max-height: 50px;" class="border rounded p-1">
                       <small class="text-muted">Current logo</small>
                     </div>
                   @endif
                 </div>
                 <div class="col-6">
                   <label class="form-label">Favicon</label>
                   <input type="file" name="favicon" class="form-control @error('favicon') is-invalid @enderror" accept="image/*">
                   @error('favicon')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                   @if(!empty($settings->favicon))
                     <div class="mt-2 d-flex align-items-center gap-2">
                       <img src="{{ asset($settings->favicon) }}" alt="Current Favicon" style="max-height: 32px;" class="border rounded p-1">
                       <small class="text-muted">Current favicon</small>
                     </div>
                   @endif
                 </div>
                 <div class="col-12">
                   <label class="form-label">Address</label>
                   <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Company address" rows="3">{{ old('address', $settings->address ?? '') }}</textarea>
                   @error('address')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-12">
                   <div class="d-grid">
                     <button class="btn btn-primary"><i class="bi bi-gear me-2"></i>Save System Settings</button>
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