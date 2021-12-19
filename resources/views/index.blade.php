<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Aplikasi Inventaris</title>
  <link 
    href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" 
    rel="stylesheet"
  >
  <link 
    href="{{ asset('bootstrap-icons-1.7.2/bootstrap-icons.css') }}" 
    rel="stylesheet"
  >
  <script 
    src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"
    defer
  ></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 ">
    <a 
      class="navbar-brand" 
      href="/"
    >
      Aplikasi Inventaris
    </a>
    <a 
      class="ms-auto" 
      href="#login"
    >
      <button 
        class="btn btn-primary fw-bold d-flex justify-content-center align-items-center" 
        type="submit"
      >
        <i class="bi bi-box-arrow-in-right fs-5 me-2"></i>
        Login
      </button>
    </a>
  </nav>
  <section
    class="px-4 py-5 text-center"
    id="hero"
  >
    <img 
      class="d-block mx-auto mb-4" 
      src="{{ asset('undraw_studying.svg') }}" 
      alt="" 
      width="220"
    >
    <h1 class="display-5">
      Selamat Datang di 
      <br> 
      <span class="display-5 fw-bold">Aplikasi Inventaris Sekolah</span>
    </h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Aplikasi inventaris sekolah adalah alat sistematis yang bisa mengawasi peminjaman barang, mengelola stok, mengontrol jumlah aset yang akan dipinjam, dan melacak peminjaman aset sekolah.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a 
          href="#login"
        >
          <button 
            class="btn btn-primary btn-lg px-4 gap-3 fw-bold"
            type="button" 
          >
            Login
          </button>
        </a>
      </div>
    </div>    
  </section>
  <section
    class="container-fluid my-5 d-flex justify-content-center align-items-center"
    id="login"
    style="height: 100vh"
  >
    <form 
      class="form w-50" 
      action="{{ route('login') }}"
      method="POST"
    >
      @csrf
      <h4 class="mb-4">Silahkan Login</h4>
      <div class="mb-4">
        <label 
          class="mb-2" 
          for="username"
        >
          Username
        </label>
        <div class="input-group">
          <span class="input-group-text">
            <i class="bi bi-person-fill"></i>
          </span>
          <input 
            class="form-control" 
            id="username" 
            type="text"
            name="username"
            maxlength="25" 
            required 
          >
        </div>
        @error ('username')
          <div class="form-text text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-4">
        <label 
          class="mb-2"
          for="password"
        >
          Password
        </label>
        <div class="input-group">
          <span class="input-group-text">
            <i class="bi bi-key-fill"></i>
          </span>
          <input 
            class="form-control" 
            id="password" 
            type="password"
            name="password" 
            maxlength="25" 
            required
          >
        </div>
        @error ('password')
          <div class="form-text text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-4">
        <button 
          class="btn btn-primary fw-bold d-flex justify-content-center align-items-center" 
          type="submit"
        >
          <i class="bi bi-box-arrow-in-right fs-5 me-2"></i>
          Login
        </button>
      </div>
    </form>
  </section> 
  <footer class="footer bg-light">
    <div class="container-fluid d-flex flex-column py-4 align-items-center">
      <span>Dibuat oleh <span class="fw-bold">Abdul Rauf</span></span>
      <span>Dec 2021</span>
    </div>
  </footer>
</body>
</html>