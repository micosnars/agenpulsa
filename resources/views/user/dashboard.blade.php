@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Checkouts 
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td>
                                    <div class="title-checkout col-lg-5 col-12 text-center">
                                        <h2 class="price-checkout text-white pt-2">
                                            {{$checkout->Camp->title}}
                                        </h2>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-2 mt-2">
                                        <strong>{{$checkout->Camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('M d, Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>Rp{{$checkout->Camp->price}}.000</strong>
                                </td>
                                <td>
                                    <strong>{{$checkout->payment_status}}</strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == 'waiting')
                                        <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay Here</a>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" href="https://wa.me/+6285216285045?text=Hi, saya ingin bertanya tentang {{$checkout->Camp->title}}" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Camp Registered</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection