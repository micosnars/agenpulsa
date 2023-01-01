@extends('layouts.app')

@section('content')
    <section class="banner">
        <div class="hero">
            <div class="p-1 text-center bg-image" style="
            background-image: url('{{asset('images/Groups2.png')}}');
            height: 500px;">
            <div class="hero-text"> 
            <h1 class="tittle mb-3">Selamat datang di <a href="{{route('welcome')}}" class="text-link text-decoration-none">AgenPulsa.com</a></h1>
            <h4 class="mb-3 ">AgenPulsa menyediakan pulsa dari berbagai macam provider dengan harga termurah dibanding tempat lain dengan cepat dan aman</h4>
            <a class="btn btn-outline-light btn-lg mt-5" type="button" role="button" onClick="document.getElementById('pricing-id').scrollIntoView();" >Shop Now</a>
            </div>
            </div>
            
        </div>
        <div class="container">
            
            <div class="row justify-content-center">
                
                
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="https://baguspulsa.com/news-image/daftar-prefiks-awalan-nomor-provider.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <h1 class="primary-header">
                        Keuntungan membeli pulsa di AgenPulsa
                    </h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="item-benefit">
                        <img src="{{asset('images/ss-time.png')}}" class="icon" alt="" style="width: 120px; height: 120px">
                        <h3 class="title">
                            Mudah
                        </h3>
                        <p class="support">
                            Segala transaksi dapat diselesaikan <br> dengan mudah hanya dengan beberapa klik
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="item-benefit">
                        <img src="{{asset('images/ss-dollar.png')}}" class="icon" alt="" style="width: 120px; height: 120px">
                        <h3 class="title">
                            Murah
                        </h3>
                        <p class="support">
                            Harga lebih murah di AgenPulsa <br> dibanding toko sebelah
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="item-benefit">
                        <img src="{{asset('images/ss-otomatis.png')}}" class="icon" alt="" style="width: 120px; height: 120px">
                        <h3 class="title">
                            Otomatis
                        </h3>
                        <p class="support">
                            Transaksi diproses secara otomatis <br> dengan cepat dan aman
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="promo-image">
                            <img src="{{asset('images/promo-banner1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="promo-image">
                            <img src="{{asset('images/post3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="promo-image">
                            <img src="{{asset('images/post2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="promo-image">
                            <img src="{{asset('images/post1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="promo">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-12 col-12 header-wrap text-center">
                    <h1 class="promo-title">
                        Promo
                    </h1>
                    <h3 class="promo-desc">
                        Dapatkan berbagai promo menarik di AgenPulsa
                    </h3>
                </div>
                <div class="col-lg-12 col-12 text-center">
                    <div class="promo-image">
                        <img src="{{asset('images/promo-banner1.png')}}" alt="" width="1000px">
                    </div>
                </div>
                
                <div class="col-sm-4 text-center">
                    <div class="promo-image">
                        <img src="{{asset('images/post3.jpg')}}" alt="" width="325" height="330">
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="promo-image">
                        <img src="{{asset('images/post3.jpg')}}" alt="" width="325" height="330">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="promo-image text-center">
                        <img src="{{asset('images/post3.jpg')}}" alt="" width="325" height="330">
                    </div>
                </div>
               
            </div>
        </div>

    </section> --}}

    {{-- <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step1.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        BETTER CAREER
                    </p>
                    <h2 class="primary-header">
                        Prepare The Journey
                    </h2>
                    <p class="support">
                        Learn from anyone around the <br> world and get a new skills
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Learn More
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        STUDY HARDER
                    </p>
                    <h2 class="primary-header">
                        Finish The Project
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            View Demo
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step2.png')}}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step3.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        END GAME
                    </p>
                    <h2 class="primary-header">
                        Big Demo Day
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Showcase
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pricing" id="pricing-id">
        <div class="container">
            <div class="row pb-70">
                <div class="title-text-pricing col-lg-12 col-12 header-wrap copywriting text-center">
                    <p class="story">
                        PULSA
                    </p>
                    <h2 class="primary-header text-white">
                        Beli pulsa sekarang!
                    </h2>
                    <p class="support">
                        Isi pulsa 24 jam - Murah, cepat, otomatis, dan aman.
                    </p>
                </div>
                <div class="title-pricing col-lg-12 col-12">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="table-pricing paket-gila">
                                <h1 class="product-title text-center">
                                    PULSA<br>10.000
                                </h1>
                                <p class="product-price text-center mb-5 mt-3">
                                    Rp12.000
                                </p>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Telkomsel
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        XL
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        3
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Indosat Ooredo
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Smartfren
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Axis
                                    </p>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'pulsa-10k')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Buy
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="table-pricing paket-biasa">
                                <h1 class="product-title text-center">
                                    PULSA<br>20.000
                                </h1>
                                <p class="product-price text-center mb-5 mt-3">
                                    Rp23.000
                                </p>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Telkomsel
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        XL
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        3
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Indosat Ooredo
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Smartfren
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Axis
                                    </p>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'pulsa-20k')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Buy
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="table-pricing paket-biasa">
                                <h1 class="product-title text-center">
                                    PULSA<br>50.000
                                </h1>
                                <p class="product-price text-center mb-5 mt-3">
                                    Rp55.000
                                </p>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Telkomsel
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        XL
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        3
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Indosat Ooredo
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Smartfren
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Axis
                                    </p>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'pulsa-50k')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Buy
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="table-pricing paket-biasa">
                                <h1 class="product-title text-center">
                                    PULSA<br>100.000
                                </h1>
                                <p class="product-price text-center mb-5 mt-3">
                                    Rp110.000
                                </p>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Telkomsel
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        XL
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        3
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Indosat Ooredo
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Smartfren
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Axis
                                    </p>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'pulsa-100k')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Buy
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        TESTIMONI
                    </p>
                    <h1 class="primary-header">
                        Kata mereka tentang AgenPulsa
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{asset('images/clintjpg.jpg')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Clint
                                        </h4>
                                        <p class="role">
                                            Mahasiswa
                                        </p>
                                    </div>
                                </div>
                                <img class="stars" src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Terima kasih AgenPulsa karena telah memberikan pelayanan yang baik dan cepat.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{asset('images/betrix1.jpg')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrix
                                        </h4>
                                        <p class="role">
                                            Pekerja
                                        </p>
                                    </div>
                                </div>
                                <img class="stars" src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Saya telah berlangganan di AgenPulsa sejak masih SD, emang terbaik AgenPulsa ini.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <div class="user">
                                    <img src="{{asset('images/brody.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Brody
                                        </h4>
                                        <p class="role">
                                            Pelajar
                                        </p>
                                    </div>
                                </div>
                                <img class="stars" src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Sejak ada AgenPulsa, saya tidak perlu jauh-jauh pergi ke konter untuk membeli pulsa.
                                </p>
                            </div>
                        </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright AgenPulsa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection