<!doctype html>

<title>Modal Learning</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

@livewireStyles
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v3.x.x/dist/alpine.min.js" defer></script>

<body class="bg-gray-200">
<div class="container max-w-lg mx-auto bg-gray-300">
    <header class="bg-blue-600 p-4">
        <h1 class="font-bold tewt-white">Mon Site</h1>
    </header>

    <div class="grid grid-cols-12 p-4">
        <aside class="mr-6 col-span-3 text-sm">
            <ul>
                <li>Lien 1</li>
                <li>Lien 2</li>
                <li>Lien 3</li>
            </ul>
        </aside>

        <main class="text-sm col-span-9">
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
        <h5 class="text-xs">Mon Site</h5>
        <p>2023</p>
    </footer>
</div>

@livewireScripts
</body>


