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
                        <p class="card-text">Front-end Developer yang merancang tampilan website agar informatif, menarik, dan nyaman digunakan oleh pengunjung.</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/alifa-nur-azizah-9b5bb1311?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/azzh.alifaa?igsh=NndzOGl5MWp4YXNq&utm_source=qr" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
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
                        <p class="card-text">Back-end Developer yang bertanggung jawab terhadap logika sistem dan pengelolaan data agar website berjalan dengan lancar.</p>
                        <div class="social-links">
                            <a href="www.linkedin.com/in/tiara-widya-7615742a3" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/tiara.awdy?igsh=MWFoM3U4YTcwYXhvZA==" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
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
                        <p class="card-text">UI/UX Designer yang berfokus menciptakan pengalaman pengguna yang intuitif dan visual yang konsisten dengan identitas Amplang Tifanny.</p>
                        <div class="social-links">
                            <a href="www.linkedin.com/in/marizke-mega-utami-b83a051b3" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/marizke_?igsh=MXh2MXJkMGp2NzgyNg==" class="text-primary me-2"><i class="fab fa-instagram"></i></a>
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
                <h2>Founder Amplang Tifanny</h2>
                <p class="text-muted">Para ahli yang dengan teliti membuat setiap amplang dengan kualitas terbaik</p>
            </div>
        </div>
       <div class="row justify-content-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/ibu widayati.jpg') }}" class="rounded-circle mb-3" width="100" alt="ibu widayati">
                        <h5>Ibu widayati</h5>
                        <p class="text-muted">Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/bapak gunawan.jpg') }}" class="rounded-circle mb-3" width="100" alt="bapak gunawan">
                        <h5>Bapak Gunawan</h5>
                        <p class="text-muted">Founder</p>
                    </div>
                </div>
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
                <img src="{{ asset('images/amplang7.jpeg') }}" alt="amplang7>" alt="Nilai Kerja Tim">
            </div>
        </div>
    </div>
</section>
@endsection