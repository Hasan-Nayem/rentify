@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Cars</div>
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
    @if ($cars->count() == 0)
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong class="">No cars found!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @else
    <div class="d-flex align-items-center">
        <h5 class="mb-0">Manage Details</h5>
         <form class="ms-auto position-relative">
           <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
           <input class="form-control ps-5" type="text" placeholder="search">
         </form>
     </div>
    <div class="table-responsive mt-3">
        <table class="table align-middle">
          <thead class="table-secondary">
            <tr>
             <th>#</th>
             <th>Name</th>
             <th>Brand</th>
             <th>Model</th>
             <th>Manufacturing Year</th>
             <th>Body Type</th>
             <th>Daily Rent</th>
             <th>Availabliity</th>
             <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
                $i=1;
            @endphp
              @foreach ($cars as $car)
              <tr>
                  <td>{{ $i }}</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ asset($car->image) }}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">{{ $car->name }}</p>
                        </div>
                     </div>
                   </td>
                   <td>{{ $car->brand }}</td>
                   <td>{{ $car->model }}</td>
                   <td>{{ $car->year }}</td>
                   <td>{{ $car->car_type }}</td>
                   <td>{{ $car->daily_rent_price }}</td>
                   <td>
                        @if ($car->availability)
                            <span class="badge bg-success">Available</span>
                        @else
                            <span class="badge bg-danger">Not Available</span>
                        @endif
                   </td>
                   <td>
                     <div class="table-actions d-flex align-items-center gap-3 fs-6">
                       <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                       <a href="{{ route('car.edit', $car->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                       {{-- <a href="{{ route('car.delete', $car->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a> --}}
                       <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $car->id }}"><i class="bi bi-trash-fill"></i></a>
                     </div>
                   </td>
                 </tr>
                 <!-- Modal Start-->
                 <div class="modal fade" id="exampleModal{{ $car->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Deleting <span class="fw-bolder">{{ $car->name }}</span>. Are you sure?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <a href="{{ route('car.delete', $car->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Modal End -->
                @php
                    $i++;
                @endphp
              @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>
@endsection
