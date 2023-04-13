@extends('auth.template.register')

@section('title')
    | Almost Ready
@endsection

@push('css')
    <style>
        input {
            background-color: rgba(21, 21, 21, 0.7) !important;
            border: none !important;
        }

        .card {
            background-color: rgba(21, 21, 21, 0.7) !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="col-md-8 my-auto">
                <div class="card dark-mode" style="border-radius: 20px;">
                    <div class="card-body p-5">
                        <h3 style="font-weight: 900;" class="mb-5"><i>Choose Your Favorit Sport!</i></h3>
                        @php
                            $id = Auth::user()->id;
                        @endphp
                        <form method="POST" action="{{ route('stage_3.store', $id) }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="fav_sport"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Favorit Sport') }}</label>

                                <div class="col-md-8">
                                    <input id="fav_sport" type="text"
                                        class="form-control @error('fav_sport') is-invalid @enderror" name="fav_sport"
                                        value="{{ old('fav_sport') }}" required autofocus>

                                    @error('fav_sport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 float-md-right">
                                    <button type="submit" class="btn btn-light float-right px-3">
                                        {{ __("Let's GO!") }} <i class="fa-solid fa-circle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
