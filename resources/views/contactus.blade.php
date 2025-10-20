@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<!-- Header Section -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h1>Kontak Kami</h1>
        <p class="lead mb-0">Hubungi kami untuk informasi dan pemesanan</p>
    </div>
</section>

<!-- Kontak & Form -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-start">
            
            <!-- Form Kontak -->
            <div class="col-md-8">
                <h2 class="mb-4">Kirim Pesan</h2>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="subjek" class="form-label">Subjek</label>
                            <input type="text" id="subjek" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea id="pesan" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-2">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Info Kontak -->
            <div class="col-md-4">
                <h2 class="mb-4">Informasi Kontak</h2>

                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-map-marker-alt text-primary fa-2x me-3"></i>
                    <div>
                        <h5>Alamat</h5>
                        <p class="mb-0">Jl. Amplang No. 123, Samarinda, Kalimantan Timur</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-phone text-primary fa-2x me-3"></i>
                    <div>
                        <h5>Telepon</h5>
                        <p class="mb-0">+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-envelope text-primary fa-2x me-3"></i>
                    <div>
                        <h5>Email</h5>
                        <p class="mb-0">info@amplangkalimantan.com</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <i class="fas fa-clock text-primary fa-2x me-3"></i>
                    <div>
                        <h5>Jam Operasional</h5>
                        <p class="mb-0">Senin - Sabtu: 08.00 - 17.00</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
