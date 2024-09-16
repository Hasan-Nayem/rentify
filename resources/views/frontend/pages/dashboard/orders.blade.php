@extends('frontend.pages.dashboard')
@section('dashboard-layout')
    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Scheduled Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01245</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari Enzo</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kentucky</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Michigan</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 14, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 16, 2023</td>
              <td><div class="badge rounded-pill bg-warning" style="background-size: 100%; background-repeat: no-repeat;">scheduled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01245</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">VW Polo</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Philadelphia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Washington</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 16, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 18, 2023</td>
              <td><div class="badge rounded-pill bg-warning" style="background-size: 100%; background-repeat: no-repeat;">scheduled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01216</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Toyota Rav 4</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Baltimore</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Sacramento</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 19, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 20, 2023</td>
              <td><div class="badge rounded-pill bg-warning" style="background-size: 100%; background-repeat: no-repeat;">scheduled</div></td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Completed Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01236</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Jeep Renegade</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>New York</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Los Angeles</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 11, 2023</td>
              <td><div class="badge rounded-pill bg-success" style="background-size: 100%; background-repeat: no-repeat;">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01287</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Hyundai Staria</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Nevada</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>New Mexico</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 6, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
              <td><div class="badge rounded-pill bg-success" style="background-size: 100%; background-repeat: no-repeat;">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01236</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Range Rover</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Virginia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Oregon</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
              <td><div class="badge rounded-pill bg-success" style="background-size: 100%; background-repeat: no-repeat;">completed</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01287</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">BMW M2</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kansas City</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Houston</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 1, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 14, 2023</td>
              <td><div class="badge rounded-pill bg-success" style="background-size: 100%; background-repeat: no-repeat;">completed</div></td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="card padding30 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
        <h4>Cancelled Orders</h4>

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
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01263</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Mini Cooper</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>San Fransisco</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Chicago</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
              <td><div class="badge rounded-pill bg-danger" style="background-size: 100%; background-repeat: no-repeat;">cancelled</div></td>
            </tr>
            <tr>
              <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark" style="background-size: 100%; background-repeat: no-repeat;">#01263</div></td>
              <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ford Raptor</span></td>
              <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Georgia</td>
              <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Lousiana</td>
              <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
              <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
              <td><div class="badge rounded-pill bg-danger" style="background-size: 100%; background-repeat: no-repeat;">cancelled</div></td>
            </tr>
          </tbody>
        </table>
    </div>
@endsection
