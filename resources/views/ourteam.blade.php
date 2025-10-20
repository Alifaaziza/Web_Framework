@extends('layouts.app')

@section('title', 'Tim Kami')

@section('content')
<!-- Header Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Tim Kami</h1>
                <p class="lead">Orang-orang di balik pengembangan website amplang kalimantan enak</p>
            </div>
        </div>
    </div>
</section>

<!-- Tim Inti -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Tim Inti</h2>
                <p class="text-muted">Tim kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="{{ asset('images/foto_alifa.JPG') }}" alt="foto_alifa>" class="card-img-top rounded-circle mx-auto mt-4" style="width: 150px; height: 150px; object-fit: cover;" alt="Siti Rahayu">
                    <div class="card-body">
                        <h5 class="card-title">Alifa Nur Azizah</h5>
                        <p class="text-muted">2310120002</p>
                        <p class="card-text">Pendiri Amplang Kalimantan dengan pengalaman lebih dari 10 tahun dalam industri makanan tradisional.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="{{ asset('images/tiara.JPG') }}" alt="tiara>" class="card-img-top rounded-circle mx-auto mt-4" style="width: 150px; height: 150px; object-fit: cover;" alt="Ahmad Fauzi">
                    <div class="card-body">
                        <h5 class="card-title">Tiara Widya</h5>
                        <p class="text-muted">2310120013</p>
                        <p class="card-text">Bertanggung jawab atas kualitas produksi dan menjaga cita rasa autentik amplang Kalimantan.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="{{ asset('images/ike.JPG') }}" alt="ike>"  class="card-img-top rounded-circle mx-auto mt-4" style="width: 150px; height: 150px; object-fit: cover;" alt="Maya Sari">
                    <div class="card-body">
                        <h5 class="card-title">Marizke Mega Utami</h5>
                        <p class="text-muted">2310120023</p>
                        <p class="card-text">Mengelola pemasaran dan perluasan jaringan distribusi produk ke seluruh Indonesia.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tim Produksi -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Tim Produksi</h2>
                <p class="text-muted">Para ahli yang dengan teliti membuat setiap amplang dengan kualitas terbaik</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="https://randomuser.me/api/portraits/women/23.jpg" class="rounded-circle mb-3" width="100" alt="Rina">
                        <h5>Rina</h5>
                        <p class="text-muted">Ahli Bumbu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="https://randomuser.me/api/portraits/women/57.jpg" class="rounded-circle mb-3" width="100" alt="Dewi">
                        <h5>Dewi</h5>
                        <p class="text-muted">Pembuat Adonan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="https://randomuser.me/api/portraits/men/76.jpg" class="rounded-circle mb-3" width="100" alt="Budi">
                        <h5>Budi</h5>
                        <p class="text-muted">Penggoreng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="https://randomuser.me/api/portraits/women/81.jpg" class="rounded-circle mb-3" width="100" alt="Sari">
                        <h5>Sari</h5>
                        <p class="text-muted">Quality Control</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nilai Tim -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Nilai Kerja Tim Kami</h2>
                <p>Kami percaya bahwa kualitas produk yang luar biasa berasal dari tim yang solid dan berdedikasi. Setiap anggota tim kami memiliki peran penting dalam menciptakan amplang dengan cita rasa yang konsisten dan berkualitas.</p>
                <p>Kami menerapkan standar kebersihan dan keamanan pangan yang ketat dalam setiap proses produksi. Selain itu, kami terus berinovasi untuk meningkatkan kualitas produk dan mengembangkan varian rasa baru yang disukai konsumen.</p>
                <p>Komitmen kami adalah memberikan pengalaman terbaik bagi pelanggan melalui produk yang lezat, layanan yang ramah, dan pengiriman yang tepat waktu.</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Nilai Kerja Tim">
            </div>
        </div>
    </div>
</section>
@endsection