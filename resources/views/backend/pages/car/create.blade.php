@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Cars</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
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
      <h6 class="mb-0">Add Car</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3">
                 <div class="col-6">
                   <label class="form-label">Name</label>
                   <input type="text" name="name" class="form-control" placeholder="Car name">
                 </div>
                 <div class="col-6">
                  <label class="form-label">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="Car brand">
                </div>
                 <div class="col-6">
                  <label class="form-label">Model</label>
                  <input type="text" name="model" class="form-control" placeholder="Car model">
                </div>
                 <div class="col-6">
                  <label class="form-label">Year of Manufacture</label>
                  <input type="text" name="manufacture" class="form-control" placeholder="Car year of manufacture">
                </div>
                <div class="col-6">
                  <label class="form-label">Car Type</label>
                  <select class="form-select">
                    <option>SUV</option>
                    <option>Sedan</option>
                  </select>
                </div>
                <div class="col-6">
                   <label class="form-label">Daily Rent Price</label>
                   <input type="text" name="daily_rent" class="form-control" placeholder="Car daily rent">
                </div>
                <div class="col-6">
                    <label class="form-label">Availability Status</label>
                    <select class="form-select">
                      <option>Available</option>
                      <option>Not Available</option>
                    </select>
                  </div>
                <div class="col-6">
                  <label class="form-label">Car Thumbnail</label>
                  <input type="file" name="image" class="form-control">
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary">Add Car</button>
                  </div>
                </div>
               </form>
             </div>
           </div>
         </div>
       </div><!--end row-->
    </div>
  </div>
@endsection
