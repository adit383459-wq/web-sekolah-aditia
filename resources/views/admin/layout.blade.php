<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Dashboard Admin') | SMK Negeri 1 Cijati</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="admin-body">
    <aside class="sidebar">
        <a class="brand admin-brand" href="{{ route('admin.dashboard') }}">
            <span class="brand-mark logo-mark"><img src="{{ asset('images/logo-smkn1-cijati.png') }}" alt="Logo SMK Negeri 1 Cijati"></span>
            <span><b>SMK N 1 CIJATI</b><small>ADMIN PANEL</small></span>
        </a>

        <nav>
            <a href="{{ route('admin.dashboard') }}">⌂ Dashboard</a>
            <a href="{{ route('admin.jurusan.index') }}">🎓 Jurusan</a>
            <a href="{{ route('admin.guru.index') }}">👨‍🏫 Data Guru</a>
            <a href="{{ route('admin.ekstrakurikuler.index') }}">🏆 Ekstrakurikuler</a>
            <a href="{{ route('admin.berita.index') }}">📰 Berita</a>
            <a href="{{ route('home') }}">↗ Lihat Website</a>
        </nav>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="logout">↪ Keluar</button>
        </form>
    </aside>

    <div class="admin-main">
        <header class="admin-top">
            <div>
                <span class="eyebrow">ADMINISTRATOR</span>
                <h1>@yield('heading','Dashboard')</h1>
            </div>
            <div class="user-chip">👤 {{ auth()->user()->name }}</div>
        </header>

        @if(session('success'))
            <div class="flash success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="flash error">
                <strong>Data belum bisa disimpan.</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
