@extends('layouts.app')

@section('title')
    | Home
@endsection

@push('css')
@endpush

@section('content')
    <div class="content-header">
        <div class="container">
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-uppercase font-weight-bolder">{{ $category }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                @foreach ($court as $data)
                    <div class="card" style="border-radius: 20px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->court_name }}</h5><br>
                            <small>{{ $data->location }}</small><br>
                            <span class="badge badge-success">{{ $data->buka }}</span>
                            <span class="badge badge-danger">{{ $data->tutup }}</span><br>
                            <a href="{{ route('booking.detail', ['category' => $category, 'id' => $data->id]) }}"
                                class="btn btn-success mt-3">Book
                                Court</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
