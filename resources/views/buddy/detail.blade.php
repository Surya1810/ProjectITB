@extends('auth.template.register')

@section('title')
    | Buddy Match
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
                        <h1 style="font-weight: 900;" class="mb-5"><i>Let's Meet !</i></h1>
                        <form method="POST" action="{{ route('buddy.arrange') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Select Date') }}</label>

                                <div class="col-md-8">
                                    <input id="date" type="date"
                                        class="form-control @error('date') is-invalid @enderror" name="date"
                                        value="{{ old('date') }}" required autocomplete="nadateme" autofocus>
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="time"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Select Time') }}</label>

                                <div class="col-md-8">
                                    <input id="time" type="time"
                                        class="form-control @error('time') is-invalid @enderror" name="time"
                                        value="{{ old('time') }}" required autocomplete="nadateme" autofocus>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-light px-3 mt-3">
                                        {{ __('Schedule') }}
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
