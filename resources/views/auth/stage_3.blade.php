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
                @php
                    $id = Auth::user()->id;
                @endphp
                <form method="POST" action="{{ route('stage_3.store', $id) }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="fav_sport" class="col-md-4 col-form-label text-md-end">{{ __('Favorit Sport') }}</label>

                        <div class="col-md-6">
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
                            <button type="submit" class="btn btn-primary">
                                {{ __('Next') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
