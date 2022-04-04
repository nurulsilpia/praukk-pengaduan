@extends('layouts.main')
{{-- @section('bg-shape')
    <div class="header-shape-1"></div>
    <div class="header-shape-2">
        <img src="asset/img/header/header-shape-2.svg" alt="">
    </div>
@endsection --}}

@section('home')
<div class="header-hero">
    {{-- circle shape --}}
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
    <div class="shape shape-5"></div>
    <div class="shape shape-6"></div>
    {{-- ----------- --}}

    <header class="header-area container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 col-md-10">
                <div class="header-hero-content">
                    <h1 class="header-title wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.2s">
                        Dengan Bijak Melayani <span>Pengaduan Masyarakat</span>
                    </h1>
                    <p class="text wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.4s">
                        Kami dengan bijak melayani semua keluhan masyarakat guna memajukan kesejahteraan bersama
                    </p>
                    <ul class="d-flex list-unstyled">
                        <li>
                            <a href="/pengaduan" class="main-btn wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.8s"> Buat Pengaduan </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="header-image">
                    <img src="asset/img/header/header-app1.svg" class="image-1">
                </div>
            </div>
            <div class="container">
                <div class="header-shape-1"></div>
                <div class="header-shape-2">
                  <img src="asset/img/header/header-shape-2.svg" alt="">
                </div>
            </div>
        </div>
    </header>
</div>
@endsection