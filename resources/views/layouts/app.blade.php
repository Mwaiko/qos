<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quality Outsource Solutions - Organic Farm Produce')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'earth-brown': '#746F49',
                        'deep-soil': '#383311',
                        'sage-green': '#948E64',
                        'cream': '#EDEBD C',
                        'heritage-purple': '#4D4268',
                        'warm-tan': '#9C9770'
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                        'sans': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body class="font-sans text-deep-soil bg-white">
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
    
    @stack('scripts')
</body>
</html>