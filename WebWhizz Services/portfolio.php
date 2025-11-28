<!DOCTYPE html>
<html lang="en">
    <?php
include 'db.php';

// Handle Project Inquiry Submission
if (isset($_POST['submit_inquiry'])) {
    $name = $conn->real_escape_string($_POST['name']);
    
    // Combine Country Code and Phone Number
    $country_code = $conn->real_escape_string($_POST['country_code']);
    $phone_number = $conn->real_escape_string($_POST['phone']);
    $full_phone = $country_code . " " . $phone_number;
    
    $email = $conn->real_escape_string($_POST['email']);
    $service = $conn->real_escape_string($_POST['service']);
    $budget = $conn->real_escape_string($_POST['budget']);

    $sql = "INSERT INTO project_inquiries (name, phone, email, service, budget) VALUES ('$name', '$full_phone', '$email', '$service', '$budget')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Thanks! We will contact you shortly.');</script>";
    } else {
        echo "<script>alert('Error sending inquiry.');</script>";
    }
}

// Fetch Services for Dropdown
$services_result = $conn->query("SELECT * FROM services ORDER BY name ASC");
?>
```
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work - Skyline Digital Agency</title>
    
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
                            bg: '#0B0B0F', // Darker, richer background
                            surface: '#1F1F23'
                        }
                    },
                    animation: {
                        'float': 'float 8s ease-in-out infinite',
                        'blob': 'blob 10s infinite',
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0B0B0F; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #bef264; }

        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Card Hover Effects */
        .project-card {
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            z-index: 10;
        }
        
        /* Slider Transitions */
        .slide {
            transition: opacity 0.7s ease-in-out;
        }
        .slide.active {
            opacity: 1;
            z-index: 10;
        }
        .slide:not(.active) {
            opacity: 0;
            z-index: 0;
        }
    </style>
</head>
<body class="bg-dark-bg text-white antialiased selection:bg-lime-brand selection:text-black overflow-x-hidden">

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <!-- AMBIENT BACKGROUND LIGHTS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-lime-brand/10 rounded-full blur-[120px] animate-blob mix-blend-screen"></div>
        <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[120px] animate-blob animation-delay-2000 mix-blend-screen"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-900/5 rounded-full blur-[150px] animate-blob animation-delay-4000"></div>
    </div>

    <!-- HERO SECTION -->
    <section class="relative pt-40 pb-20 px-4 text-center">
        <div class="max-w-5xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-md mb-8 animate-fade-in">
                <span class="w-2 h-2 rounded-full bg-lime-brand animate-pulse"></span>
                <span class="text-xs font-bold uppercase tracking-widest text-gray-300">Curated Excellence</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-bold leading-tight mb-8 tracking-tight animate-float">
                Work That <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-300 via-white to-lime-300">Defies Ordinary</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Explore our finest digital experiences. From pixel-perfect branding to complex web applications, every project is a statement.
            </p>
        </div>
    </section>

    <!-- FILTER NAVIGATION -->
    <section class="sticky top-4 z-40 px-4 mb-16">
        <div class="max-w-7xl mx-auto">
            <div class="flex overflow-x-auto hide-scrollbar gap-2 py-3 px-3 md:justify-center bg-white/5 backdrop-blur-2xl border border-white/10 rounded-full shadow-2xl">
                <button onclick="filterSelection('all')" class="filter-btn active whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-lime-brand hover:text-black bg-lime-brand text-black">All Projects</button>
                <button onclick="filterSelection('graphic')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Graphic Design</button>
                <button onclick="filterSelection('web')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Web Dev</button>
                <button onclick="filterSelection('mobile')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Mobile Apps</button>
                <button onclick="filterSelection('ecommerce')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">E-commerce</button>
                <button onclick="filterSelection('social-setup')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Social Setup</button>
                <button onclick="filterSelection('content')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Content</button>
                <button onclick="filterSelection('social-mgmt')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Social Mgmt</button>
                <button onclick="filterSelection('community')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Community</button>
                <button onclick="filterSelection('influencer')" class="filter-btn whitespace-nowrap px-6 py-2 rounded-full text-xs font-bold transition-all duration-300 hover:bg-white/10 text-gray-400 hover:text-white">Influencer</button>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO GRID -->
    <section class="px-4 md:px-8 pb-32 max-w-8xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            <!-- Content populated by JS/HTML below -->
            
            <!-- 1. Fintech Dashboard (Web) -->
            <div class="portfolio-item web project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('fintech')">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Web App</span>
                    <h3 class="text-xl font-bold text-white">Fintech Dashboard</h3>
                </div>
            </div>

            <!-- 2. Urban Coffee (Graphic) -->
            <div class="portfolio-item graphic project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('urban')">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Branding</span>
                    <h3 class="text-xl font-bold text-white">Urban Coffee Co.</h3>
                </div>
            </div>

            <!-- 3. Luxe Fashion (Influencer) -->
            <div class="portfolio-item influencer project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('fashion')">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Influencer</span>
                    <h3 class="text-xl font-bold text-white">Luxe Fashion Week</h3>
                </div>
            </div>

            <!-- 4. HealthMate (Mobile App) -->
            <div class="portfolio-item mobile web project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('health')">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Mobile App</span>
                    <h3 class="text-xl font-bold text-white">HealthMate iOS</h3>
                </div>
            </div>

            <!-- 5. Eco Market (Packaging) -->
            <div class="portfolio-item graphic project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('eco')">
                <img src="https://images.unsplash.com/photo-1626785774625-ddcddc3445e9?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Packaging</span>
                    <h3 class="text-xl font-bold text-white">Eco Market</h3>
                </div>
            </div>

            <!-- 6. Tech Unboxing (Influencer/Marketing) -->
            <div class="portfolio-item influencer project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('tech')">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Marketing</span>
                    <h3 class="text-xl font-bold text-white">Tech Unboxing</h3>
                </div>
            </div>

            <!-- 7. Glow Beauty (E-commerce) -->
            <div class="portfolio-item ecommerce project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('glow')">
                <img src="https://images.unsplash.com/photo-1596462502278-27bfdd403348?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">E-commerce</span>
                    <h3 class="text-xl font-bold text-white">Glow Beauty Store</h3>
                </div>
            </div>

            <!-- 8. Fitness Pro Profile (Social Setup) -->
            <div class="portfolio-item social-setup project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('fitness')">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Social Setup</span>
                    <h3 class="text-xl font-bold text-white">Fitness Pro Profile</h3>
                </div>
            </div>

            <!-- 9. Daily Tech Tips (Content Creation) -->
            <div class="portfolio-item content project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('content')">
                <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Content</span>
                    <h3 class="text-xl font-bold text-white">Daily Tech Tips</h3>
                </div>
            </div>

            <!-- 10. SaaS Growth (Social Management) -->
            <div class="portfolio-item social-mgmt project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('saas')">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Social Mgmt</span>
                    <h3 class="text-xl font-bold text-white">SaaS Growth Engine</h3>
                </div>
            </div>

            <!-- 11. Gamer Hub (Community) -->
            <div class="portfolio-item community project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('gamer')">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Community</span>
                    <h3 class="text-xl font-bold text-white">Gamer Hub Discord</h3>
                </div>
            </div>

            <!-- 12. Neon Tech (Influencer) -->
            <div class="portfolio-item influencer project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('neon')">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Influencer</span>
                    <h3 class="text-xl font-bold text-white">Neon Tech Launch</h3>
                </div>
            </div>

            <!-- NEW ITEMS BELOW -->

            <!-- 13. FoodDash App (Mobile) -->
            <div class="portfolio-item mobile project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('foodapp')">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=1981&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Mobile App</span>
                    <h3 class="text-xl font-bold text-white">FoodDash Delivery</h3>
                </div>
            </div>

            <!-- 14. Zen Meditation (Mobile) -->
            <div class="portfolio-item mobile project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('meditation')">
                <img src="https://images.unsplash.com/photo-1528319725582-ddc096101511?q=80&w=2069&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Mobile App</span>
                    <h3 class="text-xl font-bold text-white">Zen Focus App</h3>
                </div>
            </div>

            <!-- 15. Crypto Wallet (Mobile/Web) -->
            <div class="portfolio-item mobile web project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('wallet')">
                <img src="https://images.unsplash.com/photo-1639762681057-408e52192e55?q=80&w=2032&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Mobile & Web</span>
                    <h3 class="text-xl font-bold text-white">Nova Crypto Wallet</h3>
                </div>
            </div>

            <!-- 16. Real Estate Portal (Web) -->
            <div class="portfolio-item web project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('realestate')">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Web Dev</span>
                    <h3 class="text-xl font-bold text-white">Prime Realty Hub</h3>
                </div>
            </div>

            <!-- 17. Modern Furniture (E-commerce) -->
            <div class="portfolio-item ecommerce project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('furniture')">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">E-commerce</span>
                    <h3 class="text-xl font-bold text-white">Nordic Living</h3>
                </div>
            </div>

            <!-- 18. Streetwear Brand (E-commerce) -->
            <div class="portfolio-item ecommerce project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('streetwear')">
                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">E-commerce</span>
                    <h3 class="text-xl font-bold text-white">Urban Pulse</h3>
                </div>
            </div>

            <!-- 19. Minimalist Logo Suite (Graphic) -->
            <div class="portfolio-item graphic project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('logosuite')">
                <img src="https://images.unsplash.com/photo-1629361039739-20c808832c73?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Graphic Design</span>
                    <h3 class="text-xl font-bold text-white">Apex Identity</h3>
                </div>
            </div>

            <!-- 20. Event Poster Series (Graphic) -->
            <div class="portfolio-item graphic project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('posters')">
                <img src="https://images.unsplash.com/photo-1572947650440-e8a97ef053b5?q=80&w=2074&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Graphic Design</span>
                    <h3 class="text-xl font-bold text-white">Neon Nights</h3>
                </div>
            </div>

            <!-- 21. YouTube Tech Review (Influencer) -->
            <div class="portfolio-item influencer project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('ytreview')">
                <img src="https://images.unsplash.com/photo-1526045612212-70caf35c14df?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Influencer</span>
                    <h3 class="text-xl font-bold text-white">Gadget Guru Collab</h3>
                </div>
            </div>

            <!-- 22. LinkedIn Lead Gen (Social Mgmt) -->
            <div class="portfolio-item social-mgmt project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('linkedin')">
                <img src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Social Mgmt</span>
                    <h3 class="text-xl font-bold text-white">B2B Lead Gen</h3>
                </div>
            </div>

            <!-- 23. TikTok Viral Campaign (Content) -->
            <div class="portfolio-item content project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('tiktok')">
                <img src="https://images.unsplash.com/photo-1611162616475-46b635cb6868?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Content</span>
                    <h3 class="text-xl font-bold text-white">Gen Z Trends</h3>
                </div>
            </div>

            <!-- 24. Bakery Instagram (Social Setup) -->
            <div class="portfolio-item social-setup project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('bakery')">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=2072&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Social Setup</span>
                    <h3 class="text-xl font-bold text-white">Sweet Tooth Bakery</h3>
                </div>
            </div>

            <!-- 25. Crypto Discord (Community) -->
            <div class="portfolio-item community project-card relative rounded-3xl overflow-hidden cursor-pointer aspect-[4/3] bg-dark-surface border border-white/5" onclick="openProject('crypto')">
                <img src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                    <span class="text-lime-brand text-[10px] font-bold uppercase tracking-widest border border-lime-brand/30 px-2 py-1 rounded mb-2 inline-block bg-black/50 backdrop-blur-md">Community</span>
                    <h3 class="text-xl font-bold text-white">Crypto Traders</h3>
                </div>
            </div>

        </div>
    </section>

    <!-- IMMERSIVE PROJECT MODAL WITH SLIDER -->
    <div id="projectModal" class="fixed inset-0 z-50 flex items-center justify-center hidden p-0 md:p-8 opacity-0 transition-opacity duration-300">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/95 backdrop-blur-xl" onclick="closeModal()"></div>
        
        <!-- Modal Content -->
        <div class="relative w-full max-w-7xl h-full md:h-[85vh] bg-dark-card rounded-none md:rounded-3xl overflow-hidden shadow-2xl border border-white/5 flex flex-col md:flex-row">
            
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-6 right-6 z-50 w-12 h-12 bg-black/50 hover:bg-white hover:text-black text-white rounded-full flex items-center justify-center transition-all backdrop-blur-md border border-white/10">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>

            <!-- IMAGE SLIDER SIDE (Left/Top) -->
            <div class="w-full md:w-2/3 h-[50vh] md:h-full relative bg-black group">
                <!-- Slider Wrapper -->
                <div id="sliderWrapper" class="w-full h-full relative overflow-hidden">
                    <!-- Images injected by JS -->
                </div>

                <!-- Slider Controls -->
                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2 z-20" id="sliderDots">
                    <!-- Dots injected by JS -->
                </div>
                
                <!-- Arrows -->
                <button onclick="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-black/30 hover:bg-lime-brand hover:text-black text-white backdrop-blur-md border border-white/10 flex items-center justify-center transition-all opacity-0 group-hover:opacity-100 z-30">
                    <i data-lucide="chevron-left" class="w-6 h-6"></i>
                </button>
                <button onclick="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-black/30 hover:bg-lime-brand hover:text-black text-white backdrop-blur-md border border-white/10 flex items-center justify-center transition-all opacity-0 group-hover:opacity-100 z-30">
                    <i data-lucide="chevron-right" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- DETAILS SIDE (Right/Bottom) -->
            <div class="w-full md:w-1/3 h-[50vh] md:h-full bg-dark-surface p-8 md:p-12 flex flex-col overflow-y-auto border-l border-white/5">
                <div class="mt-auto mb-auto">
                    <div class="flex items-center gap-3 mb-6">
                        <span id="mCategory" class="text-lime-brand text-xs font-bold uppercase tracking-widest border border-lime-brand/30 px-3 py-1 rounded-full">Category</span>
                        <span class="text-gray-500 text-xs font-bold uppercase tracking-widest">• 2023</span>
                    </div>
                    
                    <h2 id="mTitle" class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">Project Title</h2>
                    
                    <p id="mDesc" class="text-gray-400 text-sm leading-relaxed mb-8">
                        Description goes here.
                    </p>

                    <div class="space-y-4 mb-10">
                        <h4 class="text-white font-bold uppercase text-xs tracking-widest">Services Provided</h4>
                        <div class="flex flex-wrap gap-2" id="mTags">
                            <!-- Tags injected by JS -->
                        </div>
                    </div>

                    <button onclick="openInquiryForm()" class="w-full bg-white text-black py-4 rounded-xl font-bold hover:bg-lime-brand transition-colors flex items-center justify-center gap-2 group">
                        Start Similar Project 
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA SECTION -->
    <section class="relative py-24 border-t border-white/5 bg-dark-bg">
        <div class="text-center px-4">
            <h2 class="text-4xl md:text-7xl font-bold mb-8">Seen Enough?</h2>
            <a href="contact.php" class="inline-flex items-center gap-3 text-lime-brand hover:text-white text-xl font-bold uppercase tracking-widest transition-colors group">
                Let's build something legendary 
                <i data-lucide="arrow-right" class="w-6 h-6 group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </section>
    <div id="inquiryModal" class="fixed inset-0 z-[60] flex items-center justify-center hidden p-4 bg-black/90 backdrop-blur-md">
        <div class="bg-dark-surface w-full max-w-lg rounded-3xl p-8 border border-white/10 shadow-2xl relative">
            <button onclick="closeInquiryForm()" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            
            <h3 class="text-2xl font-bold text-white mb-2">Start Your Project</h3>
            <p class="text-gray-400 text-sm mb-6">Tell us a bit about what you need.</p>
            
            <form method="post" onsubmit="return validateInquiryForm()">
                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full bg-dark-bg border border-white/10 rounded-xl p-3 text-white focus:border-lime-brand outline-none" required>
                    
                    <div class="space-y-4"> <!-- Added spacing container -->
    
    <!-- Phone with Country Code -->
    <div class="flex gap-2">
        <select name="country_code" class="w-[100px] bg-dark-bg border border-white/10 rounded-xl p-3 text-white focus:border-lime-brand outline-none">
            <option value="+1">+1 (USA)</option>
            <option value="+44">+44 (UK)</option>
            <option value="+91">+91 (IN)</option>
            <option value="+61">+61 (AU)</option>
            <option value="+971">+971 (UAE)</option>
            <option value="+92">+92 (PK)</option>
        </select>
        <input type="text" name="phone" id="iPhone" placeholder="Phone Number" class="flex-1 bg-dark-bg border border-white/10 rounded-xl p-3 text-white focus:border-lime-brand outline-none" required>
    </div>
    <p id="phoneError" class="text-red-500 text-xs hidden">Please enter a valid number (7-15 digits)</p>

    <!-- Email -->
    <input type="email" name="email" id="iEmail" placeholder="Email Address" class="w-full bg-dark-bg border border-white/10 rounded-xl p-3 text-white focus:border-lime-brand outline-none" required>
    <p id="emailError" class="text-red-500 text-xs hidden">Please enter a valid email address</p>

</div>

                    <!-- Dynamic Services Dropdown -->
                    <select name="service" class="w-full bg-dark-bg border border-white/10 rounded-xl p-3 text-gray-300 focus:border-lime-brand outline-none" required>
                        <option value="" disabled selected>Select Service Needed</option>
                        <?php 
                        // Reset pointer to ensure we can loop if used elsewhere
                        $services_result->data_seek(0); 
                        while($srv = $services_result->fetch_assoc()): 
                        ?>
                            <option value="<?php echo htmlspecialchars($srv['name']); ?>"><?php echo htmlspecialchars($srv['name']); ?></option>
                        <?php endwhile; ?>
                    </select>

                    <select name="budget" class="w-full bg-dark-bg border border-white/10 rounded-xl p-3 text-gray-300 focus:border-lime-brand outline-none">
                        <option value="" disabled selected>Estimated Budget</option>
                        <option value="$1k - $5k">$1k - $5k</option>
                        <option value="$5k - $10k">$5k - $10k</option>
                        <option value="$10k+">$10k+</option>
                    </select>

                    <button type="submit" name="submit_inquiry" class="w-full bg-lime-brand text-black font-bold py-3 rounded-xl hover:bg-white transition-colors mt-2">
                        Send Request
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <!-- PROJECT DATA & LOGIC -->
    <script>
        lucide.createIcons();
        
        // --- PROJECT DATA STORAGE ---
        const projects = {
            'fintech': {
                title: "Fintech Dashboard",
                category: "Web App",
                desc: "We designed a comprehensive dashboard for a leading fintech startup. The goal was to simplify complex financial data into actionable insights. We used a dark mode aesthetic to reduce eye strain for power users and implemented real-time data visualization.",
                tags: ["UI/UX Design", "React Development", "Data Viz"],
                images: [
                    "https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1974&auto=format&fit=crop"
                ]
            },
            'urban': {
                title: "Urban Coffee Co.",
                category: "Branding",
                desc: "A complete rebrand for a city-favorite coffee chain. We focused on earthy tones mixed with modern typography to capture the essence of the urban jungle. The project included logo design, packaging, and store signage.",
                tags: ["Logo Design", "Packaging", "Brand Strategy"],
                images: [
                    "https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=2000&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=2071&auto=format&fit=crop"
                ]
            },
            'fashion': {
                title: "Luxe Fashion Week",
                category: "Social Media",
                desc: "We managed the social media presence for Luxe Fashion Week, coordinating with 50+ influencers and creating real-time content. The campaign resulted in a 300% increase in engagement compared to the previous year.",
                tags: ["Influencer Mgmt", "Content Creation", "Live Coverage"],
                images: [
                    "https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'health': {
                title: "HealthMate iOS",
                category: "Mobile App",
                desc: "A fitness tracking application powered by AI. We built the iOS app from scratch using Swift, focusing on a clean, distraction-free interface that encourages daily use.",
                tags: ["iOS Dev", "Swift", "Product Design"],
                images: [
                    "https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1576633587382-13ddf37b1fc1?q=80&w=2072&auto=format&fit=crop"
                ]
            },
            'eco': {
                title: "Eco Market",
                category: "Packaging",
                desc: "Sustainable packaging design for a new organic grocery brand. We used recycled materials and minimalist graphics to convey the brand's commitment to the planet.",
                tags: ["Print Design", "Sustainability", "Art Direction"],
                images: [
                    "https://images.unsplash.com/photo-1626785774625-ddcddc3445e9?q=80&w=2000&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1606859191214-25806e8e2423?q=80&w=1933&auto=format&fit=crop"
                ]
            },
            'tech': {
                title: "Tech Unboxing",
                category: "Marketing",
                desc: "A viral YouTube campaign for the launch of a new gaming headset. We partnered with top tech reviewers to create authentic unboxing experiences.",
                tags: ["Video Production", "YouTube Ads", "Strategy"],
                images: [
                    "https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1593640408182-31c70c8268f5?q=80&w=2042&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1531297461136-82af022f0b91?q=80&w=1974&auto=format&fit=crop"
                ]
            },
            'glow': {
                title: "Glow Beauty Store",
                category: "E-commerce",
                desc: "We built a high-converting Shopify store for Glow Beauty. The design features large, immersive product imagery and a streamlined checkout process that increased conversion rates by 25%.",
                tags: ["Shopify Dev", "UI Design", "Conversion Optimization"],
                images: [
                    "https://images.unsplash.com/photo-1596462502278-27bfdd403348?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2087&auto=format&fit=crop"
                ]
            },
            'fitness': {
                title: "Fitness Pro Profile",
                category: "Social Setup",
                desc: "Complete social media profile overhaul for a leading fitness influencer. We optimized the bio for SEO, created custom highlight covers, and established a cohesive visual aesthetic for the feed.",
                tags: ["Profile Optimization", "Graphic Design", "Brand Strategy"],
                images: [
                    "https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'content': {
                title: "Daily Tech Tips",
                category: "Content Creation",
                desc: "We produce daily educational carousels and short-form videos for a tech education brand. Our team handles everything from scripting and design to video editing and caption writing.",
                tags: ["Content Strategy", "Video Editing", "Copywriting"],
                images: [
                    "https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'saas': {
                title: "SaaS Growth Engine",
                category: "Social Management",
                desc: "Full-service social media management for a B2B SaaS company. We implemented a LinkedIn-first strategy that generated over 500 qualified leads in the first quarter.",
                tags: ["LinkedIn Growth", "Lead Gen", "Community Mgmt"],
                images: [
                    "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'gamer': {
                title: "Gamer Hub Discord",
                category: "Community Management",
                desc: "We manage a 50k+ member Discord server for a gaming community. Our team provides 24/7 moderation, organizes weekly events, and ensures a positive and engaging environment.",
                tags: ["Discord Mgmt", "Event Planning", "Moderation"],
                images: [
                    "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2071&auto=format&fit=crop"
                ]
            },
            'neon': {
                title: "Neon Tech Launch",
                category: "Influencer Marketing",
                desc: "We coordinated a micro-influencer campaign for the launch of Neon Tech's new smart lighting product. The campaign reached over 2 million people and drove significant pre-order sales.",
                tags: ["Campaign Strategy", "Influencer Relations", "Product Launch"],
                images: [
                    "https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1550005809-91ad75fb315f?q=80&w=2069&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'foodapp': {
                title: "FoodDash Delivery",
                category: "Mobile App",
                desc: "A hyper-local food delivery app focused on connecting home cooks with neighbors. We built the full stack mobile application including real-time tracking and payment processing.",
                tags: ["Mobile App", "Flutter", "Logistics"],
                images: [
                    "https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=1981&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1526367790999-0150786686a2?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=2020&auto=format&fit=crop"
                ]
            },
            'meditation': {
                title: "Zen Focus App",
                category: "Mobile App",
                desc: "A mindfulness and meditation app featuring binaural beats and guided sessions. The UI focuses on calmness and simplicity to enhance the user experience.",
                tags: ["Mobile App", "React Native", "Wellness"],
                images: [
                    "https://images.unsplash.com/photo-1528319725582-ddc096101511?q=80&w=2069&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1515023115689-589c33041697?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=2062&auto=format&fit=crop"
                ]
            },
            'wallet': {
                title: "Nova Crypto Wallet",
                category: "Mobile App",
                desc: "A secure non-custodial crypto wallet supporting multiple chains. We focused on security auditing and a user-friendly interface for beginners.",
                tags: ["Mobile App", "Blockchain", "Security"],
                images: [
                    "https://images.unsplash.com/photo-1639762681057-408e52192e55?q=80&w=2032&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1621416894569-0f39ed31d247?q=80&w=1972&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1518546305927-5a555bb7020d?q=80&w=2069&auto=format&fit=crop"
                ]
            },
            'realestate': {
                title: "Prime Realty Hub",
                category: "Web Dev",
                desc: "A comprehensive real estate portal with virtual tours and advanced property filtering. Built with React and Node.js for high performance.",
                tags: ["Web Dev", "Real Estate", "React"],
                images: [
                    "https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1484154218962-a1c00207099b?q=80&w=2074&auto=format&fit=crop"
                ]
            },
            'furniture': {
                title: "Nordic Living",
                category: "E-commerce",
                desc: "A minimalist furniture store built on WooCommerce. We implemented 3D product previews and a custom shipping calculator.",
                tags: ["E-commerce", "WooCommerce", "3D Modeling"],
                images: [
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2158&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'streetwear': {
                title: "Urban Pulse",
                category: "E-commerce",
                desc: "A high-energy streetwear brand store on Shopify. Features include limited drop countdowns and integrated Instagram shopping feeds.",
                tags: ["E-commerce", "Shopify", "Fashion"],
                images: [
                    "https://images.unsplash.com/photo-1523381210434-271e8be1f52b?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1542272617-08f083758698?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'logosuite': {
                title: "Apex Identity",
                category: "Graphic Design",
                desc: "A complete brand identity suite for a sports performance brand. Included logo design, business cards, and apparel mockups.",
                tags: ["Graphic Design", "Branding", "Sports"],
                images: [
                    "https://images.unsplash.com/photo-1629361039739-20c808832c73?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1634942537034-2531766767d1?q=80&w=2000&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1626785774573-4b7993143a26?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'posters': {
                title: "Neon Nights",
                category: "Graphic Design",
                desc: "A series of event posters for a synthwave music festival. We used retro-futuristic aesthetics with bold neon colors.",
                tags: ["Graphic Design", "Poster Art", "Event"],
                images: [
                    "https://images.unsplash.com/photo-1572947650440-e8a97ef053b5?q=80&w=2074&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1563203369-26f2e4a5ccf7?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1558470598-a5dda9640f6b?q=80&w=2071&auto=format&fit=crop"
                ]
            },
            'ytreview': {
                title: "Gadget Guru Collab",
                category: "Influencer",
                desc: "We partnered with a top tech reviewer for a deep-dive video on a new smart home device. Generated over 500k views and high click-through rates.",
                tags: ["Influencer", "YouTube", "Tech"],
                images: [
                    "https://images.unsplash.com/photo-1526045612212-70caf35c14df?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1593642632823-8f785e677356?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'linkedin': {
                title: "B2B Lead Gen",
                category: "Social Mgmt",
                desc: "A LinkedIn-focused content strategy for a B2B consulting firm. We positioned the CEO as a thought leader through daily posts and articles.",
                tags: ["Social Mgmt", "LinkedIn", "B2B"],
                images: [
                    "https://images.unsplash.com/photo-1611926653458-09294b3142bf?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'tiktok': {
                title: "Gen Z Trends",
                category: "Content",
                desc: "We created a series of TikTok videos leveraging trending audio and challenges for a youth apparel brand. Resulted in viral reach and brand awareness.",
                tags: ["Content", "TikTok", "Viral"],
                images: [
                    "https://images.unsplash.com/photo-1611162616475-46b635cb6868?q=80&w=1974&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1592210454359-9043f067919b?q=80&w=2070&auto=format&fit=crop"
                ]
            },
            'bakery': {
                title: "Sweet Tooth Bakery",
                category: "Social Setup",
                desc: "We set up Instagram and Facebook pages for a local bakery, including professional photography, menu highlights, and location tagging.",
                tags: ["Social Setup", "Local Biz", "Food"],
                images: [
                    "https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=2072&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=2026&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=1980&auto=format&fit=crop"
                ]
            },
            'crypto': {
                title: "Crypto Traders",
                category: "Community",
                desc: "Community management for a crypto trading group on Telegram. We ensured a spam-free environment and organized weekly AMAs with experts.",
                tags: ["Community", "Telegram", "Crypto"],
                images: [
                    "https://images.unsplash.com/photo-1624996379697-f01d168b1a52?q=80&w=2070&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1605792657660-596af9009e82?q=80&w=2002&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1526304640152-d4619684e484?q=80&w=2070&auto=format&fit=crop"
                ]
            }
        };

        // --- SLIDER LOGIC ---
        let currentSlideIndex = 0;
        let slideInterval;
        let currentProjectImages = [];

        function openProject(projectId) {
            const project = projects[projectId];
            if(!project) return;

            // 1. Populate Text Content
            document.getElementById('mTitle').innerText = project.title;
            document.getElementById('mCategory').innerText = project.category;
            document.getElementById('mDesc').innerText = project.desc;
            
            // 2. Populate Tags
            const tagsContainer = document.getElementById('mTags');
            tagsContainer.innerHTML = '';
            project.tags.forEach(tag => {
                const span = document.createElement('span');
                span.className = "bg-white/10 text-white text-xs px-3 py-1 rounded border border-white/10";
                span.innerText = tag;
                tagsContainer.appendChild(span);
            });

            // 3. Setup Slider Images
            currentProjectImages = project.images;
            const sliderWrapper = document.getElementById('sliderWrapper');
            const sliderDots = document.getElementById('sliderDots');
            
            sliderWrapper.innerHTML = '';
            sliderDots.innerHTML = '';

            currentProjectImages.forEach((imgSrc, index) => {
                // Create Slide Image
                const img = document.createElement('img');
                img.src = imgSrc;
                img.className = `slide absolute inset-0 w-full h-full object-cover ${index === 0 ? 'active' : ''}`;
                sliderWrapper.appendChild(img);

                // Create Dot
                const dot = document.createElement('button');
                dot.className = `w-2 h-2 rounded-full transition-all ${index === 0 ? 'bg-lime-brand w-6' : 'bg-white/50'}`;
                dot.onclick = () => goToSlide(index);
                sliderDots.appendChild(dot);
            });

            // 4. Show Modal & Start Slider
            document.getElementById('projectModal').classList.remove('hidden');
            // Tiny timeout to allow display:block to render before opacity transition
            setTimeout(() => {
                document.getElementById('projectModal').classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
            
            currentSlideIndex = 0;
            startSlider();
        }

        function closeModal() {
            document.getElementById('projectModal').classList.add('opacity-0');
            setTimeout(() => {
                document.getElementById('projectModal').classList.add('hidden');
            }, 300);
            document.body.style.overflow = 'auto';
            stopSlider();
        }

        function showSlide(index) {
            const slides = document.querySelectorAll('#sliderWrapper .slide');
            const dots = document.getElementById('sliderDots').children;

            // Wrap around
            if (index >= slides.length) index = 0;
            if (index < 0) index = slides.length - 1;

            currentSlideIndex = index;

            // Update Images
            slides.forEach((slide, i) => {
                if(i === index) slide.classList.add('active');
                else slide.classList.remove('active');
            });

            // Update Dots
            Array.from(dots).forEach((dot, i) => {
                if(i === index) {
                    dot.classList.remove('bg-white/50');
                    dot.classList.add('bg-lime-brand', 'w-6');
                } else {
                    dot.classList.add('bg-white/50');
                    dot.classList.remove('bg-lime-brand', 'w-6');
                }
            });
        }

        function nextSlide() {
            showSlide(currentSlideIndex + 1);
            resetTimer();
        }

        function prevSlide() {
            showSlide(currentSlideIndex - 1);
            resetTimer();
        }

        function goToSlide(index) {
            showSlide(index);
            resetTimer();
        }

        function startSlider() {
            stopSlider();
            slideInterval = setInterval(() => {
                showSlide(currentSlideIndex + 1);
            }, 3000); // 3 seconds
        }

        function stopSlider() {
            clearInterval(slideInterval);
        }

        function resetTimer() {
            stopSlider();
            startSlider();
        }

        // Filter Logic (Same as before)
        function filterSelection(category) {
            const items = document.getElementsByClassName("portfolio-item");
            const buttons = document.getElementsByClassName("filter-btn");

            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("bg-lime-brand", "text-black");
                buttons[i].classList.add("text-gray-400", "hover:bg-white/10", "hover:text-white");
                if (buttons[i].getAttribute('onclick').includes(category)) {
                    buttons[i].classList.remove("text-gray-400", "hover:bg-white/10", "hover:text-white");
                    buttons[i].classList.add("bg-lime-brand", "text-black");
                }
            }

            if (category == "all") category = "";
            for (let i = 0; i < items.length; i++) {
                if (items[i].className.indexOf(category) > -1) {
                    items[i].style.display = "block";
                } else {
                    items[i].style.display = "none";
                }
            }
        }
        // NEW: Inquiry Modal Functions
        function openInquiryForm() {
            document.getElementById('inquiryModal').classList.remove('hidden');
        }
        function closeInquiryForm() {
            document.getElementById('inquiryModal').classList.add('hidden');
        }
        // --- FORM VALIDATION LOGIC ---
        function validateInquiryForm() {
            let isValid = true;
            
            // 1. Validate Phone
            const phoneInput = document.getElementById('iPhone');
            const phoneError = document.getElementById('phoneError');
            const cleanPhone = phoneInput.value.replace(/\D/g,''); // Removes non-digits
            
            if (cleanPhone.length < 7 || cleanPhone.length > 15) {
                phoneError.classList.remove('hidden');
                isValid = false;
            } else {
                phoneError.classList.add('hidden');
            }

            // 2. Validate Email
            const emailInput = document.getElementById('iEmail');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(emailInput.value)) {
                emailError.classList.remove('hidden');
                isValid = false;
            } else {
                emailError.classList.add('hidden');
            }

            return isValid;
        }
    </script>
</body>
</html>