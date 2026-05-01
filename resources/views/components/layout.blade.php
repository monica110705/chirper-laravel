<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Chirper' }}</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    
    <script>
      tailwind.config = {
        daisyui: {
          themes: ["cupcake"],
        },
      }
    </script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-base-200 font-sans">

    <nav class="navbar bg-base-100 border-b border-base-300 px-4">
        <div class="flex-1">
            <a href="/" class="text-xl font-bold text-primary">Chirper</a>
        </div>
        <div class="flex-none gap-2">
            <a href="/login" class="btn btn-ghost btn-sm normal-case">Log in</a>
            <a href="/register" class="btn btn-primary btn-sm normal-case text-white">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center p-4">
        {{ $slot }}
    </main>

    <footer class="bg-base-100 border-t border-base-300 py-4 text-center text-sm text-base-content/60">
        <p>&copy; {{ date('Y') }} Chirper Inc. All rights reserved.</p>
    </footer>

</body>
</html>