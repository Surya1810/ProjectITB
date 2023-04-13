@extends('auth.template.register')

@section('title')
    | Getting Ready
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
                        <h1 style="font-weight: 900;" class="mb-5"><i>Getting Ready!</i></h1>
                        @auth
                            @php
                                $id = Auth::user()->id;
                            @endphp
                            <form method="POST" action="{{ route('stage_2.store', $id) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="username"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                    <div class="col-md-8">
                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" required autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Profile Picture') }}</label>

                                    <div class="col-md-8">
                                        <input type="file" class="form-control-file @error('profile') is-invalid @enderror"
                                            id="profile" name="profile" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 float-md-right">
                                        <button type="submit" class="btn btn-light px-2 float-right">
                                            {{ __('Ready!') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush
