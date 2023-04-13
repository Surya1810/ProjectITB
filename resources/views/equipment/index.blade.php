@extends('layouts.app')

@section('title')
    | Equipment
@endsection

@push('css')
    <style>
        #mybutton {
            position: fixed;
            bottom: 50px;
            right: 10px;
        }
    </style>
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
            <form action="{{ route('equipment.store') }}" method="POST">
                @csrf
                <div class="col-sm-12">
                    <div class="row">
                        @foreach ($equipment as $data)
                            <div class="col-lg-4 col-12 my-3">
                                <div class="card" style="border-radius: 20px">
                                    <img class="card-img-top" src="{{ asset('assets/img/equipment/' . $data->image) }}"
                                        style="border-radius: 20px; width:100%; min-height: 180px" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <span>{{ $data->item }}</span>
                                                <h5><strong>{{ $data->price }} / Use</strong></h5>
                                            </div>
                                            <div class="col-6">
                                                <input class="float-md-right" type="checkbox" value="{{ $data->id }}"
                                                    name="data[]" style="width: 20px;height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="mybutton">
                    <button id="checkBtn" type="submit" class="btn btn-danger py-2 mb-2"><i
                            class="fa-solid fa-cart-shopping"></i>Checkout</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("form").submit(function() {
                if ($('input:checkbox').filter(':checked').length < 1) {
                    alert("Check at least one item!");
                    return false;
                }
            });
        });
    </script>
@endpush
