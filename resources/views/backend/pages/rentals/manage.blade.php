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
           <th>Status</th>
           <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                <td>#{{ $order->id }}</td>
                    <td>
                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                        <p class="mb-0">{{$order->users->name}}</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ asset($order->cars->image) }}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                        <p class="mb-0">{{$order->cars->name}}, Brand: {{$order->cars->brand}}</p>
                        </div>
                    </div>
                    </td>
                    <td>
                        @if ($order->status == 'completed')
                            <p class="badge bg-success text-white">Complted</p>
                        @elseif ($order->status == 'pending')
                            <p class="badge bg-warning text-white">Pending</p>
                        @elseif ($order->status == 'scheduled')
                            <p class="badge bg-info text-white">Scheduled</p>
                        @elseif ($order->status == 'cancelled')
                            <p class="badge bg-danger text-white">Cancelled</p>
                        @endif
                    </td>
                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" type="button" data-bs-toggle="modal" data-bs-target="#reantalModal{{ $order->id }}" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                        <a href="{{ route('rentals.edit',1) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    </div>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="reantalModal{{ $order->id }}" tabindex="-1" aria-labelledby="reantalModal{{ $order->id }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="reantalModal{{ $order->id }}Label">Booking details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1 class="text-center">User Information</h1>
                            <img src="https://i.ibb.co.com/f0n9cMk/logo.png" alt="" srcset="" class="img-thumbnail my-2">
                            <p class="">User Name: {{ $order->users->name }}</p>
                            <p class="">Email: {{ $order->users->email }}</p>
                            <p class="">Phone: {{ $order->users->phone }}</p>
                            <h1 class="text-center">Trip Information</h1>
                            <p class="">Picup Location: {{ $order->pickup_location }}</p>
                            <p class="">Dropoff Location: {{ $order->drop_off_location }}</p>
                            <p class="">Starting Date:
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$order->start_date)->format('F d, Y');
                                }}
                            </p>
                            <p class="">Ending Date:
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$order->end_date)->format('F d, Y');
                                }}
                            </p>
                            <h4 class="fw-bolder text-center text-success">Total revenue - {{ $order->total_cost }}</h4>
                            <p class="badge bg-success">Payment Method:  Cash</p>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close now</button>
                            <button type="button" class="btn btn-danger">Cancel this booking</button> --}}
                            @if ($order->status == 'completed')
                                <p class="">Trip is completed</p>
                            @elseif ($order->status == 'pending')
                              <a type="button" href="{{ route('rentals.approved', $order->id) }}" class="btn btn-success">Approve this booking</a>
                              <a type="button" href="{{ route('rentals.cancelled', $order->id) }}" class="btn btn-danger">Cancel this booking</a>
                            @elseif ($order->status == 'scheduled')
                              <a type="button" href="{{ route('rentals.completed', $order->id) }}" class="btn btn-success">Mark as completed</a>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal -->
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
