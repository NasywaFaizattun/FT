<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact - Kn.Ford Developer Portfolio</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                @import 'tailwindcss';
            </style>
        @endif
    </head>
    <body class="bg-white">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200 px-6 lg:px-12 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="text-2xl font-black text-gray-900">FOURDA X TRIWARA</div>
                <div class="hidden lg:flex items-center gap-12 text-sm font-medium text-gray-700">
                    <a href="/" class="hover:text-blue-600 transition">Home</a>
                    <a href="/about" class="hover:text-blue-600 transition">About</a>
                    <a href="/#services" class="hover:text-blue-600 transition">Services</a>
                    <a href="/#portfolio" class="hover:text-blue-600 transition">Portfolio</a>
                    <a href="/blog" class="hover:text-blue-600 transition">Blog</a>
                    <a href="/contact" class="text-blue-600 font-semibold transition">Contact</a>
                </div>
                <a href="/contact" class="hidden md:block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium text-sm transition">
                    Get Started
                </a>
            </div>
        </nav>

        <!-- Contact Section -->
        <section class="py-20 px-6 lg:px-12">
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <div class="mb-16">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-4">Contact us</h1>
                    <p class="text-xl text-gray-600">We're open for any suggestion or just to have a chat</p>
                </div>

                <!-- Main Contact Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
                    <!-- Maps Section -->
                    <div class="rounded-2xl overflow-hidden shadow-lg h-96 lg:h-full min-h-96">
                        <iframe 
                            class="w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1234567890!2d-74.0060!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316bb945e1%3A0x921f15fbf57b1d9!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1234567890"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Contact Form & Info Section -->
                    <div>
                        <!-- Contact Information -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12">
                            <!-- Address -->
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-sm font-semibold text-gray-900 mb-2 uppercase tracking-wide">My Address:</h3>
                                <p class="text-gray-600 text-sm">198 West 21th Street, Suite 721</p>
                                <p class="text-gray-600 text-sm">New York NY 10016</p>
                            </div>

                            <!-- Email -->
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-sm font-semibold text-gray-900 mb-2 uppercase tracking-wide">My Email:</h3>
                                <a href="mailto:info@yoursite.com" class="text-blue-600 hover:text-blue-700 font-medium">info@yoursite.com</a>
                            </div>

                            <!-- Phone -->
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-sm font-semibold text-gray-900 mb-2 uppercase tracking-wide">My Phone:</h3>
                                <a href="tel:+1234567890" class="text-blue-600 hover:text-blue-700 font-medium">+ 1235 2355 98</a>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <form class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <input 
                                    type="text" 
                                    placeholder="Name" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-50 transition text-gray-900 placeholder-gray-400"
                                    required>
                                <input 
                                    type="email" 
                                    placeholder="Email" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-50 transition text-gray-900 placeholder-gray-400"
                                    required>
                            </div>

                            <input 
                                type="text" 
                                placeholder="Subject" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-50 transition text-gray-900 placeholder-gray-400"
                                required>

                            <textarea 
                                placeholder="Create a message here" 
                                rows="6"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-50 transition text-gray-900 placeholder-gray-400 resize-none"
                                required></textarea>

                            <button 
                                type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-lg transition duration-300 transform hover:scale-105 active:scale-95 shadow-md">
                                SEND MESSAGE
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Social Media Section -->
                <div class="text-center py-12 border-t border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Follow me here</h2>
                    <div class="flex justify-center gap-6">
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-bold text-lg transition hover:scale-110 inline-block">
                            FACEBOOK
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-bold text-lg transition hover:scale-110 inline-block">
                            TWITTER
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-bold text-lg transition hover:scale-110 inline-block">
                            INSTAGRAM
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-bold text-lg transition hover:scale-110 inline-block">
                            DRIBBBLE
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-400 py-16 px-6 lg:px-12 mt-20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-white font-bold text-lg mb-4">FOURDA</h3>
                    <p class="text-sm">Building beautiful digital experiences</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/about" class="hover:text-white transition">About</a></li>
                        <li><a href="/blog" class="hover:text-white transition">Blog</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition">Consulting</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Follow</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Facebook</a></li>
                        <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                        <li><a href="#" class="hover:text-white transition">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-sm">
                <p>&copy; 2024 FOURDA X TRIWARA. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
