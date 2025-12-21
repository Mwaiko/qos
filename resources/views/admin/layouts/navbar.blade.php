<nav class="bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/admin/dashboard" class="text-2xl font-serif font-bold text-earth-brown">
                    Admin Panel
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="/admin/dashboard" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Dashboard
                </a>
                <a href="/admin/products" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Products
                </a>
                <a href="/admin/bundles" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Bundles
                </a>
                <a href="/admin/posts" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Posts
                </a>
                <a href="/admin/messages" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Contacts
                </a>
            </div>
            
            <!-- Right Side Actions -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="/" target="_blank" class="text-sage-green hover:text-earth-brown transition-colors duration-200 font-medium flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    View Site
                </a>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-earth-brown text-white px-6 py-2.5 rounded-md hover:bg-deep-soil transition-colors duration-200 font-medium">
                        Logout
                    </button>
                </form>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-deep-soil hover:text-earth-brown">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-sage-green/20">
        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="/admin/dashboard" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Dashboard</a>
            <a href="/admin/products" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Products</a>
            <a href="/admin/bundles" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Bundles</a>
            <a href="/admin/posts" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Posts</a>
            <a href="/admin/contacts" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Contacts</a>
            <a href="/" target="_blank" class="block px-3 py-2 text-sage-green hover:bg-sage-green/10 rounded-md">View Site</a>
            <form action="/logout" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="block w-full px-3 py-2 bg-earth-brown text-white rounded-md text-center">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>