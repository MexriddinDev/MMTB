<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktabgacha Ta'lim Vazirligi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="font-inter bg-gray-50 overflow-x-hidden">
<!-- Navbar -->
<nav class="bg-transparent text-white fixed top-0 w-full z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-4xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-600">MTV</a>
            </div>
            <div class="hidden md:flex space-x-12">
                <a href="/" class="relative text-lg font-semibold text-gray-100 hover:text-blue-300 transition-all duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Bosh sahifa</a>
                <a href="#" class="relative text-lg font-semibold text-gray-100 hover:text-blue-300 transition-all duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Yangiliklar</a>
                <a href="#" class="relative text-lg font-semibold text-gray-100 hover:text-blue-300 transition-all duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Hujjatlar</a>
                <a href="#" class="relative text-lg font-semibold text-gray-100 hover:text-blue-300 transition-all duration-300 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Bog‘lanish</a>
            </div>
            <div class="hidden md:flex items-center gap-4">
                <a href="{{route('login')}}" id="loginBtn" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    Kirish
                </a>
            </div>
            <!-- Hamburger Menu -->
            <div class="md:hidden flex items-center">
                <button id="menuBtn" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-3xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-gradient-to-r from-blue-900 to-indigo-900 text-white px-6 py-8 animate-slide-in">
        <a href="/" class="block py-3 text-lg font-semibold hover:text-blue-300 transition">Bosh sahifa</a>
        <a href="#" class="block py-3 text-lg font-semibold hover:text-blue-300 transition">Yangiliklar</a>
        <a href="#" class="block py-3 text-lg font-semibold hover:text-blue-300 transition">Hujjatlar</a>
        <a href="#" class="block py-3 text-lg font-semibold hover:text-blue-300 transition">Bog‘lanish</a>
        <a href="{{route('login')}}" class="block mt-6 bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-full font-semibold text-center hover:shadow-lg transition">Kirish</a>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-32 overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-16 relative z-10">
        <div class="md:w-1/2 text-center md:text-left">
            <h2 class="text-6xl font-extrabold text-gray-900 mb-8 leading-tight animate-fade-in-up">
                Ta'limning <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">Zamonaviy</span> Kelajagi
            </h2>
            <p class="text-xl text-gray-700 mb-10 leading-relaxed animate-fade-in-up delay-100">
                Biz bolalarimizga sifatli ta’lim va innovatsion yechimlar taqdim etib, ularning yorqin kelajagini quramiz.
            </p>
            <div class="flex justify-center md:justify-start gap-6">
                <a href="{{route('added')}}" id="exploreBtn" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-10 py-4 rounded-full font-semibold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    Ko‘proq bilib oling
                </a>
                <a href="{{route('login')}}" class="bg-transparent border-2 border-blue-600 text-blue-600 px-10 py-4 rounded-full font-semibold text-lg hover:bg-blue-600 hover:text-white hover:shadow-xl transition-all duration-300">
                    Tizimga kirish
                </a>
            </div>
        </div>
        <div class="md:w-1/2 perspective-1000">
            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Ta'lim" class="rounded-3xl shadow-2xl transform hover:rotate-3 hover:scale-105 transition-all duration-500">
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-5xl font-extrabold text-center text-gray-900 mb-20 animate-fade-in">Bizning Afzalliklarimiz</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="relative p-10 bg-white rounded-3xl shadow-2xl hover:shadow-[0_20px_50px_rgba(59,130,246,0.3)] transition-all duration-500 transform hover:-translate-y-3 group">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500"></div>
                <div class="relative text-blue-600 text-6xl mb-8 transform group-hover:scale-110 transition-transform duration-300"><i class="fas fa-book-open"></i></div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Sifatli Ta'lim</h3>
                <p class="text-gray-600 leading-relaxed">Eng zamonaviy metodlar va tajribali o‘qituvchilar bilan ta’lim sifatini oshiramiz.</p>
            </div>
            <div class="relative p-10 bg-white rounded-3xl shadow-2xl hover:shadow-[0_20px_50px_rgba(59,130,246,0.3)] transition-all duration-500 transform hover:-translate-y-3 group">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500"></div>
                <div class="relative text-blue-600 text-6xl mb-8 transform group-hover:scale-110 transition-transform duration-300"><i class="fas fa-rocket"></i></div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Innovatsiyalar</h3>
                <p class="text-gray-600 leading-relaxed">Raqamli platformalar va yangi yondashuvlar bilan ta’limni rivojlantiramiz.</p>
            </div>
            <div class="relative p-10 bg-white rounded-3xl shadow-2xl hover:shadow-[0_20px_50px_rgba(59,130,246,0.3)] transition-all duration-500 transform hover:-translate-y-3 group">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500"></div>
                <div class="relative text-blue-600 text-6xl mb-8 transform group-hover:scale-110 transition-transform duration-300"><i class="fas fa-handshake"></i></div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Hamkorlik</h3>
                <p class="text-gray-600 leading-relaxed">Ota-onalar va jamoatchilik bilan yaqin hamkorlik orqali muvaffaqiyatga erishamiz.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gradient-to-br from-blue-900 to-indigo-950 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16">
            <div>
                <h3 class="text-3xl font-extrabold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-600">Maktabgacha Ta'lim</h3>
                <p class="text-gray-300 leading-relaxed">Biz bolalarimizning kelajagi uchun eng yaxshi ta’lim muhitini yaratamiz.</p>
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-6">Tez havolalar</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-300 hover:text-blue-300 hover:translate-x-2 transition-all duration-300">Yangiliklar</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-300 hover:translate-x-2 transition-all duration-300">Hujjatlar</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-300 hover:translate-x-2 transition-all duration-300">Bog‘lanish</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-6">Bog‘lanish</h3>
                <p class="text-gray-300 mb-4">Email: <a href="mailto:info@mtv.uz" class="hover:text-blue-300 transition">info@mtv.uz</a></p>
                <p class="text-gray-300 mb-4">Telefon: <a href="tel:+998711234567" class="hover:text-blue-300 transition">+998 71 123 45 67</a></p>
                <p class="text-gray-300">Manzil: Toshkent, Chilanzar, 45-uy</p>
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-6">Bizni kuzating</h3>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-300 hover:text-blue-300 text-3xl hover:scale-110 transition-transform duration-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-300 hover:text-blue-300 text-3xl hover:scale-110 transition-transform duration-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-blue-300 text-3xl hover:scale-110 transition-transform duration-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-blue-300 text-3xl hover:scale-110 transition-transform duration-300"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-16 text-center border-t border-blue-800 pt-8">
            <p class="text-gray-300">© 2025 Maktabgacha Ta'lim Vazirligi. Barcha huquqlar himoyalangan.</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Navbar Scroll Effect
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-gradient-to-r', 'from-blue-900', 'to-indigo-900', 'shadow-xl');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-gradient-to-r', 'from-blue-900', 'to-indigo-900', 'shadow-xl');
            navbar.classList.add('bg-transparent');
        }
    });

    // Hamburger Menu Toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('animate-slide-in');
    });

    // Explore Button Animation
    const exploreBtn = document.getElementById('exploreBtn');
    exploreBtn.addEventListener('click', () => {
        exploreBtn.classList.add('animate-pulse');
        setTimeout(() => {
            exploreBtn.classList.remove('animate-pulse');
        }, 1000);
    });
</script>

<!-- Custom Animation Styles -->
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideIn {
        from { transform: translateY(-100%); }
        to { transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-slide-in { animation: slideIn 0.5s ease-out forwards; }
    .delay-100 { animation-delay: 0.2s; }
    .perspective-1000 { perspective: 1000px; }
</style>
</body>
</html>
