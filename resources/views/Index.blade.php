@extends ('layout.index_layout')

@section ('Loading_page')
    <div class="mypreloader" id="myPreloader">
        <div class="spinner" id="loadingBulat"></div>
    </div>
    <style>
        #myPreloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #dfe5ed;
            z-index: 9999;
        }

        #loadingBulat {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 50px;
        height: 50px;
        margin-top: -25px; /* Mengatur tinggi agar loading bulat berada di tengah2 layar */
        margin-left: -25px; /* Mengatur lebar agar loading bulat berada di tengah2 layar */
        border: 5px solid #146df8;
        border-radius: 50%;
        border-top-color: transparent;
        animation: spin 1s linear infinite;
        z-index: 200;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection

@section ('Navbar')
<nav class="navbar navbar-expand-lg navbar-dark style-2 position-absolute w-100 p-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Index/img/logo-header-white-25.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase" id="nav-menus">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.html">
                            portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.html">
                            services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts.html">
                            news
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrier.html">
                            Career
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">
                            contact
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="qoute-nav ps-4">
                        <a href="#" class="search-icon me-3">
                            <i class="bi bi-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection