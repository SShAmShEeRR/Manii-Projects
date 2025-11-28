<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - WebWhizz Services</title>
    
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
                            brand: '#bef264',
                        },
                        dark: {
                            card: '#1c1c1c',
                            bg: '#0B0B0F', 
                            surface: '#1F1F23'
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
        .graph-line {
            fill: none;
            stroke: #84cc16; /* Slightly darker lime for visibility on white */
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            filter: drop-shadow(0 4px 6px rgba(132, 204, 22, 0.4));
        }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">

<?php include 'header.php'; ?>

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 pt-32 pb-20 sm:px-6 lg:px-8">
        
        <!-- TOP ROW: Left (Content) + Right (Image) -->
        <div class="flex flex-col lg:flex-row gap-12 mb-20">
            
            <!-- Left Column: Text, Stats, Graph, Testimonial -->
            <div class="lg:w-1/2 space-y-8">
                
                <!-- Heading -->
                <div>
                    <span class="text-lime-600 font-bold tracking-widest text-xs uppercase mb-4 block">Our Mission</span>
                    <h2 class="text-4xl sm:text-5xl font-bold leading-tight mb-6">
                        Now Engaging More,<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-500 to-lime-700">Refreshing Result.</span>
                    </h2>
                    <p class="text-gray-500 text-lg leading-relaxed">
                        We are digital architects building the future of your brand. From strategy to execution, we ensure every pixel and line of code contributes to your growth.
                    </p>
                </div>
                
                <!-- Stats Card -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 flex items-center gap-6 shadow-xl shadow-gray-100">
                    <div class="w-16 h-16 bg-lime-brand rounded-full flex items-center justify-center text-black font-bold text-xl shadow-lg shadow-lime-200">
                        120%
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-gray-900">Growth Rate</h3>
                        <p class="text-gray-500 text-sm">Compared to last year</p>
                    </div>
                </div>
                
                <!-- Graph SVG (Light Theme) -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-xl shadow-gray-100 relative overflow-hidden">
                    <!-- Subtle Lime Background Grid -->
                    <div class="absolute inset-0 bg-[radial-gradient(#bef264_1px,transparent_1px)] [background-size:16px_16px] opacity-20"></div>
                    
                    <svg width="100%" height="120" viewBox="0 0 300 120" class="relative z-10">
                        <!-- Grid Lines (Light Gray) -->
                        <line x1="0" y1="30" x2="300" y2="30" stroke="#f3f4f6" stroke-width="1"/>
                        <line x1="0" y1="60" x2="300" y2="60" stroke="#f3f4f6" stroke-width="1"/>
                        <line x1="0" y1="90" x2="300" y2="90" stroke="#f3f4f6" stroke-width="1"/>
                        
                        <!-- The Line -->
                        <polyline class="graph-line" points="0,90 50,60 100,40 150,30 200,20 250,10 300,10"/>
                        
                        <!-- Points -->
                        <circle cx="0" cy="90" r="4" fill="#84cc16"/>
                        <circle cx="50" cy="60" r="4" fill="#84cc16"/>
                        <circle cx="100" cy="40" r="4" fill="#84cc16"/>
                        <circle cx="150" cy="30" r="4" fill="#84cc16"/>
                        <circle cx="200" cy="20" r="4" fill="#84cc16"/>
                        <circle cx="250" cy="10" r="4" fill="#84cc16"/>
                        <circle cx="300" cy="10" r="4" fill="#84cc16"/>
                    </svg>
                </div>
                
                <!-- Testimonial -->
                <div class="bg-gray-50 border-l-4 border-lime-500 rounded-r-xl p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100&auto=format&fit=crop" alt="Maggie Wilson" class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-md">
                        <div>
                            <h4 class="font-bold text-gray-900">Maggie Wilson</h4>
                            <p class="text-gray-500 text-xs uppercase tracking-wider">CEO, Mega Brand</p>
                        </div>
                        <div class="flex ml-auto text-yellow-400">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm italic">"The team at WebWhizz transformed our digital presence overnight. Their attention to detail is unmatched."</p>
                </div>
                
            </div>
            
            <!-- Right Column: Large Image with Overlays -->
            <div class="lg:w-1/2">
                 <div class="relative rounded-4xl overflow-hidden h-full min-h-[500px] group shadow-2xl shadow-gray-200 border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Social Media Tools" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Floating Tags -->
                    <div class="absolute top-6 left-6 flex flex-wrap gap-2">
                        <span class="bg-lime-brand text-black rounded-full px-3 py-1 text-xs font-bold shadow-md border border-white/20">2024</span>
                        <span class="bg-white text-gray-900 rounded-full px-3 py-1 text-xs font-bold shadow-md">STRATEGY</span>
                        <span class="bg-white text-gray-900 rounded-full px-3 py-1 text-xs font-bold shadow-md">GROWTH</span>
                    </div>
                    
                    <!-- Bottom Overlay (Light Theme Glass) -->
                    <div class="absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-md p-6 border-t border-gray-200">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-lime-brand flex items-center justify-center text-black shrink-0">
                                <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <span class="text-gray-900 font-bold block text-sm">Technical Audit & Traffic Flow</span>
                                <span class="text-gray-500 text-xs">All elements, calls-to-actions, banner and images</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- MIDDLE ROW: Left (2 Cards) + Right (Progress Bars) -->
        <div class="flex flex-col lg:flex-row gap-12 mb-24 items-start">
            
            <!-- Left: Two Feature Cards -->
            <div class="lg:w-1/2 space-y-6">
                <!-- Card 1 -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 flex items-center gap-5 shadow-lg shadow-gray-100 hover:border-lime-brand/50 transition-all hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        <i data-lucide="globe" class="w-7 h-7"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-lg mb-1">Operating All over the World</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Occaecati tellus porta occaecat bibendum placeat porta beatae sunt.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white border border-gray-100 rounded-3xl p-6 flex items-center gap-5 shadow-lg shadow-gray-100 hover:border-lime-brand/50 transition-all hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <i data-lucide="shield-check" class="w-7 h-7"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-lg mb-1">Trusted by Agile Companies</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Certified by industry leaders for scalable and secure development.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right: Solutions & Progress Bars -->
            <div class="lg:w-1/2">
                 <div class="bg-white border border-gray-100 rounded-3xl p-8 h-full shadow-xl shadow-gray-100">
                    <h3 class="text-3xl font-bold mb-2 text-gray-900">Giving <span class="text-pink-500">Solution</span> For<br>Social Media</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed">Erat dolore consequuntur facere consectetuer beatae beatae habitant conubia porttitor ridiculus cill.</p>
                    
                    <!-- Progress Bar 1 -->
                    <div class="mb-6">
                        <div class="flex justify-between text-xs text-gray-500 mb-2 font-bold uppercase tracking-wider">
                            <span>Social Media Branding</span>
                            <span class="text-lime-600">98%</span>
                        </div>
                        <div class="w-full h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-lime-400 to-lime-600 rounded-full" style="width: 98%;"></div>
                        </div>
                    </div>
                    
                    <!-- Progress Bar 2 -->
                    <div>
                        <div class="flex justify-between text-xs text-gray-500 mb-2 font-bold uppercase tracking-wider">
                            <span>Secure & Success Rate</span>
                            <span class="text-blue-600">92%</span>
                        </div>
                        <div class="w-full h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-400 to-blue-600 rounded-full" style="width: 92%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- PARTNERS SECTION -->
        <div class="border-t border-gray-100 pt-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left: Text -->
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Our Genuine Trusted <br><span class="text-lime-600">Partners & Clients</span></h3>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-md">
                        While the early testing phase begins, we continue to refine our product and strategy. We believe that the best solutions come from collaboration.
                    </p>
                </div>
                
                <!-- Right: Logos -->
                <div class="flex flex-wrap gap-6 justify-start md:justify-end">
                    <div class="w-14 h-14 rounded-full bg-red-50 border border-red-100 flex items-center justify-center text-red-500 font-bold text-xl hover:scale-110 transition-transform cursor-default shadow-sm">F</div>
                    <div class="w-14 h-14 rounded-full bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-500 font-bold text-xl hover:scale-110 transition-transform cursor-default shadow-sm">M</div>
                    <div class="w-14 h-14 rounded-full bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-500 font-bold text-xl hover:scale-110 transition-transform cursor-default shadow-sm">T</div>
                    <div class="w-14 h-14 rounded-full bg-green-50 border border-green-100 flex items-center justify-center text-green-500 font-bold text-xl hover:scale-110 transition-transform cursor-default shadow-sm">V</div>
                    <div class="w-14 h-14 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-500 font-bold text-xl hover:scale-110 transition-transform cursor-default shadow-sm">S</div>
                </div>
            </div>
        </div>
        
    </div>

<?php include 'footer.php'; ?>
<script>lucide.createIcons();</script>
</body>
</html>