@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Rentals</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">History</li>
        </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
        </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
            @if ($history->count() > 0)
                <div class="col">
                    <div class="card border shadow-none radius-10">
                    <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box bg-light-primary border-0">
                        <i class="bi bi-person text-primary"></i>
                        </div>
                        <div class="info">
                            <h6 class="mb-2">Customer</h6>
                            <p class="mb-1">{{ $history[0]->users->name }}</p>
                            <p class="mb-1">{{ $history[0]->users->email }}</p>
                            <p class="mb-1">+880-1{{rand(111111111,999999999)}}</p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                <div class="card border shadow-none radius-10">
                    <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box bg-light-success border-0">
                        <i class="bi bi-truck text-success"></i>
                        </div>
                        <div class="info">
                            <h6 class="mb-2">Total booking Summery </h6>
                            <p class="mb-1"><strong>Booking placed</strong> : {{ $history->count() }}</p>
                            <p class="mb-1"><strong>Pay Method</strong> : Cash</p>
                            <p class="mb-1"><strong>Status</strong> : Active</p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                <div class="card border shadow-none radius-10">
                    <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box bg-light-danger border-0">
                        <i class="bi bi-geo-alt text-danger"></i>
                        </div>
                        <div class="info">
                        <h6 class="mb-2">Others</h6>
                        <p class="mb-1"><strong>Total spent</strong> : ${{ $totalSpend }}</p>
                        <p class="mb-1"><strong>Completed rental</strong> : {{$completeHistoryCount}}</p>
                        <p class="mb-1"><strong>Cancelled rental</strong> : {{ $cancelledHistoryCount }}</p>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
            @endif
      </div><!--end row-->
      <div class="card-header py-3">
        <div class="row g-3 align-items-center">
          <div class="col-12 col-lg-4 col-md-6 me-auto">
            <h5 class="mb-1">Booking History</h5>
          </div>
        </div>
       </div>
       @if ($history->count() == 0)
        <h5 class="mb-1 text-center mt-3">No History Found!</h5>
       @else
       <div class="row mt-3">
            <div class="col-12 col-lg-12">
            <div class="card border shadow-none radius-10">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Car name and type</th>
                            <th>Daily Price</th>
                            <th>Pickup Location</th>
                            <th>Dropoff Location</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($history  as $history)
                        <tr>
                            <td>
                            <div class="orderlist">
                                <a class="d-flex align-items-center gap-2" href="javascript:;">
                                <div class="product-box">
                                    <img src="{{asset($history->cars->image)}}" style="width: 25px" alt="">
                                </div>
                                <div>
                                    <p class="mb-0 product-title"> {{ $history->cars->name }} | {{ $history->cars->car_type }} </p>
                                </div>
                                </a>
                            </div>
                            </td>
                            <td>${{ $history->cars->daily_rent_price }}</td>
                            <td>{{ $history->pickup_location }}</td>
                            <td>{{ $history->drop_off_location }}</td>
                            <td>
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$history->start_date)->format('F d, Y');
                                }}
                            </td>
                            <td>
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$history->end_date)->format('F d, Y');
                                }}
                            </td>
                            <td>{{ $history->total_cost }}</td>
                            <td>{{ $history->status }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
        </div><!--end row-->
       @endif

    </div>
  </div>
@endsection
