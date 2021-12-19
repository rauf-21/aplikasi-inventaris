@extends('layouts.base')

@section('title')
  Dashboard
@endsection

@section('body')
  <div class="container-fluid d-flex p-0 m-0">
    @yield('sidebar')
    <div class="container-fluid d-flex flex-column m-0 p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div 
          class="collapse navbar-collapse d-flex justify-content-end ms-auto" 
          id="navbarNavDarkDropdown"
        >
          <ul class="navbar-nav dropdown-menu-start">
            <li class="nav-item dropdown">
              <a 
                class="nav-link dropdown-toggle" 
                href="#" 
                id="navbarDarkDropdownMenuLink" 
                role="button" 
                data-bs-toggle="dropdown" 
                aria-expanded="false"
              >
                <i class="bi bi-person-fill pe-1"></i>
                {{ session()->get('petugas')['username'] }}
              </a>
              <ul 
                class="dropdown-menu dropdown-menu-dark dropdown-menu-end" 
                aria-labelledby="navbarDarkDropdownMenuLink"
              >
                <li>
                  <a 
                    class="dropdown-item" 
                    href="{{ route('logout') }}"
                  >
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')
    </div>
  </div>
@endsection