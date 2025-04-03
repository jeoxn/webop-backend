<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webop - Transformasi Digital UMKM Indonesia</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png" />
    <link rel="manifest" href="ico/site.webmanifest" />
    <!-- end favicon -->
     
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .btn-primary {
            background-color: #3B82F6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #2563EB;
            transform: translateY(-2px);
        }
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 1.5rem;
            position: relative;
        }
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 4px;
            background-color: #3B82F6;
            border-radius: 2px;
        }
        .nav-link {
            color: #4B5563;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #3B82F6;
        }
        .package-card {
            transition: all 0.3s;
            border-top: 4px solid transparent;
        }
        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .basic-card {
            border-top-color: #10B981;
        }
        .standard-card {
            border-top-color: #3B82F6;
        }
        .premium-card {
            border-top-color: #F59E0B;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header/Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-blue-600">Webop</a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="nav-link font-medium">Beranda</a>
                    <a href="#tentang" class="nav-link">Tentang Kami</a>
                    <a href="#layanan" class="nav-link">Layanan</a>
                    <a href="#kursus" class="nav-link">Kursus</a>
                    <a href="#paket" class="nav-link">Paket</a>
                    <a href="#articles" class="nav-link">Article</a>
                    <a href="#kontak" class="nav-link">Kontak</a>
                </nav>
                <button id="menu-toggle" class="md:hidden focus:outline-none">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="md:hidden hidden absolute top-16 left-0 right-0 bg-white shadow-md py-2 px-6">
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Beranda</a>
            <a href="#tentang" class="block py-2 text-gray-700 hover:text-blue-600">Tentang Kami</a>
            <a href="#layanan" class="block py-2 text-gray-700 hover:text-blue-600">Layanan</a>
            <a href="#kursus" class="block py-2 text-gray-700 hover:text-blue-600">Kursus</a>
            <a href="#paket" class="block py-2 text-gray-700 hover:text-blue-600">Paket</a>
            <a href="#kontak" class="block py-2 text-gray-700 hover:text-blue-600">Kontak</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Website Profesional untuk UMKM Indonesia</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Website profesional dan kursus pemrograman dengan kualitas tinggi, harga terjangkau oleh tim berpengalaman.</p>
            <div class="space-x-4">
                <a href="#paket" class="btn-primary inline-block">Paket Website</a>
                <a href="#kursus" class="bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition duration-300 inline-block">Paket Kursus</a>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="{{ asset('/img/webopLogo.png') }}" alt="Tentang Kami" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="section-title">Tentang Webop</h2>
                    <p class="text-gray-600 mb-6">Webop bertujuan untuk membantu UMKM di Indonesia mentransformasi berbagai aspek kehidupan dengan memanfaatkan teknologi digital secara inovatif dan efisien.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Tim kreatif dengan ide-ide segar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Harga terjangkau khusus UMKM dan startup</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Teknologi terkini dan desain responsif</span>
                        </li>
                    </ul>
                    <a href="#layanan" class="btn-primary inline-block">Pelajari Layanan Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-center">Keunggulan Kami</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Mengapa memilih jasa pembuatan website dari tim kami?</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Harga Lebih Terjangkau</h3>
                    <p class="text-gray-700 mb-4">Biaya pembuatan website lebih murah (bisa nego). Cocok untuk UMKM, startup, atau perusahaan kecil yang ingin memiliki website profesional dengan budget terbatas.</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Harga yang bersaing</span>
                    </div>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Desain Kreatif & Fresh</h3>
                    <p class="text-gray-700 mb-4">Tim kami memiliki ide-ide segar dan desain modern yang sesuai dengan tren terkini. Pendekatan lebih fleksibel untuk menyesuaikan kebutuhan bisnis Anda.</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Desain modern dan inovatif</span>
                    </div>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Teknologi Terkini</h3>
                    <p class="text-gray-700 mb-4">Kami menggunakan tools dan framework terbaru (React, WordPress, Bootstrap, dll.) untuk memastikan website cepat dan SEO-friendly. Desain mobile-first agar tampilan optimal di smartphone.</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Framework modern dan SEO-friendly</span>
                    </div>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Support Pasca-Launch</h3>
                    <p class="text-gray-700 mb-4">Bantuan update konten atau perbaikan minor setelah website online (bisa diskusi lebih lanjut). Tips dasar SEO gratis agar website lebih mudah ditemukan di Google.</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Dukungan setelah website online</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Website -->
    <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-center">Layanan Pembuatan Website</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Kami menyediakan layanan pembuatan website profil perusahaan yang profesional dengan fitur lengkap.</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Halaman Beranda</h3>
                    <p class="text-gray-600 text-sm">Gambaran umum perusahaan dengan desain menarik dan call-to-action.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Tentang Kami</h3>
                    <p class="text-gray-600 text-sm">Sejarah, visi-misi, nilai-nilai, dan struktur organisasi perusahaan.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Produk/Layanan</h3>
                    <p class="text-gray-600 text-sm">Deskripsi lengkap produk atau layanan dengan gambar pendukung.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Portofolio</h3>
                    <p class="text-gray-600 text-sm">Contoh pekerjaan, klien, atau studi kasus perusahaan.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Blog/Artikel</h3>
                    <p class="text-gray-600 text-sm">Konten informatif untuk meningkatkan SEO dan engagement.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kontak</h3>
                    <p class="text-gray-600 text-sm">Formulir kontak, alamat, nomor telepon, dan media sosial.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Testimoni</h3>
                    <p class="text-gray-600 text-sm">Ulasan dari pelanggan untuk membangun kepercayaan.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3V5M12 3V5M15 3V5M9 12V14M12 12V14M15 12V14M9 18V20M12 18V20M15 18V20M5 9H19M5 15H19M5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Responsif & SEO</h3>
                    <p class="text-gray-600 text-sm">Tampilan optimal di semua device dan optimasi mesin pencari.</p>
                </div>
        </div>
    </section>

    <!-- Paket Layanan -->
    <section id="paket" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-center">Paket Layanan</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Paket Basic -->
                <div class="package-card basic-card bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-green-100 px-6 py-4">
                        <h3 class="text-xl font-bold text-green-800">Paket Basic</h3>
                        <p class="text-green-600">UMKM/Startup</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4">Rp 1.5-3jt</div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Desain sederhana & responsif</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>4-5 Halaman (Beranda, Tentang Kami, Layanan, Kontak)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Template WordPress/HTML dasar</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Formulir kontak & integrasi WhatsApp</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Optimasi kecepatan dasar</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Gratis 1x revisi minor</span>
                            </li>
                        </ul>
                        <div class="text-sm text-gray-500 mb-4">*Domain & Hosting: Tidak termasuk (bisa bantu rekomendasi)</div>
                        <a href="#kontak" class="btn-primary w-full text-center block">Pilih Paket</a>
                    </div>
                </div>
                
                <!-- Paket Standard -->
                <div class="package-card standard-card bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-blue-100 px-6 py-4">
                        <h3 class="text-xl font-bold text-blue-800">Paket Standard</h3>
                        <p class="text-blue-600">Perusahaan Kecil/Organisasi</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4">Rp 3.5-6jt</div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Desain custom lebih profesional</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>6-8 Halaman (+Portofolio, Testimoni, Blog)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>CMS WordPress/Laravel</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Integrasi media sosial & Google Maps</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>SEO dasar (meta tags, judul, deskripsi)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Gratis 2x revisi</span>
                            </li>
                        </ul>
                        <div class="text-sm text-gray-500 mb-4">*Domain & Hosting: Bisa dibantu instalasi (biaya terpisah)</div>
                        <a href="#kontak" class="btn-primary w-full text-center block">Pilih Paket</a>
                    </div>
                </div>
                
                <!-- Paket Premium -->
                <div class="package-card premium-card bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-yellow-100 px-6 py-4">
                        <h3 class="text-xl font-bold text-yellow-800">Paket Premium</h3>
                        <p class="text-yellow-600">Perusahaan Menengah/Profesional</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4">Rp 7-12jt</div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Desain premium & UI/UX modern</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Halaman unlimited + blog terkelola</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Fitur lanjutan (slider animasi, galeri proyek)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>SEO lebih advanced (schema markup, speed optimization)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Integrasi Google Analytics & WhatsApp Business API</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Support 1 bulan pasca-launch</span>
                            </li>
                        </ul>
                        <div class="text-sm text-gray-500 mb-4">*Domain & Hosting: Bisa include (nego sesuai kebutuhan)</div>
                        <a href="#kontak" class="btn-primary w-full text-center block">Pilih Paket</a>
                    </div>
                </div>
            </div>
            
            <!-- Layanan Tambahan -->
            <div class="mt-16 bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-center mb-6">Layanan Tambahan (Add-ons)</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold mb-2">Domain (.com/.id/.co.id)</h4>
                        <p class="text-gray-600 text-sm">Rp 150.000 -- Rp 500.000/tahun</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold mb-2">Hosting (Starter)</h4>
                        <p class="text-gray-600 text-sm">Rp 300.000 -- Rp 800.000/tahun</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold mb-2">Maintenance Bulanan</h4>
                        <p class="text-gray-600 text-sm">Rp 200.000 -- Rp 500.000/bulan</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold mb-2">SEO Advanced</h4>
                        <p class="text-gray-600 text-sm">Rp 1.000.000 -- Rp 3.000.000 (keyword targeting)</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold mb-2">Pelatihan Admin Website</h4>
                        <p class="text-gray-600 text-sm">Rp 500.000/sesi (2-3 jam)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kursus Section -->
    <section id="kursus" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="section-title text-center">Kursus Pembuatan Website</h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Tingkatkan skill digital Anda dengan kursus kami yang dirancang untuk berbagai level keahlian.</p>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Kursus Dasar -->
            <div class="package-card bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500">
                <div class="bg-green-100 px-6 py-4">
                    <h3 class="text-xl font-bold text-green-800">Kursus Dasar</h3>
                    <p class="text-green-600">Pemula</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold mb-4">Rp 500.000</div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pengenalan HTML & CSS dasar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Membuat layout website sederhana</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pengenalan responsive design</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Dasar-dasar hosting & domain</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>4 sesi (2 jam/sesi)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Sertifikat penyelesaian</span>
                        </li>
                    </ul>
                    <a href="#kontak" class="btn-primary w-full text-center block">Daftar Sekarang</a>
                </div>
            </div>
            
            <!-- Kursus Menengah -->
            <div class="package-card bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-blue-500">
                <div class="bg-blue-100 px-6 py-4">
                    <h3 class="text-xl font-bold text-blue-800">Kursus Menengah</h3>
                    <p class="text-blue-600">Intermediate</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold mb-4">Rp 1.200.000</div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>CSS lanjutan (Flexbox, Grid)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pengenalan JavaScript dasar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Framework CSS (Tailwind/Bootstrap)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Optimasi performa website</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>6 sesi (2 jam/sesi)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Proyek akhir + sertifikat</span>
                        </li>
                    </ul>
                    <a href="#kontak" class="btn-primary w-full text-center block">Daftar Sekarang</a>
                </div>
            </div>
            
            <!-- Kursus Profesional -->
            <div class="package-card bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-purple-500">
                <div class="bg-purple-100 px-6 py-4">
                    <h3 class="text-xl font-bold text-purple-800">Kursus Profesional</h3>
                    <p class="text-purple-600">Advanced</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold mb-4">Rp 2.500.000</div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>JavaScript modern (ES6+)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Framework frontend (React/Vue)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Backend dasar (Node.js/Express)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Database (MongoDB/MySQL)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>8 sesi (2.5 jam/sesi)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Proyek akhir + sertifikat + portfolio review</span>
                        </li>
                    </ul>
                    <a href="#kontak" class="btn-primary w-full text-center block">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <h3 class="text-xl font-semibold mb-4">Metode Pembelajaran</h3>
            <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <svg class="w-10 h-10 mx-auto mb-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <h4 class="font-medium">Kelas Online Live</h4>
                    <p class="text-sm text-gray-600 mt-1">Interaktif via Zoom dengan instruktur</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <svg class="w-10 h-10 mx-auto mb-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h4 class="font-medium">Materi Lengkap</h4>
                    <p class="text-sm text-gray-600 mt-1">Modul PDF, video rekaman, dan contoh kode</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <svg class="w-10 h-10 mx-auto mb-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <h4 class="font-medium">Support 1-on-1</h4>
                    <p class="text-sm text-gray-600 mt-1">Konsultasi privat dengan mentor</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Articles --}}
    <section id="articles">
        <div class="container mx-auto px-6 py-16">
            <h2 class="section-title text-center">Artikel Terbaru</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Dapatkan tips dan informasi terbaru seputar dunia digital dan teknologi.</p>
            @if ($articles->isEmpty())
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-4">Belum ada artikel terbaru</h3>
                    <p class="text-gray-500">Kami akan segera menambahkan artikel menarik untuk Anda.</p>
                </div>
            @endif
            <div id="articles-list" class="grid md:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset($article->image) }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $article->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($article->content), 100, '...') }}</p>
                        <p>{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('j F Y') }}</p>
                        <a href="article/{{ $article->slug }}" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="grid md:grid-cols-3 gap-8">
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Mengembangkan Bisnis atau Skill Digital Anda?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Diskusikan kebutuhan website profesional atau pilihan kursus pemrograman kami - solusi tepat untuk UMKM dan individu yang ingin berkembang di era digital.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-2xl mx-auto">
                <a href="https://wa.me/6285372479927?text=Saya%20tertarik%20dengan%20layanan%20pembuatan%20website" 
                   class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 flex-1 flex items-center justify-center gap-2">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                   </svg>
                   Konsultasi Website
                </a>
                
                <a href="https://wa.me/6285372479927?text=Saya%20tertarik%20dengan%20kursus%20pemrograman" 
                   class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 flex-1 flex items-center justify-center gap-2">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                   </svg>
                   Info Kursus
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Webop</h3>
                    <p class="text-gray-400">Membantu UMKM di Indonesia mentransformasi bisnis dengan solusi digital yang inovatif dan efisien.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="#layanan" class="text-gray-400 hover:text-white transition duration-300">Layanan</a></li>
                        <li><a href="#kursus" class="text-gray-400 hover:text-white transition duration-300">Kursus</a></li>
                        <li><a href="#paket" class="text-gray-400 hover:text-white transition duration-300">Paket</a></li>
                        <li><a href="#kontak" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Kompleks Yadara babarsari, Caturtunggal, Kabupaten Sleman, Daerah Istimewa Yogyakarta</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+62 853-7247-9927</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>webop.id@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Media Sosial</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-pink-600 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-400 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-500 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Webop. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>