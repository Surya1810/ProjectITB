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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the
                                invoice to test.
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-globe"></i> Kumpul KeBo, Inc.
                                            <small class="float-right">Date:
                                                {{ Carbon\Carbon::now()->format('d M Y') }}</small>
                                        </h4>
                                    </div>
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-12 mb-3">
                                        <b>Invoice #007612</b><br>
                                        <br>
                                        <b>Order ID:</b> 4F3S8J<br>
                                        <b>Payment Due:</b> {{ Carbon\Carbon::now()->addDays(2) }}<br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            @if ($code == 1)
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $item->item }}</td>
                                                            <td>Rp {{ $item->price }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            @else
                                                <thead>
                                                    <tr>
                                                        <th>Court</th>
                                                        <th>price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $data->court_name }}</td>
                                                        <td>Rp {{ $data->price }}/hour</td>
                                                    </tr>
                                                </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        {{-- <p class="lead">Payment Methods:</p>
                                        <img src="../../dist/img/credit/visa.png" alt="Visa">
                                        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                        <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                        <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning
                                            heekya handango imeem
                                            plugg
                                            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                        </p> --}}
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>@currency($subtotal)</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (10%)</th>
                                                    <td>@currency($ppn)</td>
                                                </tr>
                                                @if ($code == 1)
                                                    <tr>
                                                        <th>Shipping:</th>
                                                        <td>Rp 15.000</td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>@currency($total)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        {{-- <a href="invoice-print.html" rel="noopener" target="_blank"
                                            class="btn btn-default"><i class="fas fa-print"></i> Print</a> --}}
                                        <a href="{{ route('done') }}" class="btn btn-success float-right"><i
                                                class="far fa-credit-card"></i> Submit
                                            Payment
                                        </a>
                                        {{-- <button type="button" class="btn btn-primary float-right"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
