@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Customers</div>
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
       <h5 class="mb-0">Customer Details</h5>
        <form class="ms-auto position-relative">
          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
          <input id="search" class="form-control ps-5" type="text" placeholder="search">
        </form>
    </div>
    <div class="table-responsive mt-3">
      <table class="table align-middle">
        <thead class="table-secondary">
          <tr>
           <th>#SL</th>
           <th>Customer Name</th>
           <th>Access Type</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Address</th>
           <th>Rental History</th>
           <th>Action</th>
          </tr>
        </thead>
        <tbody id="user_table_body">
            @php
                $i=1;
            @endphp
            @foreach ($customers as $customer)
            <tr>
            <td>{{ $i }}</td>
            <td>
              <div class="d-flex align-items-center gap-3 cursor-pointer">
                 {{-- <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt=""> --}}
                 <i class="bx bx-user text-primary"></i>
                 <div class="">
                   <p class="mb-0">{{ $customer->name }}</p>
                 </div>
              </div>
            </td>
            <td>
                @if ($customer->role == 'admin')
                    <span class="badge bg-danger">Admin</span>
                @else
                    <span class="badge bg-primary">Customer</span>
                @endif
            </td>
            <td>{{ $customer->email }}</td>
            <td>01521394776</td>
            <td>Lorem ipsum dolor sit ...</td>
            <td class="">
                {{-- fadeIn animated bx bx-history --}}
                <a href="{{ route('rentals.history', $customer->id) }}" class="text-info fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Show History" aria-label="Show History"><i class="bx bx-history"></i></a>
            </td>
            <td>
              <div class="table-actions d-flex align-items-center gap-3 fs-6">
                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                <a href="{{ route('customer.edit',$customer->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                {{-- <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a> --}}
              </div>
            </td>
            @php
                $i++;
            @endphp
            @endforeach
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    document.getElementById('search').addEventListener('input', function() {
        let query = this.value;
        console.log(query);
        fetch(`/search-users?query=${query}`)
            .then(response => response.json())
            .then(data => {
                // console.log(data);
                let tableBody = document.getElementById('user_table_body');
                tableBody.innerHTML = '';
                data.forEach((user, index) => {
                    // let imgURL = `http://127.0.0.1:8000/${car.image}`;
                    // let editURL = `/admin/car/edit/${car.id}`;
                    // console.log(imgURL);

                    tableBody.innerHTML += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <i class="bx bx-user text-primary"></i>
                                    <div class="">
                                        <p class="mb-0">${user.name}</p>
                                    </div>
                                </div>
                            </td>
                            <td>${user.role}</td>
                            <td>${user.email}</td>
                            <td>${user.phone}</td>
                            <td>${user.address}</td>
                            <td>
                                <a href="/admin/customer/history/${user.id}" class="text-info fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Show History" aria-label="Show History"><i class="bx bx-history"></i></a>
                            </td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/admin/customer/edit/${user.id}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            });
    });
  </script>
@endsection
