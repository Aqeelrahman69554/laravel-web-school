<!doctype html>
<html lang="en">
<head>
    @include('visitor.partials.head')
</head>
<body>
    {{-- Navbar selalu muncul di semua halaman --}}
    @include('visitor.components.navbar')

    {{-- Area ini adalah 'lubang' kosong yang akan diisi konten dinamis --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer selalu muncul di semua halaman --}}
    @include('visitor.components.footer')

    @include('visitor.partials.script')
</body>
</html>