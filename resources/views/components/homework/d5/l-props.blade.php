<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Props</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <nav class="ml-10 flex items-baseline space-x-4">
        <x-homework.d5.nav-link-d5 href="/hw-d5" :active="request()->is('hw-d5')">Home</x-homework.d5.nav-link-d5>
        <x-homework.d5.nav-link-d5 href="/hw-d5-about" :active="request()->is('hw-d5-about')">About</x-homework.d5.nav-link-d5>
        <x-homework.d5.nav-link-d5 type="button" :active="request()->is('hw-d5-contact')">Contact</x-homework.d5.nav-link-d5>
    </nav>
    <div class="ml-4">
        {{ $slot }}
    </div>
</body>
</html>
{{-- Updated --}}