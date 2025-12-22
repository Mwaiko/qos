<nav class="bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-serif font-bold text-earth-brown">
                    Quality Outsource Solutions
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Home
                </a>
                <a href="/produce" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Our Produce
                </a>
                <a href="/baskets" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Wellness Baskets
                </a>
                <a href="/farm" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Our Farm
                </a>
                <a href="/learn" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    Learn
                </a>
                <a href="/about" class="text-deep-soil hover:text-earth-brown transition-colors duration-200 font-medium">
                    About Us
                </a>
                <a href="/cart" class="relative inline-flex items-center text-sage-green hover:text-earth-brown transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="cart-count ml-1 px-2 py-1 bg-earth-brown text-white text-xs rounded-full">0</span>
                </a>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="/produce" class="bg-earth-brown text-white px-6 py-2.5 rounded-md hover:bg-deep-soil transition-colors duration-200 font-medium">
                    Shop Now
                </a>
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
            <a href="/" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Home</a>
            <a href="/produce" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Our Produce</a>
            <a href="/baskets" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Wellness Baskets</a>
            <a href="/farm" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Our Farm</a>
            <a href="/learn" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">Learn</a>
            <a href="/about" class="block px-3 py-2 text-deep-soil hover:bg-sage-green/10 rounded-md">About Us</a>
            <a href="/produce" class="block px-3 py-2 bg-earth-brown text-white rounded-md text-center mt-4">Shop Now</a>
            <a href="/cart" class="block px-3 py-2 bg-earth-brown text-white rounded-md text-center mt-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="cart-count ml-1 px-2 py-1 bg-earth-brown text-white text-xs rounded-full">0</span>
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>