<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kişisel Portföy')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="/" class="text-2xl font-bold text-indigo-600">Adınız Soyadınız</a>
            <nav class="space-x-6">
                <a href="/" class="hover:text-indigo-600">Anasayfa</a>
                <a href="/about" class="hover:text-indigo-600">Hakkımda</a>
                <a href="/cv" class="hover:text-indigo-600">CV</a>
                <a href="/projects" class="hover:text-indigo-600">Projeler</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto py-8 px-6">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-gray-100">
        <div class="container mx-auto py-4 text-center">
            © {{ date('Y') }} Adınız Soyadınız. Tüm hakları saklıdır.
        </div>
    </footer>
</body>
</html>
