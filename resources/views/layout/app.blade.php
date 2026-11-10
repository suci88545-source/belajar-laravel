
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background: #f8f9fc;
        }

        header {
            background: #667eea;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        header h2 {
            margin: 0;
            font-size: 22px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: #e0e7ff;
        }

        nav span {
            font-size: 13px;
        }

        .btn-logout {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 9px 17px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-logout:hover {
            background: #c0392b;
        }

        main {
            flex: 1;
            width: 100%;
            padding: 20px 30px;
        }

        footer {
            background: #f1f3f9;
            color: #555;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                gap: 12px;
            }

            main {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h2>Sistem Informasi Surat</h2>

        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('surat-masuk.index') }}">Surat Masuk</a>
            <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a>

            @auth
                <span>
                    Masuk sebagai: {{ auth()->user()->name }}
                    ({{ auth()->user()->role }})
                </span>

                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                    @csrf
                    <button type="submit" class="btn-logout">
                        Keluar
                    </button>
                </form>
            @endauth
        </nav>
    </header>

    <main>
        @if (session('success'))
            <p role="status">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>Sistem Informasi Surat</p>
    </footer>

</body>
</html>
