@extends('layouts.dashboard')

@section('style')
  <style>
    .nav-link:hover {
      background-color: #343a40;
    }
  </style>
@endsection

@section('sidebar')
  <div 
    class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" 
    style="width: 280px; height: 100vh;"
  >
    <a 
      href="/" 
      class="d-flex align-items-center mb-4 me-md-auto text-white text-decoration-none p-2"
    >
      <span class="fs-6 fw-bold">Aplikasi Inventaris Sekolah</span>
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/dashboard') ? 'active' : '' }}" 
          href="{{ route('admin.dashboard') }}" 
          aria-current="page"
        >
          <i class="bi bi-house-fill pe-2"></i>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/ruang') ? 'active' : '' }}" 
          href="{{ route('admin.data.ruang') }}" 
          aria-current="page"
        >
          <i class="bi bi-door-closed-fill pe-2"></i>
          Data Ruang
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/jenis') ? 'active' : '' }}" 
          href="{{ route('admin.data.jenis') }}" 
          aria-current="page"
        >
          <i class="bi bi-easel-fill pe-2"></i>
          Data Jenis
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/level') ? 'active' : '' }}" 
          href="{{ route('admin.data.level') }}" 
          aria-current="page"
        >
          <i class="bi bi-bar-chart-steps pe-2"></i>
          Data Level
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/pegawai') ? 'active' : '' }}" 
          href="{{ route('admin.data.pegawai') }}" 
          aria-current="page"
        >
          <i class="bi bi-person-video pe-2"></i>
          Data Pegawai
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/petugas') ? 'active' : '' }}" 
          href="{{ route('admin.data.petugas') }}" 
          aria-current="page"
        >
          <i class="bi bi-person-video2 pe-2"></i>
          Data Petugas
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/inventaris') ? 'active' : '' }}" 
          href="{{ route('admin.data.inventaris') }}" 
          aria-current="page"
        >
          <i class="bi bi-box-seam pe-2"></i>
          Data Inventaris
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/peminjaman') ? 'active' : '' }}" 
          href="{{ route('admin.data.peminjaman') }}" 
          aria-current="page"
        >
          <i class="bi bi-book pe-2"></i>
          Data Peminjaman
        </a>
      </li>
      <li class="nav-item">
        <a 
          class="nav-link text-white {{ request()->is('admin/data/detail-pinjam') ? 'active' : '' }}" 
          href="{{ route('admin.data.detail_pinjam') }}" 
          aria-current="page"
        >
          <i class="bi bi-ticket-detailed pe-2"></i>
          Data Detail Pinjam
        </a>
      </li>
    </ul>
  </div>
@endsection

@section('content')
  <p>Content</p>
@endsection