<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - WebWhizz Services</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        lime: {
                            400: '#a3e635',
                            500: '#84cc16',
                            brand: '#bef264', // Matches index.php lime
                        },
                        dark: {
                            card: '#1c1c1c',
                            bg: '#121212',
                            surface: '#2A2A2A'
                        }
                    },
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">

    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="pt-32 pb-20 px-4 md:px-8 max-w-7xl mx-auto text-center">
        <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
            What We Do
        </span>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-[1.1]">
            Comprehensive Digital <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">Solutions.</span>
        </h1>
        <p class="text-gray-500 text-lg leading-relaxed max-w-2xl mx-auto">
            From pixels to code, strategy to execution. We provide end-to-end services to help your brand thrive in the digital landscape.
        </p>
    </section>

    <!-- SERVICES GRID -->
    <section class="px-4 md:px-8 pb-32 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- 1. Graphic Design -->
            <a href="graphic-designing.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="pen-tool" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Graphic Design</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Visual identities that command attention. Logos, branding kits, and marketing collateral designed to make your brand unforgettable.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 2. Web & Mobile Design -->
            <a href="web-and-mobile-design.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="layout" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Web & Mobile Design</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Stunning, user-centric interfaces. We design websites and mobile apps that look beautiful and convert visitors into customers.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 3. Mobile App Development -->
            <a href="mobile-app-development.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="smartphone" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Mobile App Development</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Native and hybrid apps built for performance. We engineer scalable mobile solutions for iOS and Android platforms.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 4. E-commerce Design -->
            <a href="e-commerce-design.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="shopping-bag" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">E-commerce Design</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    High-converting online stores. Custom Shopify and WooCommerce solutions designed to maximize your sales revenue.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 5. Social Media Setup -->
            <a href="social-media-account-setup-and-optimization.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="settings" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Account Setup</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Professional profile optimization. We set up your social accounts with SEO bios, highlights, and cohesive branding.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 6. Content Creation -->
            <a href="content-creation-and-curation.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="video" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Content Creation</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Scroll-stopping visuals and copy. We produce reels, graphics, and captions that engage your audience and tell your story.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 7. Social Management -->
            <a href="social-media-management.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="calendar" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Social Management</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Put your growth on autopilot. We handle scheduling, posting, strategy, and analytics so you can focus on business.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 8. Community Management -->
            <a href="community-management.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="message-circle" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Community Mgmt</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Turn followers into fans. We actively engage with your audience, reply to comments, and manage DMs to build loyalty.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

            <!-- 9. Influencer Marketing -->
            <a href="influencer-marketing.php" class="group bg-gray-50 border border-gray-100 p-8 rounded-3xl hover:border-lime-brand/50 hover:shadow-xl hover:shadow-lime-100/50 transition-all duration-300 flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform text-lime-600">
                    <i data-lucide="users" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-lime-600 transition-colors">Influencer Marketing</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                    Authentic partnerships that scale. We connect your brand with vetted creators to reach new audiences and drive ROI.
                </p>
                <div class="flex items-center gap-2 text-sm font-bold text-gray-900 group-hover:translate-x-2 transition-transform">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 text-lime-600"></i>
                </div>
            </a>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 md:px-8 max-w-7xl mx-auto pb-10">
        <div class="relative rounded-4xl overflow-hidden h-[400px]">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/70 flex flex-col items-center justify-center text-center text-white p-6">
                <span class="border border-white/30 rounded-full px-4 py-1.5 text-xs uppercase tracking-wider mb-6">Let's Start</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Ready to Transform?</h2>
                <p class="text-gray-300 max-w-lg text-sm mb-8">
                    Your next big leap starts here. Let's build something extraordinary together.
                </p>
                <a href="contact-us.php" class="bg-lime-brand text-black px-8 py-3 rounded-full font-bold hover:scale-105 transition-transform">
                    Book a Consultation
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>