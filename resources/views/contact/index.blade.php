<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Quality Outsource Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'deep-soil': '#4D4268',
                        'earth-brown': '#746F49',
                        'sage-green': '#383311',
                        'cream': '#EDEBDC',
                        'london-shadow': '#948E64',
                        'alternative': '#9C9770'
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                        'sans': ['system-ui', '-apple-system', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-cream to-sage-green/10 min-h-screen py-12 px-4">

    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                Get in Touch
            </h1>
            <p class="text-xl text-sage-green">
                We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-2xl p-8 md:p-12">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                
                <div class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-deep-soil mb-2">
                            Full Name <span class="text-earth-brown">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            placeholder="Jane Doe" 
                            required
                            class="w-full px-4 py-3 bg-white border-2 border-sage-green/30 rounded-md text-deep-soil placeholder-sage-green/50 focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors duration-200"
                        >
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-deep-soil mb-2">
                            Email Address <span class="text-earth-brown">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            name="email" 
                            placeholder="jane@example.com" 
                            required
                            class="w-full px-4 py-3 bg-white border-2 border-sage-green/30 rounded-md text-deep-soil placeholder-sage-green/50 focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors duration-200"
                        >
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-deep-soil mb-2">
                            Phone Number
                        </label>
                        <input 
                            type="text" 
                            id="phone"
                            name="phone" 
                            placeholder="+254 700 000 000"
                            class="w-full px-4 py-3 bg-white border-2 border-sage-green/30 rounded-md text-deep-soil placeholder-sage-green/50 focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors duration-200"
                        >
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-deep-soil mb-2">
                            Your Message <span class="text-earth-brown">*</span>
                        </label>
                        <textarea 
                            id="message"
                            name="message" 
                            placeholder="Tell us how we can help you..." 
                            required
                            rows="6"
                            class="w-full px-4 py-3 bg-white border-2 border-sage-green/30 rounded-md text-deep-soil placeholder-sage-green/50 focus:outline-none focus:border-earth-brown focus:ring-2 focus:ring-earth-brown/20 transition-colors duration-200 resize-none"
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full inline-flex items-center justify-center px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil focus:outline-none focus:ring-4 focus:ring-earth-brown/30 transition-all duration-200 font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Send Message
                        </button>
                    </div>

                    <!-- Helper Text -->
                    <p class="text-sm text-sage-green text-center pt-2">
                        We'll get back to you within 24 hours. Fields marked with <span class="text-earth-brown font-semibold">*</span> are required.
                    </p>
                </div>
            </form>
        </div>

        <!-- Additional Contact Info -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <svg class="w-8 h-8 text-earth-brown mx-auto mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <h3 class="font-semibold text-deep-soil mb-1">Visit Us</h3>
                <p class="text-sm text-sage-green">Gilgil-Nyahururu Highway<br>Gilgil, Kenya</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <svg class="w-8 h-8 text-earth-brown mx-auto mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                <h3 class="font-semibold text-deep-soil mb-1">Call Us</h3>
                <p class="text-sm text-sage-green">Mon - Sat: 8AM - 5PM<br>Contact for details</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <svg class="w-8 h-8 text-earth-brown mx-auto mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                <h3 class="font-semibold text-deep-soil mb-1">Email Us</h3>
                <p class="text-sm text-sage-green">Quick response time<br>info@qualityoutsource.com</p>
            </div>
        </div>
    </div>

</body>
</html>