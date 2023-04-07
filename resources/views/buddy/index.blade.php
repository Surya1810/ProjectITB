@extends('layouts.app')

@section('title')
    | Home
@endsection

@push('css')
@endpush

@section('content')
    <div class="content-header">
        {{-- <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Main Feature</h1>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                {{-- <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/img/dummy.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> --}}
                <div class="card bg-transparent border-0">
                    <a href="#">
                        <img class="card-img-top" src="{{ asset('storage/img/dummy.png') }}" alt="profile" height="700px">
                        <div class="carousel-caption d-none d-md-block lh-100">
                            <small class="text-muted">Tanggal</small>
                            <h5>Seorang pejudi handal meninggal dunia di umur 69</h5>
                            <div class="row justify-content-center p-0">
                                <p><span class="badge bg-warning mr-1">#Tech</span></p>
                                <p><span class="badge bg-warning mr-1">#Sport</span></p>
                                <p><span class="badge bg-warning">#Economic</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
