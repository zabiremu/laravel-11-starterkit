<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Starter Kit - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('backend') }}/assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/Chart.min.css" />
    <script src="{{ asset('backend') }}/assets/js/Chart.min.js" defer></script>
    <script src="{{ asset('backend') }}/assets/js/charts-lines.js" defer></script>
    <script src="{{ asset('backend') }}/assets/js/charts-pie.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('admin.partials.sidebar')
        <!-- Mobile sidebar -->
        @include('admin.partials.mobileSidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('admin.partials.header')
            <main class="h-full overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>

</html>
