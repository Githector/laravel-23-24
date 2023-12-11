<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>InstaCirvi - @yield('title')</title>
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">
            InstaCirvi
        </h1>

        <nav class="flex gap-2">
            <a class="font-bold uppercase text-gray-600" href="">Login</a>
            <a class="font-bold uppercase text-gray-600 " href="{{ route('register') }}">Register</a>
        </nav>
    </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
        @yield('content')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
        InstaCirvi - All rights reserved &copy;
        @php echo date('Y') @endphp

    </footer>
    
    
</body>
</html>