<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development - Skyline Digital Agency</title>
    
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
                    Mobile App Development
                </span>
                <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] mb-6">
                    Turn Your Idea into a <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">High-Performance App.</span>
                </h1>
                <p class="text-gray-500 text-lg leading-relaxed max-w-xl mb-8">
                    We build scalable, secure, and user-friendly mobile applications for iOS and Android. From concept to launch, we engineer digital products that your users will love.
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
                    <!-- Image: Mobile App / Coding / Smartphone -->
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop" alt="Mobile App Development" class="w-full h-full object-cover">
                    
                    <!-- Decorative Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl max-w-[200px] hidden md:block">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <p class="text-xs font-bold text-gray-400">Code Quality</p>
                        <p class="font-bold text-lg">Bug-Free 99.9%</p>
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
                            <i data-lucide="alert-triangle" class="w-10 h-10 text-gray-400"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-gray-300 mb-2">App Crashing?</h3>
                         <p class="text-gray-400 text-sm">"Unstable apps get deleted instantly."</p>
                    </div>
                </div>
            </div>

            <!-- Right: The Solution -->
            <div>
                <div class="mb-10">
                    <span class="text-red-500 font-bold tracking-widest uppercase text-xs mb-2 block">The Problem</span>
                    <h3 class="text-2xl font-bold mb-3">Will your app crash when you scale?</h3>
                    <p class="text-gray-500 leading-relaxed text-base">
                        There is nothing worse than launching an app that bugs out, crashes, or loads slowly. Users delete unstable apps immediately. Poor code structure and outdated technology can turn your investment into a technical debt nightmare.
                    </p>
                </div>
                
                <div class="pl-6 border-l-4 border-lime-brand">
                    <span class="text-lime-600 font-bold tracking-widest uppercase text-xs mb-2 block">The Solution</span>
                    <h2 class="text-2xl font-bold mb-3">Robust architecture, flawless execution.</h2>
                    <p class="text-gray-800 leading-relaxed text-base font-medium">
                        We don't just write code; we engineer solutions. We use modern tech stacks and clean coding practices to ensure your app is stable, secure, and ready to handle thousands of users without breaking a sweat.
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
                    End-to-end development services from codebase to app store submission.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Card 1: Native/Hybrid (Lime Highlight) -->
                <div class="bg-lime-brand p-8 rounded-3xl text-black cursor-pointer group hover:scale-[1.02] transition-transform relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black opacity-10">01</div>
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-8 shadow-sm relative z-10">
                        <i data-lucide="smartphone" class="text-black w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Native & Hybrid Dev</h3>
                    <p class="text-sm font-medium leading-relaxed relative z-10">
                        Whether you need the raw performance of Native (Swift/Kotlin) or the cross-platform efficiency of Hybrid (Flutter), we build apps that feel smooth on every device.
                    </p>
                </div>

                <!-- Card 2: Backend (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">02</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="server" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Backend & API Integration</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        A pretty interface needs a powerful brain. We build secure servers, databases, and APIs that manage your user data and payment gateways seamlessly.
                    </p>
                </div>

                <!-- Card 3: QA & Deployment (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                     <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">03</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="check-circle" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">QA Testing & Deployment</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        We break it so users don't. Our rigorous QA process tests for bugs across multiple devices. We handle the entire submission to the App Store and Play Store.
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
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Powerful apps we've engineered and launched.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1618477388954-7852f32655ec?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">FinTrack</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Finance App (Flutter)</p>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">RideShare Pro</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Transportation App (Native iOS)</p>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">HealthMate</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Fitness Tracking (React Native)</p>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1592210454359-9043f067919b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">E-Shop Mobile</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">E-commerce App</p>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="mt-16 text-center">
            <button class="border border-gray-300 px-10 py-4 rounded-full font-bold hover:bg-black hover:text-white transition-colors flex items-center gap-2 mx-auto">
                View All Case Studies <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
        </div>
    </section>

    <!-- WHY TRUST US (Correctly placed ABOVE Reviews) -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="flex flex-col justify-center">
                <span class="inline-block w-fit border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6">Why Trust Us</span>
                <h2 class="text-4xl font-bold mb-6">Scalable.<br>Secure.</h2>
                <p class="text-gray-500 text-lg leading-relaxed mb-8">
                    We write code that is built to last and ready to scale.
                </p>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="trending-up" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Scalability First</span>
                            <span class="text-sm text-gray-500">We design the architecture to grow. Whether 100 users or 1 million, it performs.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="lock" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Security Standard</span>
                            <span class="text-sm text-gray-500">We implement industry-standard encryption (OAuth, JWT) to keep user data safe.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="refresh-cw" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Agile Methodology</span>
                            <span class="text-sm text-gray-500">We work in sprints. You get regular updates and demo builds to see progress.</span>
                        </div>
                    </div>
                     <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="life-buoy" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Post-Launch Support</span>
                            <span class="text-sm text-gray-500">We offer 30-day bug support to ensure a smooth entry into the market.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visual Feature -->
            <div class="bg-dark-card rounded-4xl p-8 relative overflow-hidden min-h-[500px] flex items-center justify-center">
                <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-lime-500 via-transparent to-transparent"></div>
                <div class="relative z-10 text-center">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl text-white transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <i data-lucide="shield-check" class="w-16 h-16 text-lime-brand mx-auto mb-4"></i>
                        <h3 class="text-2xl font-bold">Secure Core</h3>
                        <p class="text-gray-400 text-sm mt-2">Enterprise Grade</p>
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
                    <img src="https://i.pravatar.cc/100?img=33" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">David Chen</h4>
                        <p class="text-xs text-gray-500">Founder, FinTech Solutions</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"The team at Skyline delivered a flawless app. The backend is robust, and we handled 10,000 users on launch day without a single crash."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: Finance App</span>
                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4 mb-6">
                    <img src="https://i.pravatar.cc/100?img=47" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">Sarah Miller</h4>
                        <p class="text-xs text-gray-500">CEO, FitLife</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"They guided us through the App Store submission process perfectly. Our fitness app was approved in record time thanks to their clean code."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: Fitness Tracker</span>
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
                <p class="text-gray-500 text-sm leading-relaxed">Everything you need to know about our app development process.</p>
            </div>
            
            <!-- FAQ Items -->
            <div class="md:col-span-8 space-y-4">
                <!-- Q1 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">How long does it take to build an app?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        It depends on complexity. A simple MVP (Minimum Viable Product) can take 2–3 months, while a fully featured custom platform may take 4–6+ months. We provide a detailed timeline during the discovery phase.
                    </p>
                </details>

                <!-- Q2 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">Should I build for iOS or Android?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        Ideally, both! Using cross-platform technologies like Flutter or React Native, we can write one codebase that works perfectly on both iPhones and Androids, saving you time and money.
                    </p>
                </details>

                <!-- Q3 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">Do I own the code?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        Yes. Once the final payment is settled, you own 100% of the intellectual property, source code, and design assets. It is your product.
                    </p>
                </details>

                <!-- Q4 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">Will you help me get it on the App Store?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        Absolutely. We handle the strict submission guidelines for Apple and Google, ensuring your app gets approved and published without hassle.
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
                <span class="border border-white/30 rounded-full px-4 py-1.5 text-xs uppercase tracking-wider mb-6">Let's Build</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Ready to Launch?</h2>
                <p class="text-gray-300 max-w-lg text-sm mb-8">
                    Your users are waiting for the next big thing. Let's build it.
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