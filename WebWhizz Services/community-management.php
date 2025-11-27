<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Management - WebWhizz Services</title>
    
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
                    Community Management
                </span>
                <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] mb-6">
                    Turn Passive Followers into <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">Loyal Advocates.</span>
                </h1>
                <p class="text-gray-500 text-lg leading-relaxed max-w-xl mb-8">
                    We humanize your brand. By actively engaging with your audience, answering queries, and fostering real conversations, we build a community that trusts you and buys from you.
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
                    <!-- Image: Community / Chat / Connection Context -->
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop" alt="Community Management" class="w-full h-full object-cover">
                    
                    <!-- Decorative Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl max-w-[200px] hidden md:block">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <p class="text-xs font-bold text-gray-400">Response Rate</p>
                        <p class="font-bold text-lg">Fast & Personal</p>
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
                            <i data-lucide="message-square-off" class="w-10 h-10 text-gray-400"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-gray-300 mb-2">Ghosting Customers?</h3>
                         <p class="text-gray-400 text-sm">"Ignored comments damage your reputation."</p>
                    </div>
                </div>
            </div>

            <!-- Right: The Solution -->
            <div>
                <div class="mb-10">
                    <span class="text-red-500 font-bold tracking-widest uppercase text-xs mb-2 block">The Problem</span>
                    <h3 class="text-2xl font-bold mb-3">Are you ghosting your customers?</h3>
                    <p class="text-gray-500 leading-relaxed text-base">
                        In the digital age, customers expect instant connection. Ignoring comments, leaving DMs on "read," or letting spam fill your posts damages your reputation. If you aren't talking to your audience, they feel undervalued and will move to a brand that listens.
                    </p>
                </div>
                
                <div class="pl-6 border-l-4 border-lime-brand">
                    <span class="text-lime-600 font-bold tracking-widest uppercase text-xs mb-2 block">The Solution</span>
                    <h2 class="text-2xl font-bold mb-3">The voice of your brand, always active.</h2>
                    <p class="text-gray-800 leading-relaxed text-base font-medium">
                        We act as your dedicated front-line team. We spark conversations, handle support queries with empathy, and keep your community buzzing with positive energy, ensuring no lead or customer ever feels ignored.
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
                    Comprehensive engagement services to keep your community vibrant and loyal.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Card 1: Inbound (Lime Highlight) -->
                <div class="bg-lime-brand p-8 rounded-3xl text-black cursor-pointer group hover:scale-[1.02] transition-transform relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black opacity-10">01</div>
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-8 shadow-sm relative z-10">
                        <i data-lucide="message-circle" class="text-black w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Inbound Engagement</h3>
                    <p class="text-sm font-medium leading-relaxed relative z-10">
                        We monitor your notifications like a hawk. We reply to comments, answer DMs, and address inquiries promptly, ensuring your response rate remains high.
                    </p>
                </div>

                <!-- Card 2: Outbound (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                    <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">02</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="radio" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Proactive Outreach</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        Growth doesn't just happen on your page. We engage with hashtags, influencers, and potential customers in your niche to draw attention back to you.
                    </p>
                </div>

                <!-- Card 3: Crisis Mgmt (Dark) -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors group relative overflow-hidden">
                     <div class="absolute top-4 right-6 text-6xl font-black text-white opacity-5">03</div>
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:bg-lime-brand/20 transition-colors relative z-10">
                        <i data-lucide="shield-alert" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Crisis Management</h3>
                    <p class="text-sm text-gray-400 leading-relaxed relative z-10">
                        We keep your house clean. We hide spam, block trolls, and professionally de-escalate negative feedback before it turns into a PR disaster.
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
            <h2 class="text-4xl font-bold">Community Impact</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Real conversations that led to real conversions.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">SaaS Customer Support</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">24/7 Chat Mgmt</p>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Event Hype Building</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Live Tweeting</p>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Influencer Outreach</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Relationship Mgmt</p>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-6">
                    <h3 class="text-2xl font-bold mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">FB Group Growth</h3>
                    <p class="text-sm text-lime-brand uppercase tracking-wider translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Moderation & Engagement</p>
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
                <h2 class="text-4xl font-bold mb-6">Empathy.<br>Speed.</h2>
                <p class="text-gray-500 text-lg leading-relaxed mb-8">
                    We treat your customers with the same care and urgency that you would.
                </p>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="mic" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Tone-Matching</span>
                            <span class="text-sm text-gray-500">We ensure every reply sounds exactly like you—professional, witty, or casual.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="zap" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Rapid Response</span>
                            <span class="text-sm text-gray-500">We prioritize speed. Faster replies lead to higher conversion rates.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="heart" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Sentiment Tracking</span>
                            <span class="text-sm text-gray-500">We listen. We provide feedback on how your audience feels about your brand.</span>
                        </div>
                    </div>
                     <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                        <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center shrink-0">
                            <i data-lucide="dollar-sign" class="w-5 h-5 text-black"></i>
                        </div>
                        <div>
                            <span class="font-bold block">Sales-Focused</span>
                            <span class="text-sm text-gray-500">We know how to gently guide casual DMs toward a sale or booking.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visual Feature -->
            <div class="bg-dark-card rounded-4xl p-8 relative overflow-hidden min-h-[500px] flex items-center justify-center">
                <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-lime-500 via-transparent to-transparent"></div>
                <div class="relative z-10 text-center">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl text-white transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <i data-lucide="users" class="w-16 h-16 text-lime-brand mx-auto mb-4"></i>
                        <h3 class="text-2xl font-bold">Active Community</h3>
                        <p class="text-gray-400 text-sm mt-2">Engaged & Loyal</p>
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
                    <img src="https://i.pravatar.cc/100?img=31" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">Lisa Nguyen</h4>
                        <p class="text-xs text-gray-500">Founder, Glow Skincare</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"We used to get so many angry DMs because we were slow to reply. Skyline stepped in, and now our customer satisfaction score is through the roof."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: Customer Support</span>
                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4 mb-6">
                    <img src="https://i.pravatar.cc/100?img=53" class="w-12 h-12 rounded-full border-2 border-lime-100">
                    <div>
                        <h4 class="font-bold text-sm">Tom Harris</h4>
                        <p class="text-xs text-gray-500">Event Organizer</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"Their ability to handle trolls and negative comments during our launch was impressive. They kept the vibe positive and professional."</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400">Project: Crisis Management</span>
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
                <p class="text-gray-500 text-sm leading-relaxed">Everything you need to know about our community management process.</p>
            </div>
            
            <!-- FAQ Items -->
            <div class="md:col-span-8 space-y-4">
                <!-- Q1 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">How do you know the right answers?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        During onboarding, we create a "Response Bank" or FAQ document together. For any complex or technical questions not in the bank, we escalate them to you immediately for guidance.
                    </p>
                </details>

                <!-- Q2 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">Is this service 24/7?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        Typically, we cover specific blocks of hours (e.g., 9 AM – 9 PM) to ensure maximum coverage during peak times. We can discuss custom 24/7 coverage packages if you have a global audience.
                    </p>
                </details>

                <!-- Q3 -->
                <details class="group bg-gray-50 rounded-3xl p-6 [&_summary::-webkit-details-marker]:hidden cursor-pointer open:bg-lime-50 transition-colors duration-300">
                    <summary class="flex items-center justify-between">
                        <h3 class="font-bold text-lg">How is this different from Social Media Management?</h3>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-open:rotate-180 transition-transform duration-300 text-lime-600">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed text-sm">
                        Management is about posting content (scheduling, strategy, analytics). Community Management is about talking to people (replies, DMs, customer service). They work best when paired together!
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
                <span class="border border-white/30 rounded-full px-4 py-1.5 text-xs uppercase tracking-wider mb-6">Let's Talk</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Ready to Connect?</h2>
                <p class="text-gray-300 max-w-lg text-sm mb-8">
                    Your community is waiting to hear from you. Let's start the conversation.
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