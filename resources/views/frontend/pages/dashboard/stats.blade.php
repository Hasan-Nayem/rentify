@extends('frontend.pages.dashboard')
@section('dashboard-layout')
<div class="row">
    <div class="col-lg-3 col-6 mb25 order-sm-1">
        <div class="card padding30 rounded-5">
            <div class="symbol mb40">
                <i class="fa id-color fa-2x fa-calendar-check-o"></i>
            </div>
            <span class="h1 mb0">{{ $pendingCount }}</span>
            <span class="text-gray">Pending Orders</span>
        </div>
    </div>

    <div class="col-lg-3 col-6 mb25 order-sm-1">
        <div class="card padding30 rounded-5">
            <div class="symbol mb40">
                <i class="fa id-color fa-2x fa-tags"></i>
            </div>
            <span class="h1 mb0">{{ $scheduledCount }}</span>
            <span class="text-gray">Scheduled</span>
        </div>
    </div>

    <div class="col-lg-3 col-6 mb25 order-sm-1">
        <div class="card padding30 rounded-5">
            <div class="symbol mb40">
                <i class="fa id-color fa-2x fa-calendar"></i>
            </div>
            <span class="h1 mb0">{{ $completedCount }}</span>
            <span class="text-gray">Total Orders</span>
        </div>
    </div>

    <div class="col-lg-3 col-6 mb25 order-sm-1">
        <div class="card padding30 rounded-5">
            <div class="symbol mb40">
                <i class="fa id-color fa-2x fa-calendar-times-o"></i>
            </div>
            <span class="h1 mb0">{{ $cancelledCount }}</span>
            <span class="text-gray">Cancel Orders</span>
        </div>
    </div>
</div>

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}!</strong> Please wait for admin approval.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($orders->count() == 0)
    <div class="alert alert-info alert-dismissible fade show text-dark" role="alert">
        You haven't place any order yet.<strong><a href="{{ route('showCars') }}"> Click here to order!</a></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@else
<div class="card padding30 rounded-5 mb25">
    <h4>My Recent Orders</h4>

    <table class="table de-table">
      <thead>
        <tr>
          <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
          <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
          <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
          <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
          <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
          <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
          <th scope="col"><span class="fs-12 text-gray">Status</span></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
            <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#{{ $order->id }}</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{ $order->cars->name }}</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{ $order->pickup_location }}</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{ $order->drop_off_location }}</td>
                {{-- <td><span class="d-lg-none d-sm-block">Pick Up Date</span>{{ $order->start_date }}</td> --}}
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>
                    {{ $order->start_date }}
                </td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>{{ $order->end_date }}</td>
                <td>
                    @if ($order->status == 'pending')
                        <div class="badge rounded-pill bg-warning">Pending</div>
                    @elseif ($order->status == 'scheduled')
                        <div class="badge rounded-pill bg-info">Scheduled</div>
                    @elseif ($order->status == 'completed')
                        <div class="badge rounded-pill bg-info">Completed</div>
                    @elseif ($order->status == 'cancelled')
                        <div class="badge rounded-pill bg-info">Cancelled</div>
                    @endif

                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endif


<div class="card padding30 rounded-5">
    <h4>My Favorites</h4>
    <div class="spacer-10"></div>
    <div class="de-item-list no-border mb30">
        <div class="d-img">
            <img src="images/cars/jeep-renegade.jpg" class="img-fluid" alt="">
        </div>
        <div class="d-info">
            <div class="d-text">
                <h4>Jeep Renegade</h4>
                <div class="d-atr-group">
                    <ul class="d-atr">
                        <li><span>Seats:</span>4</li>
                        <li><span>Luggage:</span>2</li>
                        <li><span>Doors:</span>4</li>
                        <li><span>Fuel:</span>Petrol</li>
                        <li><span>Horsepower:</span>500</li>
                        <li><span>Engine:</span>3000</li>
                        <li><span>Drive:</span>4x4</li>
                        <li><span>Type:</span>Hatchback</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-price">
            Daily rate from <span>$265</span>
            <a class="btn-main" href="car-single.html">Rent Now</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="de-item-list no-border mb30">
        <div class="d-img">
            <img src="images/cars/bmw-m5.jpg" class="img-fluid" alt="">
        </div>
        <div class="d-info">
            <div class="d-text">
                <h4>BMW M2</h4>
                <div class="d-atr-group">
                    <ul class="d-atr">
                        <li><span>Seats:</span>4</li>
                        <li><span>Luggage:</span>2</li>
                        <li><span>Doors:</span>4</li>
                        <li><span>Fuel:</span>Petrol</li>
                        <li><span>Horsepower:</span>500</li>
                        <li><span>Engine:</span>3000</li>
                        <li><span>Drive:</span>4x4</li>
                        <li><span>Type:</span>Hatchback</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-price">
            Daily rate from <span>$244</span>
            <a class="btn-main" href="car-single.html">Rent Now</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="de-item-list no-border mb30">
        <div class="d-img">
            <img src="images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
        </div>
        <div class="d-info">
            <div class="d-text">
                <h4>Ferarri Enzo</h4>
                <div class="d-atr-group">
                    <ul class="d-atr">
                        <li><span>Seats:</span>4</li>
                        <li><span>Luggage:</span>2</li>
                        <li><span>Doors:</span>4</li>
                        <li><span>Fuel:</span>Petrol</li>
                        <li><span>Horsepower:</span>500</li>
                        <li><span>Engine:</span>3000</li>
                        <li><span>Drive:</span>4x4</li>
                        <li><span>Type:</span>Hatchback</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-price">
            Daily rate from <span>$167</span>
            <a class="btn-main" href="car-single.html">Rent Now</a>
        </div>
        <div class="clearfix"></div>
    </div>

</div>
@endsection
