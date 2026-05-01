<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/dist/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <nav class="navbar bg-base-100 border-b border-base-300 px-4">
        <div class="flex-1">
            <a href="/" class="flex items-center gap-2 font-bold text-lg">
                <span class="text-xl">🐦</span> Chirper
            </a>
        </div>
        <div class="flex-none gap-2">
            <a href="#" class="btn btn-ghost btn-sm normal-case">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm normal-case">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center p-4">
        {{ $slot }}
    </main>

    <footer class="bg-base-100 border-t border-base-300 py-4 text-center">
        <p class="text-xs text-base-content/70">
            © {{ date('Y') }} Chirper - Built with Laravel and ❤️ by **Monica Annisa Fitri (230170143)**
        </p>
    </footer>
</body>
</html>