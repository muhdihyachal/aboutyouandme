<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethereal Memories - Gallery</title>
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
                        'soft-blue-bg': '#f9fcff', // Putih dengan hint biru sangat tipis
                        'light-blue-accent': '#8cb7d9', // Biru muda
                        'deep-blue-text': '#4a6f8f', // Biru gelap untuk teks
                        'gray-text': '#8c9fb1', // Abu-abu kebiruan
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-soft-blue-bg font-sans text-gray-text antialiased">

    <nav class="flex items-center justify-between px-8 py-6 bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-blue-50">
        <div class="text-2xl font-serif font-semibold text-deep-blue-text italic">Ethereal Memories</div>
        <div class="hidden md:flex space-x-8 text-sm uppercase tracking-widest text-deep-blue-text">
    
    <a href="{{ url('/') }}" class="hover:text-light-blue-accent transition-colors">Our Story</a>
    
    <a href="{{ url('/gallery') }}" class="hover:text-light-blue-accent transition-colors">Gallery</a>
    
    
    <a href="#" class="hover:text-light-blue-accent transition-colors">Messages</a>
</div>
        <div class="text-light-blue-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
        </div>
    </nav>

    <section class="max-w-6xl mx-auto px-6 pt-16 pb-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
            <div class="max-w-lg">
                <h1 class="text-5xl font-serif text-deep-blue-text mb-4">Captured Moments</h1>
                <p class="text-gray-text leading-relaxed">
                    A curated visual narrative of our journey, held in light and shadow, preserved for the heart.
                </p>
            </div>
            
            <div class="flex flex-wrap gap-3">
                <button class="px-6 py-2 rounded-full bg-light-blue-accent text-white text-xs font-semibold tracking-wider uppercase transition-transform hover:scale-105">All Photos</button>
                
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
            
            <div class="flex flex-col gap-6">
                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800&auto=format&fit=crop" alt="Rings" class="w-full h-auto hover:scale-105 transition-transform duration-700">
                </div>
                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=800&auto=format&fit=crop" alt="Table Setting" class="w-full h-auto hover:scale-105 transition-transform duration-700">
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?q=80&w=800&auto=format&fit=crop" alt="Couple Walking" class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?q=80&w=800&auto=format&fit=crop" alt="Bouquet" class="w-full h-auto rounded-xl hover:scale-105 transition-transform duration-700">
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1495616811223-4d98c6e9c869?q=80&w=800&auto=format&fit=crop" alt="Sunset" class="w-full h-auto hover:scale-105 transition-transform duration-700">
                </div>
                
                <div class="bg-white border border-blue-50 rounded-2xl p-10 py-20 flex items-center justify-center text-center shadow-sm">
                    <p class="font-serif text-2xl text-deep-blue-text italic leading-relaxed">
                        "In all the world, there is no heart for me like yours."
                    </p>
                </div>

                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=800&auto=format&fit=crop" alt="Couple Dancing" class="w-full h-[350px] object-cover hover:scale-105 transition-transform duration-700">
                </div>
            </div>

        </div>

        <div class="mt-20 text-center flex flex-col items-center">
            <a href="#" class="bg-light-blue-accent hover:bg-deep-blue-text text-white px-8 py-3 rounded-full font-semibold transition-colors shadow-md mb-4 inline-block">
                View More Memories
            </a>
            <p class="text-sm italic text-gray-400">Updating weekly with new stories.</p>
        </div>
    </section>

    <footer class="bg-white py-12 text-center border-t border-blue-50 mt-10">
        <div class="max-w-3xl mx-auto px-6">
            <div class="flex justify-center gap-8 mb-6">
                <a href="#" class="text-gray-400 hover:text-light-blue-accent font-semibold tracking-widest text-xs uppercase transition-colors">Instagram</a>
                <a href="#" class="text-gray-400 hover:text-light-blue-accent font-semibold tracking-widest text-xs uppercase transition-colors">Pinterest</a>
                <a href="#" class="text-gray-400 hover:text-light-blue-accent font-semibold tracking-widest text-xs uppercase transition-colors">Youtube</a>
            </div>

            <p class="text-[10px] text-gray-400 uppercase tracking-[0.15em] leading-relaxed">
                &copy; {{ date('Y') }} Built with love. "In all the world, there is no heart for me like yours."
            </p>
        </div>
    </footer>

</body>
</html>
