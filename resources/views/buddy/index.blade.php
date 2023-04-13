@extends('layouts.app')

@section('title')
    | Home
@endsection

@push('css')
    <style>
        .overlay {
            background-color: rgba(21, 21, 21, 0.7) !important;
            height: 20%;
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12" style="max-width: 600px;">
                    {{-- <div class="card bg-transparent text-white" style="border-radius: 20px">
                        <img src="{{ asset('assets/img/profile/1.JPG') }}" class="card-img" alt="Stony Beach" />
                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                            <h5 class="card-title float-left" style="font-weight: 900; font-size: 30px">
                                {{ Auth::user()->name }}
                                <span class="font-weight-lighter text-muted">{{ $umur }}</span>
                                <i class="fa-solid fa-circle-check" style="color: #1dcaff"></i>
                            </h5>
                            <p class="card-text text-muted">
                                Favorit Sport
                            </p>
                        </div>
                    </div> --}}
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" touch="true"
                        keyboard="true" data-interval="false">
                        <div class="carousel-inner">
                            @foreach ($user as $data)
                                @php
                                    $umur = Carbon\Carbon::parse($data->birth)->age;
                                @endphp
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="card bg-transparent text-white" style="border-radius: 20px">
                                        <img src="{{ asset('storage/profile/' . $data->picture) }}" class="card-img"
                                            alt="Profile" style="border-radius: 20px; min-height: 70vh" />
                                        {{-- <img src="{{ asset('storage/Profile/' . $data->picture) }}" class="card-img"
                                            alt="Profile" style="border-radius: 20px" /> --}}
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <h5 class="card-title float-left" style="font-weight: 900; font-size: 30px">
                                                {{ $data->username }}
                                                <span class="font-weight-lighter text-muted">{{ $umur }}</span>
                                                <i class="fa-solid fa-circle-check" style="color: #1dcaff"></i>
                                            </h5>
                                            <p class="card-text text-muted">
                                                Favorit Sport <br>
                                                @foreach (explode(', ', $data->fav_sport) as $info)
                                                    <span class="badge badge-warning">{{ $info }}</span>
                                                @endforeach
                                                {{-- {{ $data->fav_sport }} --}}
                                            </p>
                                            <a href="{{ route('buddy.match', $data->id) }}"><i
                                                    class="fa-solid fa-star float-right"
                                                    style="font-size: 50px; color:#e6cc00 ">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
    @endpush
