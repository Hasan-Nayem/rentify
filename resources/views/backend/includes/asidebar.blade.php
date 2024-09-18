<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        {{-- <img src="{{ asset('/backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon"> --}}
        <img class="logo-2" src="{{ asset('/frontend/images/logo.png') }}" alt="">
    </div>
      <div>
        <h4 class="logo-text"></h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
        <a href="{{ route("dashboard.admin") }}">
          <div class="parent-icon"><i class="bi bi-house-fill"></i>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-car"></i>
          </div>
          <div class="menu-title">Car</div>
        </a>
        <ul>
          <li> <a href="{{ route('car.index') }}"><i class="bi bi-circle"></i>Manage Cars</a>
          </li>
          <li> <a href="{{ route('car.create') }}"><i class="bi bi-circle"></i>Add New Car</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-coin"></i>
          </div>
          <div class="menu-title">Rents</div>
        </a>
        <ul>
          <li> <a href="{{ route('rentals.index') }}"><i class="bi bi-circle"></i>Manage Rents</a>
          </li>
          {{-- <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Data Widgets</a>
          </li> --}}
        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">Customers</div>
        </a>
        <ul>
          <li> <a href="{{ route('customer.index') }}"><i class="bi bi-circle"></i>Manage Customer</a>
          </li>
          {{-- <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>
          </li> --}}
        </ul>
      </li>
      {{-- <li class="menu-label">Others</li> --}}
    </ul>
    <!--end navigation-->
 </aside>
 <!--end sidebar -->
