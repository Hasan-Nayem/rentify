@extends('frontend.pages.dashboard')
@section('dashboard-layout')


    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Pending Orders</h4>

        @if ($pendingOrder->count() == 0)
            <div class="alert alert-info alert-dismissible fade show text-dark" role="alert">
                <strong>No Pending Orders found</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
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
                    <th scope="col"><span class="fs-12 text-gray">Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendingOrder as $order)
                        <tr>
                            <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#{{ $order->id }}</div></td>
                            <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{$order->cars->name}}</span></td>
                            <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{$order->pickup_location}}</td>
                            <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{$order->drop_off_location}}</td>
                            <td><span class="d-lg-none d-sm-block">Pick Up Date</span>
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$order->start_date)->format('F d, Y');
                                }}
                              </td>
                            <td><span class="d-lg-none d-sm-block">Return Date</span>
                                {{
                                    \Carbon\Carbon::createFromFormat('d/m/y',$order->end_date)->format('F d, Y');
                                }}
                            </td>
                            <td><div class="badge rounded-pill bg-warning" style="background-size: 100%; background-repeat: no-repeat;">pending</div></td>
                            <td>
                                <span class="d-lg-none d-sm-block">Action</span>
                                <a href="{{ route('rental.cancel', $order->id) }}" class="btn btn-danger">Cancel</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Scheduled Orders</h4>

        @if ($scheduledOrder->count() == 0)
            <div class="alert alert-info alert-dismissible fade show text-dark" role="alert">
                <strong>No Scheduled Orders found</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
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
                <th scope="col"><span class="fs-12 text-gray">Action</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scheduledOrder as $order)
                    <tr>
                        <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#{{ $order->id }}</div></td>
                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{$order->cars->name}}</span></td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{$order->pickup_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{$order->drop_off_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->start_date)->format('F d, Y');
                            }}
                        </td>
                        <td><span class="d-lg-none d-sm-block">Return Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->end_date)->format('F d, Y');
                            }}
                        </td>
                        <td><div class="badge rounded-pill bg-info" style="background-size: 100%; background-repeat: no-repeat;">scheduled</div></td>
                        <td>
                            <span class="d-lg-none d-sm-block">Action</span>
                            <a href="{{ route('rental.cancel', $order->id) }}" class="btn btn-danger">Cancel</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @endif
    </div>

    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Completed Orders</h4>

        @if ($completedOrder->count() == 0)
            <div class="alert alert-info alert-dismissible fade show text-dark" role="alert">
                <strong>No Scheduled Orders found</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
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
                @foreach ($completedOrder as $order)
                    <tr>
                        <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#{{ $order->id }}</div></td>
                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{$order->cars->name}}</span></td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{$order->pickup_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{$order->drop_off_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->start_date)->format('F d, Y');
                            }}
                        </td>
                        <td><span class="d-lg-none d-sm-block">Return Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->end_date)->format('F d, Y');
                            }}
                          </td>
                        <td><div class="badge rounded-pill bg-success" style="background-size: 100%; background-repeat: no-repeat;">completed</div></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @endif

    </div>
    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Cancelled Orders</h4>
        @if ($cancelledOrder->count() == 0)
            <div class="alert alert-info alert-dismissible fade show text-dark" role="alert">
                <strong>No Scheduled Orders found</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
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
                @foreach ($cancelledOrder as $order)
                    <tr>
                        <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#{{ $order->id }}</div></td>
                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{$order->cars->name}}</span></td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{$order->pickup_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{$order->drop_off_location}}</td>
                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->start_date)->format('F d, Y');
                            }}
                        </td>
                        <td><span class="d-lg-none d-sm-block">Return Date</span>
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$order->end_date)->format('F d, Y');
                            }}
                        </td>
                        <td><div class="badge rounded-pill bg-danger" style="background-size: 100%; background-repeat: no-repeat;">cancelled</div></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @endif

    </div>
@endsection
