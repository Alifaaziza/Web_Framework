@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Header Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Tentang Amplang Kalimantan</h1>
                <p class="lead">Menjaga cita rasa autentik Kalimantan sejak 2012</p>
            </div>
        </div>
    </div>
</section>

<!-- Sejarah -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Sejarah Kami</h2>
                <p>Amplang Tifanny didirikan pada tahun 2012 oleh Ibu Widayati, seorang pengusaha lokal yang bertekad melestarikan camilan tradisional khas Kalimantan dan memperkenalkannya ke masyarakat luas.</p>
                <p>Berawal dari usaha rumahan kecil yang mengandalkan resep turun-temurun keluarga dan peralatan sederhana, kini Amplang Tifanny telah berkembang menjadi UMKM unggulan yang mempekerjakan lebih dari 10 karyawan dan mampu memproduksi hingga 300 kg amplang per bulan.</p>
                <p>Kami berkomitmen untuk menjaga cita rasa autentik amplang Kalimantan dengan bahan baku ikan segar pilihan, sambil terus berinovasi dalam varian rasa dan kemasan modern agar tetap diminati oleh berbagai kalangan.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/ibu widayati.jpg') }}" alt="tiara>" class="img-fluid rounded shadow" alt="Sejarah Amplang Kalimantan">
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                        <h3>Visi</h3>
                        <p>Menjadi produsen amplang terdepan yang dikenal karena kualitas dan cita rasa autentik Kalimantan, serta berkontribusi pada pelestarian kuliner tradisional Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-tasks fa-3x text-primary mb-3"></i>
                        <h3>Misi</h3>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Menghasilkan amplang dengan kualitas terbaik</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Melestarikan resep tradisional Kalimantan</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Memberdayakan masyarakat lokal</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Mengembangkan inovasi produk yang berkelanjutan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nilai Perusahaan -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Nilai-Nilai Perusahaan</h2>
                <p class="text-muted">Prinsip yang kami pegang teguh dalam setiap proses produksi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-leaf fa-2x text-success mb-3"></i>
                    <h4>Ramah Lingkungan</h4>
                    <p>Kami menggunakan bahan baku lokal dan mengurangi penggunaan plastik dalam kemasan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-heart fa-2x text-danger mb-3"></i>
                    <h4>Kualitas Terbaik</h4>
                    <p>Hanya menggunakan bahan-bahan pilihan tanpa pengawet atau pewarna buatan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-hands-helping fa-2x text-warning mb-3"></i>
                    <h4>Pemberdayaan</h4>
                    <p>Memberikan kesempatan kerja bagi masyarakat sekitar dan ibu- rumah tangga.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection