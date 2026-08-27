<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIT Registration</title>
    <!-- Tailwind CSS for rapid styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* iOS-style Font Stack */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #F2F2F7; /* iOS system background color */
            -webkit-font-smoothing: antialiased;
        }
        
        /* iOS-style input focus */
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #007AFF;
            box-shadow: 0 0 0 3px rgba(0, 122, 255, 0.2);
        }
    </style>
</head>
<body class="text-gray-900 pb-12">

    <!-- Include Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Area -->
    <main class="max-w-4xl mx-auto pt-24 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

</body>
</html>