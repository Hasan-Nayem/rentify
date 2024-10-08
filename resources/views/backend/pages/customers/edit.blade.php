@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Customer</div>
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
      <h6 class="mb-0">Update Customer Details</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3" method="POST" action="{{ route('customer.update', $customer->id) }}">
                 @csrf
                 <div class="col-4">
                   <label class="form-label">Customer Name</label>
                   <input type="text" name="name" class="form-control" placeholder="Customer name"  value="{{ $customer->name }}">
                 </div>
                 <div class="col-4">
                  <label class="form-label">Customer email</label>
                  <input type="text" name="email" class="form-control" placeholder="Customer email"  value="{{ $customer->email }}">
                </div>
                 <div class="col-4">
                  <label class="form-label">Customer phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="Customer phone" disabled value="01521394776">
                </div>
                <hr>
                 <div class="col-4">
                  <label class="form-label"><span class="badge bg-danger">User Access</span></label>
                  <select name="role" id="role" class="form-control">
                    <option value="admin" @if($customer->role == 'admin') selected @endif class="text-danger">Admin</option>
                    <option value="customer" @if($customer->role == 'customer') selected @endif>Customer</option>
                  </select>
                </div>
                 <div class="col-12">
                  <label class="form-label">Customer Address</label>
                  <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Customer address"></textarea>
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
