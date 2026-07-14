<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FOURDA X TRIWARA Portfolio</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                @import 'tailwindcss';
            </style>
        @endif
        <style>
            .animate-float {
                animation: float 3s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            .spotlight {
                background: radial-gradient(circle at 30% 30%, rgba(59, 130, 246, 0.15) 0%, transparent 50%);
            }
        </style>
    </head>
    <body class="bg-white">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200 px-6 lg:px-12 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="text-2xl font-black text-gray-900">FOURDA X TRIWARA </div>
                <div class="hidden lg:flex items-center gap-12 text-sm font-medium text-gray-700">
                    <a href="/" class="hover:text-blue-600 transition">Home</a>
                    <a href="/about" class="hover:text-blue-600 transition">About</a>
                    <a href="/#services" class="hover:text-blue-600 transition">Services</a>
                    <a href="/#portfolio" class="hover:text-blue-600 transition">Portfolio</a>
                    <a href="/blog" class="hover:text-blue-600 transition">Blog</a>
                    <a href="/contact" class="hover:text-blue-600 transition">Contact</a>
                </div>
                <a href="/contact" class="hidden md:block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium text-sm transition">
                    Get Started
                </a>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center pt-20 pb-20 px-6 lg:px-12 overflow-hidden spotlight">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 2s"></div>

            <div class="relative z-10 max-w-5xl mx-auto text-center space-y-8">
                <div class="inline-block">
                    <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">Welcome to My Portfolio</span>
                </div>

                <div class="space-y-4">
                    <h1 class="text-6xl lg:text-7xl font-black text-gray-900 leading-tight">
                        Crafting Digital<br>
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Experiences</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        I'm a fullstack developer creating stunning websites and applications that solve real-world problems with clean, efficient code.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8">
                    <a href="/contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition shadow-lg hover:shadow-xl transform hover:scale-105">
                        Start a Project
                    </a>
                    <a href="/#portfolio" class="bg-gray-200 hover:bg-gray-300 text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg transition">
                        View My Work
                    </a>
                </div>

                <div class="flex justify-center gap-4 pt-12">
                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                        <span class="text-lg">f</span>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                        <span class="text-lg">𝕏</span>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                        <span class="text-lg">in</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 px-6 lg:px-12 bg-gradient-to-b from-gray-50 to-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-black text-gray-900 mb-4">Services I Offer</h2>
                    <p class="text-xl text-gray-600">Comprehensive solutions for your digital needs</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-white p-8 rounded-xl border border-gray-200 hover:border-blue-500 hover:shadow-lg transition">
                        <div class="text-4xl mb-4">💻</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Web Development</h3>
                        <p class="text-gray-600 leading-relaxed">Building responsive, fast, and scalable web applications using modern frameworks and best practices.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-8 rounded-xl border border-gray-200 hover:border-purple-500 hover:shadow-lg transition">
                        <div class="text-4xl mb-4">🎨</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">UI/UX Design</h3>
                        <p class="text-gray-600 leading-relaxed">Creating beautiful and intuitive user interfaces that engage users and drive conversions.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-8 rounded-xl border border-gray-200 hover:border-pink-500 hover:shadow-lg transition">
                        <div class="text-4xl mb-4">⚙️</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Consulting</h3>
                        <p class="text-gray-600 leading-relaxed">Expert guidance on technology stack, architecture, and best practices for your project.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="py-20 px-6 lg:px-12 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-black text-gray-900 mb-4">Featured Projects</h2>
                    <p class="text-xl text-gray-600">A selection of my recent work</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="group bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-blue-500 hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 group-hover:scale-110 transition duration-300"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">E-Commerce Platform</h3>
                            <p class="text-gray-600 mb-4">Full-stack e-commerce solution with payment integration and inventory management.</p>
                            <div class="flex gap-2">
                                <span class="text-xs bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-medium">React</span>
                                <span class="text-xs bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-medium">Laravel</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-purple-500 hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 group-hover:scale-110 transition duration-300"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Analytics Dashboard</h3>
                            <p class="text-gray-600 mb-4">Real-time analytics dashboard with interactive charts and data visualization.</p>
                            <div class="flex gap-2">
                                <span class="text-xs bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-medium">Vue.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-medium">Node.js</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="group bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-pink-500 hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-pink-400 to-pink-600 group-hover:scale-110 transition duration-300"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">SaaS Application</h3>
                            <p class="text-gray-600 mb-4">Scalable SaaS platform with user authentication and subscription management.</p>
                            <div class="flex gap-2">
                                <span class="text-xs bg-pink-100 text-pink-700 px-3 py-1 rounded-full font-medium">Next.js</span>
                                <span class="text-xs bg-pink-100 text-pink-700 px-3 py-1 rounded-full font-medium">PostgreSQL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/#portfolio" class="text-blue-600 hover:text-blue-700 font-bold text-lg inline-block">
                        View All Projects →
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-20 px-6 lg:px-12 bg-gradient-to-r from-gray-900 to-gray-800 text-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-5xl font-black mb-2">50+</div>
                        <p class="text-gray-300">Projects Completed</p>
                    </div>
                    <div>
                        <div class="text-5xl font-black mb-2">30+</div>
                        <p class="text-gray-300">Happy Clients</p>
                    </div>
                    <div>
                        <div class="text-5xl font-black mb-2">5+</div>
                        <p class="text-gray-300">Years Experience</p>
                    </div>
                    <div>
                        <div class="text-5xl font-black mb-2">100%</div>
                        <p class="text-gray-300">Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="py-20 px-6 lg:px-12 bg-gradient-to-b from-white to-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-black text-gray-900 mb-4">Technical Skills</h2>
                    <p class="text-xl text-gray-600">Technologies I work with</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-lg transition">
                        <h3 class="font-bold text-gray-900 mb-4">Frontend</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>✓ React.js</li>
                            <li>✓ Vue.js</li>
                            <li>✓ Tailwind CSS</li>
                            <li>✓ JavaScript</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-lg transition">
                        <h3 class="font-bold text-gray-900 mb-4">Backend</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>✓ Laravel/PHP</li>
                            <li>✓ Node.js</li>
                            <li>✓ Python</li>
                            <li>✓ REST APIs</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-lg transition">
                        <h3 class="font-bold text-gray-900 mb-4">Database</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>✓ MySQL</li>
                            <li>✓ PostgreSQL</li>
                            <li>✓ MongoDB</li>
                            <li>✓ Redis</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg border border-gray-200 hover:border-blue-500 hover:shadow-lg transition">
                        <h3 class="font-bold text-gray-900 mb-4">Tools</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>✓ Git/GitHub</li>
                            <li>✓ Docker</li>
                            <li>✓ AWS</li>
                            <li>✓ Linux</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 px-6 lg:px-12 bg-blue-600 text-white">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <h2 class="text-5xl font-black leading-tight">Let's Work Together</h2>
                <p class="text-xl text-blue-100">Ready to bring your ideas to life? Let's create something amazing.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-white hover:bg-gray-100 text-blue-600 px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg">
                        Start Your Project
                    </a>
                    <a href="/blog" class="border-2 border-white hover:bg-white hover:text-blue-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition">
                        Read Articles
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-400 py-12 px-6 lg:px-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h3 class="text-white font-bold mb-4">Kn.Ford</h3>
                        <p class="text-sm">Building digital experiences that matter.</p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/" class="hover:text-white">Home</a></li>
                            <li><a href="/about" class="hover:text-white">About</a></li>
                            <li><a href="/blog" class="hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Services</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/#services" class="hover:text-white">Web Development</a></li>
                            <li><a href="/#services" class="hover:text-white">UI/UX Design</a></li>
                            <li><a href="/#services" class="hover:text-white">Consulting</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Contact</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/contact" class="hover:text-white">Get in Touch</a></li>
                            <li><a href="mailto:contact@example.com" class="hover:text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center">
                    <p>&copy; 2024 Kn.Ford. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
