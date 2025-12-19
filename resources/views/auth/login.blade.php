<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Admin Login - Quality Outsource Solutions</title>
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
<body class="font-sans bg-gradient-to-br from-cream to-sage-green/20 min-h-screen flex items-center justify-center p-4">
    
    <!-- Login Container -->
    <div class="w-full max-w-md">
        <!-- Logo/Branding -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-earth-brown rounded-full mb-4">
                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h1 class="text-2xl font-serif font-bold text-earth-brown mb-2">
                Quality Outsource Solutions
            </h1>
            <p class="text-sage-green text-sm">
                Munyaka Farm Administration
            </p>
        </div>
        
        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-earth-brown to-deep-soil p-6 text-center">
                <h2 class="text-2xl font-serif font-bold text-white mb-1">
                    Farm Admin Login
                </h2>
                <p class="text-cream text-sm">
                    Access your dashboard to manage the farm
                </p>
            </div>
            
            <!-- Card Body -->
            <div class="p-8">
                <!-- Error Messages -->
                @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="text-red-800 font-medium text-sm">{{ $errors->first() }}</p>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-semibold text-deep-soil mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <input 
                                type="email" 
                                id="email"
                                name="email" 
                                value="{{ old('email') }}"
                                required 
                                autofocus
                                class="w-full pl-10 pr-4 py-3 border-2 border-sage-green/20 rounded-lg text-deep-soil focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors"
                                placeholder="admin@qos.co.ke"
                            >
                        </div>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-semibold text-deep-soil mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                id="password"
                                name="password" 
                                required
                                class="w-full pl-10 pr-4 py-3 border-2 border-sage-green/20 rounded-lg text-deep-soil focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors"
                                placeholder="••••••••"
                            >
                        </div>
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input 
                                type="checkbox" 
                                name="remember"
                                class="w-4 h-4 text-earth-brown border-sage-green/30 rounded focus:ring-earth-brown focus:ring-2"
                            >
                            <span class="ml-2 text-sm text-sage-green">Remember me</span>
                        </label>
                        
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-earth-brown hover:text-deep-soil font-medium transition-colors">
                            Forgot password?
                        </a>
                        @endif
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-earth-brown text-white font-semibold py-3 px-6 rounded-lg hover:bg-deep-soil transition-colors duration-200 flex items-center justify-center group"
                    >
                        Enter Dashboard
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <!-- Card Footer -->
            <div class="bg-gradient-to-r from-sage-green/10 to-cream p-6 text-center border-t border-sage-green/20">
                <p class="text-sm text-sage-green mb-2">
                    Having trouble accessing your account?
                </p>
                <a href="mailto:support@qos.co.ke" class="text-sm text-earth-brown hover:text-deep-soil font-medium transition-colors">
                    Contact Technical Support
                </a>
            </div>
        </div>
        
        <!-- Back to Website Link -->
        <div class="text-center mt-6">
            <a href="/" class="inline-flex items-center text-sage-green hover:text-earth-brown transition-colors text-sm font-medium">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Website
            </a>
        </div>
        
        <!-- Security Notice -->
        <div class="mt-8 text-center">
            <div class="inline-flex items-center text-xs text-sage-green bg-white/50 backdrop-blur-sm px-4 py-2 rounded-full">
                <svg class="w-4 h-4 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Secure Admin Access
            </div>
        </div>
    </div>
    
</body>
</html>