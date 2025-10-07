@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<!-- Header Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Kontak Kami</h1>
                <p class="lead">Hubungi kami untuk informasi dan pemesanan</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontak & Form -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Kirim Pesan</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subjek" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-md-4">
                <h2 class="mb-4">Informasi Kontak</h2>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-primary fa-2x"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Alamat</h5>
                        <p>Jl. Amplang No. 123, Samarinda,