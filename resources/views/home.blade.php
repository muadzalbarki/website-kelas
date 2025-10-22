@extends('layout.app')

@section('content')
<section class="hero-section">
    <div class="text-center py-5">

        <h1 class="fw-bold glow mt-4 fade-in" style="animation-delay: 0.3s;">Welcome To Our Class 5B TI</h1>
        <p class="lead text-white-50 fade-in" style="animation-delay: 0.6s;">UIN Salatiga • Fakultas Dakwah • Teknologi Informasi</p>

        <div class="mt-4">
            <a href="/profil" class="btn btn-glow text-dark px-4 me-3">View Profile</a>
            <a href="/dokumentasi" class="btn btn-outline-light px-4">Documentation</a>
        </div>
    </div>
</section>
@endsection