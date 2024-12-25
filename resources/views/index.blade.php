@extends('layout.layout')
@section('content')

    {{-- {{$role}} --}}

    {{-- <img src="/uploads/1729801633hasnat.jpg" alt=""> --}}
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{route('dashboard')}}" class="text-nowrap logo-img">
            <img src="images/logos/logo-light.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        {{-- @if($role==='admin') --}}
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    {{-- <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                          <span>
                            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                          </span>
                          <span class="hide-menu">Home</span>
                        </a>
                      </li> --}}

                      {{-- <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="true">
                          <span>
                            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                          </span>
                          <span class="hide-menu">Home</span>
                        </a>
                      </li> --}}
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('customerList')}}" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Customer</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('categoryList')}}" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Category</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('productList')}}" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Product</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('invoiceList')}}" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('reportList')}}" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Report</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="/show-map" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Growth</span>
                    </a>
                  </li>


                  {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
                    <span class="hide-menu">AUTH</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="/logout" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Logout</span>
                    </a>
                  </li> --}}

                  {{-- <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4" class="fs-6"></iconify-icon>
                    <span class="hide-menu">EXTRA</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:sticker-smile-circle-2-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Icons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Sample Page</span>
                    </a>
                  </li>
                </ul> --}}
                {{-- <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3">
                  <div class="d-flex">
                    <div class="unlimited-access-title me-3">
                      <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">Upgrade to pro</h6>
                      <a href="#" target="_blank"
                        class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
                    </div>
                    <div class="unlimited-access-img">
                      <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div> --}}
              </nav>
              <!-- End Sidebar navigation -->
        {{-- @elseif($role==='customer') --}}
        {{-- <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="./index.html" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu">Home</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index.html" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu">Invoice List</span>
                </a>
              </li>
            </ul>
            </nav> --}}
        {{-- @endif --}}

      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              {{-- <a href="#" target="_blank"
                class="btn btn-primary me-2"><span class="d-none d-md-block">LogOut</span> <span class="d-block d-md-none">Pro</span></a> --}}

              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{route('profile')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> --}}
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
           <!-- Introduction Section -->
  <header class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Welcome to Our POS System</h1>
      <p class="lead">Efficiently manage sales and inventory for restaurants, food shops, and more.</p>
    </div>
  </header>

  <!-- Category Section -->
  <section class="container my-5 text-center">
    <h2>Select a Category</h2>
    <div class="d-flex justify-content-center flex-wrap gap-4 my-4">
      <button class="category-btn" onclick="showProducts('restaurant')">
        🍽️ Restaurant
      </button>
      <button class="category-btn" onclick="showProducts('foodShop')">
        🛒 Food Shop
      </button>
      <button class="category-btn" onclick="showProducts('sweetShop')">
        🍬 Sweet Shop
      </button>
    </div>
  </section>

  <!-- Product Display Section -->
  <section class="container my-5" id="productSection">
    <h2 class="text-center mb-4">Products</h2>
    <div class="row" id="productDisplay">
      <!-- Product cards will display here based on selected category -->
    </div>
  </section>

  <!-- Customer Review Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Customer Reviews</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="review-card p-3 mb-3">
          <h5>Jane Doe</h5>
          <p class="small text-muted">"Great service, easy to use POS system!"</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="review-card p-3 mb-3">
          <h5>John Smith</h5>
          <p class="small text-muted">"Made my restaurant operations smoother."</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="review-card p-3 mb-3">
          <h5>Emma Johnson</h5>
          <p class="small text-muted">"Efficient and user-friendly!"</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2024 POS System. All rights reserved.</p>
      <div>
        <a href="#" class="text-white me-3">Facebook</a>
        <a href="#" class="text-white me-3">Twitter</a>
        <a href="#" class="text-white">Instagram</a>
      </div>
    </div>
  </footer>
    </div>
  </div>




  @endsection
