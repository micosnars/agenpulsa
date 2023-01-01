@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row-checkout row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/checked.png')}}" height="200" class="mb-3" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <h2 class="berhasil primary-header">
                        Berhasil Checkout
                    </h2>
                    <p class="mt-3">
                        Pulsa yang anda pesan akan diproses, <br>Segera melakukan pembayaran di halaman My Dashboard.
                    </p>
                    <a href="{{route('dashboard')}}" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
            
        </div>
    </section>
@endsection