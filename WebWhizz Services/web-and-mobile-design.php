<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web & Mobile Design - Skyline Digital Agency</title>
    
    <!-- Fonts: Plus Jakarta Sans -->
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
                            brand: '#bef264', // The specific lime green
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
</head>
<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="pt-10 pb-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
            
            <!-- Text Content (Left) -->
            <div class="md:col-span-7">
                <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
                    Web & Mobile Design
                </span>
                <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] mb-6">
                    Digital Experiences Designed to <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">Convert.</span>
                </h1>
                <p class="text-gray-500 text-lg leading-relaxed max-w-xl mb-8">
                    We don’t just design websites and apps; we engineer intuitive user journeys. We merge stunning visuals with seamless functionality to keep your users engaged and driving revenue.
                </p>
                <div class="flex gap-4">
                    <button class="bg-lime-brand text-black px-8 py-3 rounded-full font-bold hover:scale-105 transition-transform flex items-center gap-2">
                        Start Project <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <!-- Hero Image (Right) -->
            <div class="md:col-span-5 relative">
                <div class="w-full h-[500px] rounded-4xl overflow-hidden relative shadow-2xl">
                    <!-- Image: UI Design / Mobile App Interface -->
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="UI UX Design" class="w-full h-full object-cover">
                    
                    <!-- Decorative Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl max-w-[200px] hidden md:block">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <p class="text-xs font-bold text-gray-400">UX Status</p>
                        <p class="font-bold text-lg">User Centric</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THE PROBLEM & SOLUTION SECTION -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto bg-gray-50 rounded-4xl my-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Left: The Problem -->
            <div class="relative">
                <div class="rounded-4xl overflow-hidden h-[400px] w-full border border-gray-200 bg-white p-8 relative">
                    <!-- Visualizing "The Problem" -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center w-full px-8">
                         <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i data-lucide="mouse-pointer-click" class="w-10 h-10 text-gray-400"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-gray-300 mb-2">Lost in Navigation?</h3>
                         <p class="text-gray-400 text-sm">"Users leave in 3 seconds if they can't figure it out."</p>
                    </div>
                </div>
            </div>

            <!-- Right: The Solution -->
            <div>
                <div class="mb-10">
                    <span class="text-red-500 font-bold tracking-widest uppercase text-xs mb-2 block">The Problem</span>
                    <h3 class="text-2xl font-bold mb-3">Are you losing customers in the first 3 seconds?</h3>
                    <p class="text-gray-500 leading-relaxed text-base">
                        Users have zero patience for confusing layouts, slow interfaces, or ugly designs. If your website or app is difficult to navigate, your potential customers aren't just leaving—they are running straight to your competitors.
                    </p>
                </div>
                
                <div class="pl-6 border-l-4 border-lime-brand">
                    <span class="text-lime-600 font-bold tracking-widest uppercase text-xs mb-2 block">The Solution</span>
                    <h2 class="text-2xl font-bold mb-3">Interfaces that guide, not confuse.</h2>
                    <p class="text-gray-800 leading-relaxed text-base font-medium">
                        We design user-centric interfaces rooted in behavioral psychology. By prioritizing "Mobile-First" design and clear navigation paths, we ensure that every click brings your user one step closer to a purchase or signup.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DELIVER (Dark Cards Section) -->
    <section class="px-4 md:px-8 max-w-7xl mx-auto mb-20">
        <div class="bg-dark-card rounded-4xl p-8 md:p-16 text-white">
            <div class="flex flex-col md:flex-row justify-between items-start mb-16">
                <div>
                    <span class="border border-gray-600 rounded-full px-3 py-1 text-xs uppercase tracking-wider text-gray-300">Deliverables</span>
                    <h2 class="text-3xl md:text-5xl font-bold mt-6 max-w-lg">What We Deliver</h2>
                </div>
                <p class="text-gray-400 max-w-xs mt-8 md:mt-0 text-sm leading-relaxed">
                    A complete design process from research to pixel-perfect prototyping.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Card 1: UX Research (Lime Highlight) -->
                <div class="bg-lime-brand p-8 rounded-3xl text-black cursor-pointer group hover:scale-[1.02] transition-transform relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black opacity-10">01</div>
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-8 shadow-sm relative z-10">
                        <i data-lucide="search-check" class="text-black w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">UX Research & Wireframing</h3>
                    <p class="text-sm font-medium leading-relaxed relative z-10">
                        The blueprint of success. We map out user flows, create low-fidelity wireframes, and conduct competitor analysis to ensure the structure of your product is logical.
                    </p>
                </div>

                <!-- Card 2: UI Design (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">02</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="palette" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">High-Fidelity UI Design</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        Where brand meets interface. We create pixel-perfect, modern mockups including typography systems, iconography, and color schemes that align perfectly with your brand.
                    </p>
                </div>

                <!-- Card 3: Prototyping (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                     <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">03</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="smartphone-nfc" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Interactive Prototyping</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        Don't guess—test. We deliver clickable prototypes that simulate the real app or website experience, allowing you to test flows before development begins.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
                Portfolio
            </span>
            <h2 class="text-4xl font-bold">Selected Works</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Recent interfaces we've crafted for web and mobile.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Fintech Dashboard</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Web App UI</p>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Health Track Mobile</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">iOS App Design</p>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1955&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">E-Commerce Redesign</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Website UX</p>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">SaaS Analytics</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Platform Design</p>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="mt-16 text-center">
            <button class="border border-gray-300 px-10 py-4 rounded-full font-bold hover:bg-black hover:text-white transition-colors flex items-center gap-2 mx-auto">
                View All Works <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
        </div>
    </section>

    <!-- WHY TRUST US (Correctly placed ABOVE Reviews) -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="flex flex-col justify-center">
                <span class="inline-block w-fit border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6">Why Trust Us</span>
                <h2 class="text-4xl font-bold mb-6">Mobile-First.<br>Developer-Ready.</h2>
                <p class="text-gray-500 text-lg leading-relaxed mb-8">
                    We bridge the gap between stunning design and technical feasibility.
                </p>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="smartphone" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Mobile-First Approach</span>
                            <span class="text-sm text-gray-500">We design for the smallest screen first, ensuring your product looks flawless on all devices.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="code-2" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Developer-Ready Handoff</span>
                            <span class="text-sm text-gray-500">We provide organized systems and assets to speed up your developer's coding process.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="accessibility" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Accessibility Focus</span>
                            <span class="text-sm text-gray-500">We design with inclusivity in mind, ensuring contrast ratios and layouts meet modern web standards.</span>
                        </div>
                    </div>
                     <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="trending-up" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Conversion Optimization</span>
                            <span class="text-sm text-gray-500">Every button placement and layout choice is intentional to maximize user action.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visual Feature -->
            <div class="bg-dark-card rounded-4xl p-8 relative overflow-hidden min-h-[500px] flex items-center justify-center">
                <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-lime-500 via-transparent to-transparent"></div>
                <div class="relative z-10 text-center">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl text-white transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <i data-lucide="layers" class="w-16 h-16 text-lime-brand mx-auto mb-4"></i>
                        <h3 class="text-2xl font-bold">Pixel Perfect</h3>
                        <p class="text-gray-400 text-sm mt-2">Ready for Development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENT REVIEWS SECTION -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto bg-gray-50 rounded-4xl my-10">
        <div class="text-center mb-16">
            <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
                Reviews
            </span>
            <h2 class="text-4xl font-bold">Client Feedback</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Don't just take our word for it. Hear from brands we've transformed.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Review 1 -->
            <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4 mb-6">
                    <img src="https://i.pravatar.cc/100?img=11" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">James Carter</h4>
                        <p class="text-xs text-gray-500">CEO, StreamLine</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"The UI overhaul was exactly what we needed. Our user retention increased by 25% within the first month of launching the new design."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: SaaS Dashboard</span>
                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4 mb-6">
                    <img src="https://i.pravatar.cc/100?img=41" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">Emily Wong</h4>
                        <p class="text-xs text-gray-500">Product Manager</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"Their mobile-first approach saved us so much time in development. The handoff files were organized perfectly for our engineering team."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: Mobile App</span>
                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
            <!-- FAQ Header -->
            <div class="md:col-span-4">
                <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">FAQ</span>
                <h2 class="text-4xl font-bold mb-4">Common Questions</h2>
                <p class="text-gray-500 text-sm leading-relaxed">Everything you need to know about our UX/UI design process.</p>
            </div>
            
            <!-- FAQ Items -->
            <div class="md:col-span-8 space-y-4">
                <!-- Q1 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">What is the difference between UI and UX?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        UX (User Experience) is the science—how the product works and how users feel navigating it. UI (User Interface) is the art—how the product looks (colors, fonts, buttons). We handle both to ensure your product is both beautiful and functional.
                    </p>
                </details>

                <!-- Q2 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">Do you do the coding/development as well?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        This service focuses specifically on the design phase (creating the visual look and feel). However, we do offer App Development as a separate service, and we can easily bundle these together for a full-service build!
                    </p>
                </details>

                <!-- Q3 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">What tools do you use?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        We use industry-standard tools like Figma and Adobe XD. This allows for real-time collaboration, meaning you can leave comments directly on the designs as we work.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 md:px-8 max-w-7xl mx-auto pb-10">
        <div class="relative rounded-4xl overflow-hidden h-[400px]">
            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/70 flex flex-col items-center justify-center text-center text-white p-6">
                <span class="border border-white/30 rounded-full px-4 py-1.5 text-xs uppercase tracking-wider mb-6">Let's Create</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Ready to Upgrade?</h2>
                <p class="text-gray-300 max-w-lg text-sm mb-8">
                    Your users are waiting. Let's build an experience they'll love.
                </p>
                <button class="bg-lime-brand text-black px-8 py-3 rounded-full font-bold hover:scale-105 transition-transform">
                    Book a Consultation
                </button>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>