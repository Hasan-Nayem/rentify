@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">CMS</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Homepage Sections</li>
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
      <h6 class="mb-0">Homepage CMS Sections</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
          <table class="table align-middle">
              <thead class="table-secondary">
                <tr>
                 <th>#</th>
                 <th>Section</th>
                 <th>Status</th>
                 <th>Last Updated</th>
                 <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sections as $index => $section)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $section['section_label'] }}</strong></td>
                    <td>
                      @if($section['status'] == 'Saved')
                        <span class="badge bg-success">Saved</span>
                      @else
                        <span class="badge bg-warning text-dark">Not Set</span>
                      @endif
                    </td>
                    <td>{{ $section['updated_at'] }}</td>
                    <td>
                      <a href="{{ route('backend.cms.edit', [$section['page'], $section['section']]) }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil-fill"></i> Edit
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
      </div>
    </div>
  </div>
@endsection
