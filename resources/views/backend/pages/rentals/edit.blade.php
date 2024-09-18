@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Rentals</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
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
      <h6 class="mb-0">Update Rental Details</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3">
                 <div class="col-6">
                   <label class="form-label">Customer Name</label>
                   <input type="text" name="name" class="form-control" placeholder="Car name" disabled>
                 </div>
                 <div class="col-6">
                  <label class="form-label">Car Name</label>
                  <input type="text" name="car_name" class="form-control" placeholder="Car brand" disabled>
                </div>
                 <div class="col-6">
                  <label class="form-label">Car Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="Car model" disabled>
                </div>
                 <div class="col-6">
                  <label class="form-label">Rental Started From</label>
                  <input type="date" name="started_from" class="form-control">
                </div>
                 <div class="col-6">
                  <label class="form-label">Rental End</label>
                  <input type="date" name="started_from" class="form-control">
                </div>
                 <div class="col-6">
                  <label class="form-label">Total Cost</label>
                  <input type="date" name="started_from" class="form-control">
                </div>
                <div class="col-6">
                  <label class="form-label">Rental Status</label>
                  <select class="form-select">
                    <option>Ongoing</option>
                    <option>Cancel</option>
                    <option>Completed</option>
                  </select>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary">Update</button>
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
