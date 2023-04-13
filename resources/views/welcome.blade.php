@extends('layouts.app')

@section('title')
    | Home
@endsection

@push('css')
    <style>
        .carousel-control-prev-icon {
            position: absolute;
            left: -50px;
        }

        .carousel-control-next-icon {
            position: absolute;
            right: -50px;
        }
    </style>
@endpush

@section('content')
    <div class="content-header">
        <div class="container">
            {{-- <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Main Feature</h1>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <center>
            <div class="container">
                <!-- Banner -->
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/banner.jpg') }}" alt="banner"
                                style="width: 100%; border-radius: 20px" class="mb-5">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/banner_1.jpg') }}" alt="banner"
                                style="width: 100%; border-radius: 20px" class="mb-5">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/banner_2.jpg') }}" alt="banner"
                                style="width: 100%; border-radius: 20px" class="mb-5">
                        </div>
                    </div>
                    {{-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button style="color:black" class="carousel-control-next" type="button"
                        data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button> --}}
                </div>
                <div class="row mb-5">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0" style="font-weight: 900">Buddy</h1>
                        <hr style="border-color: white"> --}}
                        <div class="col-md-12 col-sm-12 col-12 my-3">
                            <a href="{{ route('buddy.index') }}" style="color: black">
                                <div class="info-box shadow-lg"
                                    style="border-radius: 25px; background-image: linear-gradient(to right bottom, #a5be00, #34b95f, #00aa97, #0094af, #427aa1);">
                                    <div class="info-box-content"
                                        style="font-size: 40px; font-family: 'Nunito'; font-weight: bolder; color: #ebf2fa">
                                        <span class="info-box-text text-center">Buddy<i class="fa-solid fa-users ml-3"
                                                style="font-size: 35px"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{-- <p>BUddy bla bla bla bla bla</p> --}}
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-12">
                        <h1 class="m-0" style="font-weight: 900">Court Selection</h1>
                        <hr style="border-color: white">
                        <div id="carouselExampleIndicators" class="carousel carousel-dark slide w-100" data-ride="carousel"
                            touch="true">
                            <div class="carousel-inner w-100">
                                <div class="carousel-item active" pause="hover">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a href="{{ route('booking.list', 'futsal') }}">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/img/court/futsal.png') }}" alt="court"
                                                        style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a href="{{ route('booking.list', 'basketball') }}">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/img/court/basket.png') }}" alt="court"
                                                        style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a href="{{ route('booking.list', 'badminton') }}">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/img/court/badmin.png') }}" alt="court"
                                                        style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" pause="hover">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a href="{{ route('booking.list', 'tennis') }}">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/img/court/tennis.png') }}" alt="court"
                                                        style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a href="{{ route('booking.list', 'ping_pong') }}">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/img/court/pingpong.png') }}" alt="court"
                                                        style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card bg-transparent" style="border-radius: 25px">
                                                <a>
                                                    <img class="card-img-top" src="{{ asset('assets/img/court/gym.png') }}"
                                                        alt="court" style="border-radius: 25px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button style="color:black" class="carousel-control-next" type="button"
                                data-target="#carouselExampleIndicators" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-12">
                        <h1 class="m-0" style="font-weight: 900">Browse Our Equipment</h1>
                        <hr style="border-color: white">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12 my-3">
                                <a href="{{ route('equipment.index') }}" style="color: black">
                                    <div class="info-box shadow-lg"
                                        style="border-radius: 50px; background-image: linear-gradient(to right bottom, #a5be00, #34b95f, #00aa97, #0094af, #427aa1);">
                                        <div class="info-box-content"
                                            style="font-size: 40px; font-family: 'Nunito'; font-weight: bolder; color: #ebf2fa">
                                            <span class="info-box-text text-center">Browse<i
                                                    class="fa-solid fa-magnifying-glass ml-3"
                                                    style="font-size: 35px"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    {{-- <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Booking</h1>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
    <script>
        $('.carousel').carousel({
            pause: "false"
        });

        @if (session('pesan'))
            @switch(session('level-alert'))
                @case('alert-success')
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-bottom-full-width",
                    "progressBar": true
                }
                toastr.success("{{ Session::get('pesan') }}", 'Berhasil');
                @break

                @default
                toastr.info('test', 'info');
            @endswitch
        @endif
    </script>
@endpush
