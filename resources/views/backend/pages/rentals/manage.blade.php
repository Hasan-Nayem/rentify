@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Rentals</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Manage</li>
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
  <div class="card-body">
    <div class="d-flex align-items-center">
       <h5 class="mb-0">Rental Details</h5>
        <form class="ms-auto position-relative">
          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
          <input class="form-control ps-5" type="text" placeholder="search">
        </form>
    </div>
    <div class="table-responsive mt-3">
      <table class="table align-middle">
        <thead class="table-secondary">
          <tr>
           <th>Rent ID</th>
           <th>Customer Name</th>
           <th>Car Details</th>
           <th>Rental Started From</th>
           <th>Rental End</th>
           <th>Total Cost</th>
           <th>Status</th>
           <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <td>1</td>
            <td>
              <div class="d-flex align-items-center gap-3 cursor-pointer">
                 <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                 <div class="">
                   <p class="mb-0">Thomas Hardy</p>
                 </div>
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center gap-3 cursor-pointer">
                 <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                 <div class="">
                   <p class="mb-0">Toyota Premio, Brand: Toyota</p>
                 </div>
              </div>
            </td>
            <td>16/08/2024</td>
            <td>19/09/2024</td>
            <td>15500/= Bdt</td>
            <td>
                <p class="badge bg-warning text-white">Ongoing</p>
                {{-- <p class="badge bg-danger text-white">Cancelled By User</p>
                <p class="badge bg-danger text-white">Cancelled By Admin</p>
                <p class="badge bg-success text-white">Ccomplted</p> --}}
            </td>
            <td>
              <div class="table-actions d-flex align-items-center gap-3 fs-6">
                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                <a href="{{ route('rentals.edit',1) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                {{-- <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a> --}}
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
