@extends('auth.template.register')

@section('title')
    | Register
@endsection

@push('css')
    <style>
        input.transparent-input {
            background-color: transparent !important;
            border: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="col-md-8">
                @auth
                    @php
                        $id = Auth::user()->id;
                    @endphp
                    <form method="POST" action="{{ route('stage_2.store', $id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" required autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-12 float-md-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection
