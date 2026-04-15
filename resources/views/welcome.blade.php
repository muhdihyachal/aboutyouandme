<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethereal Memories - Light Blue Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lato:wght@300;400&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Lato"', 'sans-serif'],
                    },
                    colors: {
                        'soft-blue-bg': '#f0f7ff', // Latar belakang biru sangat muda
                        'light-blue-accent': '#a5c9e1', // Biru muda pastel
                        'deep-blue-text': '#5a7d9a', // Biru gelap untuk teks agar tetap terbaca
                        'ice-white': '#ffffff',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-soft-blue-bg font-sans text-gray-600 antialiased">

    <nav class="flex items-center justify-between px-8 py-6 bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-blue-100">
        <div class="text-2xl font-serif font-semibold text-light-blue-accent italic">Ethereal Memories</div>
        <div class="hidden md:flex space-x-8 text-sm uppercase tracking-widest text-deep-blue-text">
    
    <a href="{{ url('/') }}" class="hover:text-light-blue-accent transition-colors">Our Story</a>
    
    <a href="{{ url('/gallery') }}" class="hover:text-light-blue-accent transition-colors">Gallery</a>
    
    
    <a href="#" class="hover:text-light-blue-accent transition-colors">Messages</a>
</div>
        <div class="text-light-blue-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
        </div>
    </nav>

    <header class="relative w-full h-[85vh] overflow-hidden">
       <alt="Blue sky couple class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-blue-900/10 flex flex-col items-center justify-center text-center p-4">
            <span class="bg-ice-white/80 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-semibold tracking-widest uppercase mb-6 text-deep-blue-text">Since 2024</span>
            <h1 class="text-6xl md:text-8xl font-serif text-white mb-4 drop-shadow-lg">Our Journey<br><span class="italic font-light">in Blue</span></h1>
            <p class="text-white text-lg max-w-lg mb-8 drop-shadow-md font-light">Meniti hari di bawah langit yang sama, mengukir cerita dalam balutan ketenangan.</p>
            <a href="{{ url('/gallery') }}" class="bg-ice-white text-deep-blue-text hover:bg-light-blue-accent hover:text-white px-10 py-3 rounded-full transition-all duration-500 shadow-xl font-semibold tracking-wide">Explore Our Gallery</a>
        </div>
    </header>

    <section class="max-w-6xl mx-auto px-6 py-24 bg-white shadow-sm my-12 rounded-3xl">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            
            <div class="lg:col-span-1">
                <div class="sticky top-32">
                    <h2 class="text-4xl font-serif text-light-blue-accent mb-6">Our Story</h2>
                    <p class="italic text-deep-blue-text/70 mb-8 border-l-4 border-light-blue-accent pl-4">
                        "di sini di tempat terpencil,di ujung dunia yang sunyi aku menemukan pusat jiwaku yang selama ini keliru, 
                        kau adalah alasan mengapa lelah ku terasa damai senyum mu adalah pemandangan terindah yang abadi dan tak terurai."
                    </p>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-24">
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="w-full md:w-1/2 overflow-hidden rounded-2xl">
                        <img src="{{ asset('1.JPG') }}" alt="First Meeting" class="hover:scale-110 transition-transform duration-700 h-72 w-full object-cover">
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="text-xs font-bold tracking-widest text-light-blue-accent mb-2 uppercase">Awal Mula</p>
                        <h3 class="text-2xl font-serif text-deep-blue-text mb-4">Kenal</h3>
                        <p class="text-gray-400 leading-relaxed">Berawal dari kamu chat aku "Eh", keterusan sampe sekarang hihi ya kaan.. .</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row-reverse items-center gap-10">
                    <div class="w-full md:w-1/2 overflow-hidden rounded-2xl">
                        <img src="{{ asset('2.jpg') }}" alt="Travel" class="hover:scale-110 transition-transform duration-700 h-72 w-full object-cover">
                    </div>
                    <div class="w-full md:w-1/2 text-left md:text-right">
                        <p class="text-xs font-bold tracking-widest text-light-blue-accent mb-2 uppercase">Pertamakali</p>
                        <h3 class="text-2xl font-serif text-deep-blue-text mb-4">Kita Meet</h3>
                        <p class="text-gray-400 leading-relaxed">Menjelajahi tempat-tempat baru, menemukan kedamaian di setiap deburan ombak dan warna biru laut yang kita lalui.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-24 bg-soft-blue-bg">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-deep-blue-text mb-4">Captured Moments</h2>
                <div class="h-1 w-20 bg-light-blue-accent mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-3 rounded-xl shadow-md transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=800" class="rounded-lg h-60 w-full object-cover mb-4">
                    <p class="font-serif italic text-center text-deep-blue-text">Sore di Danau</p>
                </div>
                <div class="bg-white p-3 rounded-xl shadow-md transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=800" class="rounded-lg h-60 w-full object-cover mb-4">
                    <p class="font-serif italic text-center text-deep-blue-text">Puncak Harapan</p>
                </div>
                <div class="bg-white p-3 rounded-xl shadow-md transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=800" class="rounded-lg h-60 w-full object-cover mb-4">
                    <p class="font-serif italic text-center text-deep-blue-text">Rumah di Tepi Laut</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white py-20 text-center border-t border-blue-50">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif text-deep-blue-text leading-relaxed mb-10">
                "Mencintaimu adalah hal terindah yang pernah kurasakan dalam hidup ini."
            </h2>
            
            <div class="flex justify-center gap-8 mb-12">
                <a href="#" class="text-light-blue-accent hover:text-deep-blue-text font-bold tracking-widest text-xs uppercase transition-colors">Instagram</a>
                <a href="#" class="text-light-blue-accent hover:text-deep-blue-text font-bold tracking-widest text-xs uppercase transition-colors">Pinterest</a>
            </div>

            <p class="text-[10px] text-gray-300 uppercase tracking-[0.2em]">
                &copy; {{ date('Y') }} Ethereal Memories. Dibuat dengan cinta dan nuansa biru.
            </p>
        </div>
    </footer>

</body>
</html>o
