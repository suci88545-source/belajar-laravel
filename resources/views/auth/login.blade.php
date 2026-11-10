<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

    <div class="min-h-screen flex items-center justify-center
                bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-900 p-5">

        <div class="w-full max-w-md bg-white rounded-2xl
                    shadow-2xl overflow-hidden">

            <!-- Header -->
            <div class="bg-blue-700 text-white text-center px-8 py-8">

                <div class="text-5xl mb-3">
                    📩
                </div>

                <h1 class="text-2xl font-bold">
                    SIM-Surat
                </h1>

                <p class="text-blue-100 text-sm mt-2">
                    Sistem Informasi Surat
                </p>

            </div>

            <!-- Form Login -->
            <div class="p-8">

                <h2 class="text-2xl font-bold text-slate-800 mb-2">
                    Selamat Datang!
                </h2>

                <p class="text-slate-500 text-sm mb-7">
                    Silakan masuk menggunakan akun Anda.
                </p>

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-5">

                        <label for="email"
                               class="block text-sm font-semibold text-slate-700 mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email Anda"
                            required
                            class="w-full px-4 py-3 border border-slate-300
                                   rounded-lg outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500"
                        >

                        @error('email')
                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <!-- Password -->
                    <div class="mb-6">

                        <label for="password"
                               class="block text-sm font-semibold text-slate-700 mb-2">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password Anda"
                            required
                            class="w-full px-4 py-3 border border-slate-300
                                   rounded-lg outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500"
                        >

                        @error('password')
                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Tombol -->
                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700
                               text-white font-semibold py-3 rounded-lg
                               shadow-md transition duration-200">
                        Masuk
                    </button>
                </form>
                <p class="text-center text-xs text-slate-400 mt-7">
                    Sistem Informasi Surat
                </p>
            </div>
        </div>
    </div>
</body>
</html>