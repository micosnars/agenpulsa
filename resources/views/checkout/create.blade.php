@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="title-checkout col-lg-5 col-12 header-wrap text-center">
                            <h2 class="price-checkout primary-header text-white">
                                {{$camp->title}}
                            </h2>
                            <p class="story text">
                                Rp{{$camp->price}}.000
                            </p>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('checkout.store', $camp->id)}}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}" required />
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Alamat Email</label>
                                    <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{Auth::user()->email}}" required />
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input name="phone" type="text" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{old('phone') ?: Auth::user()->phone}}" required />
                                    @if ($errors->has('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="provider">Provider</label>
                                    <select id="provider" name="provider" type="text" class="form-control {{$errors->has('provider') ? 'is-invalid' : ''}}" value="{{old('provider') ?: Auth::user()->provider}}" required >
                                        <option  disabled selected>Pilih Provider</option>
                                        <option label="Telkomsel">Telkomsel</option>
                                        <option label="XL">XL</option>
                                        <option label="3">3</option>
                                        <option label="Indosat Ooredo">Indosat Ooredo</option>
                                        <option label="Smartfren">Smartfren</option>
                                        <option label="Axis">Axis</option>
                                    </select>
                                    @if ($errors->has('provider'))
                                        <p class="text-danger">{{$errors->first('provider')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Domisili</label>
                                    <input name="address" type="text" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{old('address') ?: Auth::user()->address}}" required />
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                    @endif
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('images/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection