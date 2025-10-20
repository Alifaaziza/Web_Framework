@extends('layouts.app')

@section('title', 'Program & Produk')

@section('content')
<!-- Header Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Program & Produk Kami</h1>
                <p class="lead">Berbagai pilihan amplang dengan kualitas terbaik</p>
            </div>
        </div>
    </div>
</section>

<!-- Produk -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Produk Amplang Kami</h2>
                <p class="text-muted">Pilih varian amplang favorit Anda</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="{{ asset('images/amplang8.jpeg') }}" class="card-img-top" alt="Amplang Original"  width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 85 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 12.500</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://tse4.mm.bing.net/th/id/OIP.jylGEwWT--mfUHHMzxJRHAHaE8?pid=Api&P=0&h=220" class="card-img-top" alt="Amplang Pedas"  width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 120 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 20.000</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="{{ asset('images/amplang4.jpeg') }}" class="card-img-top" alt="Amplang Balado"  width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 180 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 30.000</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="{{ asset('images/amplang 6.jpeg') }}" class="card-img-top" alt="Amplang "  width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 500 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 75.000</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="{{ asset('images/amplang7.jpeg') }}" class="card-img-top" alt= "Amplang Rumput Laut" width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 1000 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 150.000</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    <img src="{{ asset('images/amplang9.jpeg') }}" class="card-img-top" alt="Paket Beragam Rasa"  width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title">Amplang 1500 gr</h5>
                        <p class="card-text">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 200.000</span>
                            <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Program Khusus</h2>
                <p class="text-muted">Berbagai program menarik untuk pelanggan setia kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-gift fa-3x text-primary mb-3"></i>
                        <h4>Program Reseller</h4>
                        <p>Dapatkan keuntungan lebih dengan menjadi reseller amplang kami. Diskon khusus untuk pembelian dalam jumlah besar.</p>
                        <button class="btn btn-outline-primary mt-3">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-box-open fa-3x text-primary mb-3"></i>
                        <h4>Langganan Bulanan</h4>
                        <p>Dapatkan amplang favorit Anda setiap bulan dengan harga khusus dan prioritas pengiriman.</p>
                        <button class="btn btn-outline-primary mt-3">Info Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                        <h4>Program Kemitraan</h4>
                        <p>Buka peluang usaha dengan menjadi mitra kami. Dukungan penuh untuk pemasaran dan operasional.</p>
                        <button class="btn btn-outline-primary mt-3">Hubungi Kami</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection