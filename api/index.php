<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaniQu - Platform Petani Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-50 text-gray-800 overflow-x-hidden">
    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <div class="flex items-center space-x-3">
                <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?auto=format&fit=crop&w=48&q=80" alt="Logo TaniQu" class="h-12 w-12 rounded-full">
                <div>
                    <h1 class="text-xl font-bold text-green-700">TaniQu</h1>
                    <p class="text-sm text-gray-500">Bersama memajukan pertanian Indonesia</p>
                </div>
            </div>
            <!-- Hamburger button for mobile/tablet -->
            <button id="menu-toggle" class="lg:hidden flex items-center px-3 py-2 border rounded text-green-700 border-green-700 focus:outline-none" aria-label="Toggle Menu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex gap-6">
                <a href="#beranda" class="hover:text-green-600 font-medium text-green-700 font-bold">Beranda</a>
                <a href="#tentang" class="hover:text-green-600 font-medium">Tentang Kami</a>
                <a href="#layanan" class="hover:text-green-600 font-medium">Layanan</a>
                <a href="#edukasi" class="hover:text-green-600 font-medium">Edukasi</a>
                <a href="#berita" class="hover:text-green-600 font-medium">Berita & Tips</a>
                <a href="#galeri" class="hover:text-green-600 font-medium">Galeri</a>
                <a href="#kontak" class="hover:text-green-600 font-medium">Kontak</a>
            </nav>
        </div>
        <!-- Mobile/Tablet Navigation -->
        <nav id="mobile-menu" class="lg:hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
            <div class="bg-white w-4/5 max-w-xs h-full shadow-lg p-6 flex flex-col gap-4 animate-slideInLeft">
                <button id="menu-close" class="self-end mb-4 text-gray-700" aria-label="Tutup Menu">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <a href="#beranda" class="hover:text-green-600 font-medium text-green-700 font-bold">Beranda</a>
                <a href="#tentang" class="hover:text-green-600 font-medium">Tentang Kami</a>
                <a href="#layanan" class="hover:text-green-600 font-medium">Layanan</a>
                <a href="#edukasi" class="hover:text-green-600 font-medium">Edukasi</a>
                <a href="#berita" class="hover:text-green-600 font-medium">Berita & Tips</a>
                <a href="#galeri" class="hover:text-green-600 font-medium">Galeri</a>
                <a href="#kontak" class="hover:text-green-600 font-medium">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="relative bg-green-700 text-white">
        <div class="block md:hidden">
            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?auto=format&fit=crop&w=1200&q=80" alt="Petani di Sawah" class="w-full h-48 object-cover opacity-60">
        </div>
        <div class="hidden md:block">
            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?auto=format&fit=crop&w=1200&q=80" alt="Petani di Sawah" class="w-full h-72 object-cover opacity-60">
        </div>
        <div class="relative md:absolute md:inset-0 flex flex-col items-center justify-center text-center px-4 py-8 md:py-0">
            <h2 class="text-2xl md:text-4xl font-bold mb-2">Selamat Datang di TaniQu</h2>
            <p class="text-gray-200 mb-4 text-base">Platform Digital untuk Petani Indonesia yang Modern dan Berdaya</p>
            <p class="mb-4 text-base md:text-lg">Akses informasi, edukasi, dan layanan pertanian dalam genggaman Anda</p>
            <div class="flex flex-col gap-2 w-full max-w-xs mx-auto md:flex-row md:gap-3 md:max-w-none md:w-auto md:mx-0">
                <a href="#tentang" class="bg-white text-green-700 px-5 py-2 rounded font-semibold shadow hover:bg-green-100">Tentang TaniQu</a>
                <a href="https://wa.me/6285397215951"
                    class="bg-green-500 text-white px-5 py-2 rounded font-semibold shadow hover:bg-green-600"
                    target="_blank">
                    Akses Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- Tentang TaniQu -->
    <section id="tentang" class="container mx-auto py-12 px-4">
        <div class="md:flex md:items-center md:gap-8">
            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=300&q=80" alt="Petani Modern" class="rounded-lg shadow mb-6 md:mb-0 w-full md:w-auto">
            <div>
                <h3 class="text-2xl font-bold mb-2">Tentang TaniQu</h3>
                <p class="mb-2">TaniQu adalah platform digital yang didedikasikan untuk memberdayakan petani Indonesia. Kami menyediakan akses informasi harga pasar, edukasi pertanian modern, konsultasi dengan ahli, dan marketplace untuk hasil panen. Bergabunglah dengan lebih dari 10.000+ petani yang telah merasakan manfaatnya.</p>
                <a href="#" class="text-green-700 font-semibold hover:underline">Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section id="layanan" class="bg-white py-12">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold text-center mb-2">Layanan Unggulan</h3>
            <p class="text-gray-500 mb-8 text-center text-base">Berbagai layanan untuk mendukung kesuksesan petani Indonesia</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                    <span class="text-3xl mb-2">💰</span>
                    <span class="font-semibold">Info Harga Pasar</span>
                </a>
                <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                    <span class="text-3xl mb-2">🎓</span>
                    <span class="font-semibold">Edukasi Pertanian</span>
                </a>
                <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                    <span class="text-3xl mb-2">🌦️</span>
                    <span class="font-semibold">Prakiraan Cuaca</span>
                </a>
                <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                    <span class="text-3xl mb-2">🛒</span>
                    <span class="font-semibold">Marketplace</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Berita & Tips Terbaru -->
    <section id="berita" class="container mx-auto py-12 px-4">
        <h3 class="text-2xl font-bold mb-2 text-center">Berita & Tips Pertanian</h3>
        <p class="text-gray-500 mb-8 text-center text-base">Update berita, tips, dan informasi penting seputar dunia pertanian</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded shadow p-4">
                <h4 class="font-semibold mb-1">Tips Meningkatkan Hasil Panen Padi</h4>
                <span class="text-xs text-gray-400">01 Jan 2025</span>
                <p class="mt-2 text-sm">Pelajari teknik-teknik modern untuk meningkatkan produktivitas panen padi hingga 30%...</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h4 class="font-semibold mb-1">Cara Mengatasi Hama Tanaman Secara Alami</h4>
                <span class="text-xs text-gray-400">28 Des 2024</span>
                <p class="mt-2 text-sm">Solusi ramah lingkungan untuk mengendalikan hama tanpa pestisida kimia berbahaya...</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h4 class="font-semibold mb-1">Subsidi Pupuk 2025: Panduan Lengkap</h4>
                <span class="text-xs text-gray-400">15 Des 2024</span>
                <p class="mt-2 text-sm">Informasi lengkap tentang program subsidi pupuk tahun 2025 dan cara mengaksesnya...</p>
            </div>
        </div>
        <div class="text-center mt-6">
            <a href="#" class="text-green-700 font-semibold hover:underline">Lihat Semua Artikel</a>
        </div>
    </section>

    <!-- Program Edukasi -->
    <section id="edukasi" class="bg-green-50 py-12">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold text-center mb-2">Program Edukasi</h3>
            <p class="text-gray-500 mb-8 text-center text-base">Tingkatkan pengetahuan dan keterampilan pertanian Anda</p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                    <span class="text-3xl mb-2">📚</span>
                    <h4 class="font-semibold mb-1">Kursus Online Gratis</h4>
                    <p class="text-sm text-center">Video tutorial dan materi pembelajaran pertanian modern</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Mulai Belajar</a>
                </div>
                <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                    <span class="text-3xl mb-2">👨‍🌾</span>
                    <h4 class="font-semibold mb-1">Konsultasi dengan Ahli</h4>
                    <p class="text-sm text-center">Tanya jawab langsung dengan pakar pertanian berpengalaman</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Konsultasi</a>
                </div>
                <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                    <span class="text-3xl mb-2">🤝</span>
                    <h4 class="font-semibold mb-1">Komunitas Petani</h4>
                    <p class="text-sm text-center">Bergabung dan berbagi pengalaman dengan sesama petani</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Gabung</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Foto / Video -->
    <section id="galeri" class="container mx-auto py-12 px-4">
        <h3 class="text-2xl font-bold mb-2 text-center">Galeri Aktivitas</h3>
        <p class="text-gray-500 mb-8 text-center text-base">Dokumentasi kegiatan dan kisah sukses para petani</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="aspect-[4/3] bg-gray-200 rounded shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&w=400&q=80" alt="Galeri 1" class="object-cover w-full h-full">
            </div>
            <div class="aspect-[4/3] bg-gray-200 rounded shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=400&q=80" alt="Galeri 2" class="object-cover w-full h-full">
            </div>
            <div class="aspect-[4/3] bg-gray-200 rounded shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?auto=format&fit=crop&w=400&q=80" alt="Galeri 3" class="object-cover w-full h-full">
            </div>
            <div class="aspect-[4/3] bg-gray-200 rounded shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=400&q=80" alt="Galeri 4" class="object-cover w-full h-full">
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="text-green-700 font-semibold hover:underline">Lihat Galeri Lengkap</a>
        </div>
    </section>

    <!-- Kontak & Lokasi -->
    <section id="kontak" class="bg-white py-12">
        <div class="container mx-auto px-4 md:flex md:space-x-8">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h3 class="text-2xl font-bold mb-2">Hubungi Kami</h3>
                <p class="text-gray-500 mb-4 text-base">Punya pertanyaan atau butuh bantuan? Tim kami siap membantu Anda</p>
                <p class="mb-1">📍 Jalan Perintis Kemerdekaan 7</p>
                <p class="mb-1">📞 Telepon: 085-397-215-951</p>
                <p class="mb-1">📧 Email: info@taniqu.id</p>
                <p class="mb-1">⏰ Layanan: Senin - Jumat, 08:00 - 17:00 WITA</p>
            </div>
            <div class="md:w-1/2">
                <iframe
                    src="https://maps.google.com/maps?q=VF6M%2BQCH%2C%20Jl.%20Perintis%20Kemerdekaan%20VII%2C%20Tamalanrea%20Indah%2C%20Kec.%20Tamalanrea%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090245&z=15&output=embed"
                    width="100%"
                    height="250"
                    class="rounded shadow"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6 mt-8">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4">
            <div class="flex items-center space-x-2 mb-2 md:mb-0">
                <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?auto=format&fit=crop&w=32&q=80" alt="Logo TaniQu" class="h-8 w-8 rounded-full">
                <span class="font-semibold">TaniQu - Platform Petani Indonesia</span>
            </div>
            <div class="flex space-x-4 mb-2 md:mb-0">
                <a href="#" class="hover:underline">Instagram</a>
                <a href="#" class="hover:underline">Facebook</a>
                <a href="#" class="hover:underline">YouTube</a>
            </div>
            <div class="text-sm">&copy; 2025 TaniQu. All rights reserved.</div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuClose = document.getElementById('menu-close');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        menuClose.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Close menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>

</html>