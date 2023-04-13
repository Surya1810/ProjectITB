@extends('layouts.app')

@section('title')
    | Court Detail
@endsection

@push('css')
    <style>
        .btn {
            position: fixed;
            bottom: 50px;
            right: 20px;
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
            <div class="col-12">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    {!! html_entity_decode($data->coord) !!}
                    <h2 class="mt-3">{{ $data->court_name }}</h2>
                    <p>{{ $data->location }}</p>

                    <span class="badge badge-success">{{ $data->buka }}</span>
                    <span class="badge badge-danger">{{ $data->tutup }}</span>
                    <input type="text" name="id" id="id" value="{{ $data->id }}" class="d-none">
                    <h4 class="font-weight-bolder mt-3">{{ $data->price }} / hour</h4>
                    <button type="submit" class="btn btn-success mb-3 px-4">Book</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
