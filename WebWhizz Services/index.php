<?php
include 'db.php'; 

// Handle Review Submission
$msg = "";
$msgType = ""; // success or error

if (isset($_POST['submit_review'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $review = $conn->real_escape_string($_POST['review']);
    $rating = intval($_POST['rating']);

    $sql = "INSERT INTO site_reviews (name, role, review_text, rating, is_approved) VALUES ('$name', '$role', '$review', $rating, 0)";
    
    if ($conn->query($sql)) {
        $msg = "Thank you! Your review has been submitted for moderation.";
        $msgType = "success";
    } else {
        $msg = "Error submitting review. Please try again.";
        $msgType = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebWhizz Services - Digital Agency</title>
    
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
                            card: '#1c1c1c', // Dark cards
                            bg: '#121212',   // Dark section bg
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
        .rotate-text { animation: spin 10s linear infinite; }
        @keyframes spin { 100% { transform: rotate(360deg); } }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">
<?php include 'header.php'; ?>
    <!-- HERO SECTION -->
    <section class="pt-16 pb-20 px-4 md:px-8 max-w-7xl mx-auto">
        
        <!-- Header Text Row -->
        <div class="flex flex-col md:flex-row justify-between items-start mb-16 gap-8">
            <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] max-w-3xl">
                Color Digitally With <br>
                Imagination Palette
            </h1>
            <p class="text-gray-500 max-w-xs mt-2 leading-relaxed text-sm md:text-base">
                We are digital magicians, turning ideas into compelling designs, driving change and creating real impact.
            </p>
        </div>

        <!-- Hero Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            
            <!-- Stats Column (Left) -->
            <div class="md:col-span-2 flex flex-row md:flex-col gap-4 justify-between md:justify-start">
                <div class="bg-gray-50 p-6 rounded-3xl w-full">
                    <h3 class="text-3xl font-bold">500<span class="text-lime-600">+</span></h3>
                    <p class="text-sm text-gray-500 font-medium">Happy Clients</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-3xl w-full">
                    <h3 class="text-3xl font-bold">200<span class="text-lime-600">+</span></h3>
                    <p class="text-sm text-gray-500 font-medium">Project Complete</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-3xl w-full">
                    <h3 class="text-3xl font-bold">12yr<span class="text-lime-600">+</span></h3>
                    <p class="text-sm text-gray-500 font-medium">Experience</p>
                </div>
            </div>

            <!-- Main Image (Right) -->
            <div class="md:col-span-10 relative group">
                <div class="w-full h-[400px] md:h-[500px] rounded-4xl overflow-hidden relative">
                    <!-- Placeholder for Office Image -->
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Team working" class="w-full h-full object-cover">
                    
                    <!-- Overlay Text Bottom Left -->
                    <div class="absolute bottom-8 left-8 text-white z-10">
                        <div class="flex items-center gap-2 mb-1">
                            <i data-lucide="layout-grid" class="w-6 h-6"></i>
                            <span class="font-bold text-xl">WebWhizz</span>
                        </div>
                        <p class="text-sm opacity-80">We Are Based in<br>Oakville, USA</p>
                    </div>

                    <!-- Overlay Email Bottom Center -->
                    <div class="absolute bottom-8 left-1/3 text-white z-10 hidden md:block">
                        <p class="text-xs opacity-60 uppercase tracking-wider mb-1">Let's Talk</p>
                        <p class="font-medium">webwhizzservices@gmail.com</p>
                    </div>
                </div>

                <!-- Green Circle Badge (Top Right) -->
                <div class="absolute -top-6 -right-2 md:top-8 md:right-8 bg-lime-brand w-32 h-32 rounded-full flex items-center justify-center rotate-12 group-hover:rotate-45 transition-transform duration-700 shadow-lg">
                    <div class="relative w-full h-full flex items-center justify-center">
                         <!-- Circular Text Path simulation -->
                         <svg class="absolute w-28 h-28 animate-[spin_10s_linear_infinite]" viewBox="0 0 100 100">
                             <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                             <text font-size="11" font-weight="bold" fill="#000">
                                 <textPath href="#circlePath" startOffset="0%">• WORK TO CREATE • WORK TO CREATE</textPath>
                             </text>
                         </svg>
                         <i data-lucide="arrow-down-right" class="w-8 h-8 text-black"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION (Top 4 Services) -->
    <section class="px-4 md:px-8 max-w-7xl mx-auto mb-20">
        <div class="bg-dark-card rounded-4xl p-8 md:p-16 text-white">
            <div class="flex flex-col md:flex-row justify-between items-start mb-16">
                <div>
                    <span class="border border-gray-600 rounded-full px-3 py-1 text-xs uppercase tracking-wider text-gray-300">Our Services</span>
                    <h2 class="text-3xl md:text-5xl font-bold mt-6 max-w-lg">We Build Best Service Experience</h2>
                </div>
                <p class="text-gray-400 max-w-xs mt-8 md:mt-0 text-sm leading-relaxed">
                    We believe that creativity, collaboration and adaptability are the keys to success in this fast-changing digital era.
                </p>
            </div>

            <!-- Service Cards Grid (4 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Web & Mobile Design -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors flex flex-col h-full group">
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:mb-6 transition-all">
                        <i data-lucide="smartphone" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Web & Mobile Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 flex-grow">
                        Stunning, responsive websites and mobile apps designed to convert users into customers.
                    </p>
                    <a href="web-design.php" class="inline-flex items-center gap-2 text-lime-brand font-bold text-sm hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Card 2: E-commerce Solutions -->
                <div class="bg-lime-brand p-8 rounded-3xl text-black flex flex-col h-full transform lg:-translate-y-4">
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mb-8">
                        <i data-lucide="shopping-bag" class="text-black w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">E-commerce Design</h3>
                    <p class="text-gray-800 font-medium text-sm leading-relaxed mb-8 flex-grow">
                        High-performance online stores built on Shopify & WooCommerce to maximize your sales.
                    </p>
                    <a href="ecommerce-design.php" class="inline-flex items-center gap-2 text-black font-bold text-sm hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Card 3: Social Media Management -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors flex flex-col h-full group">
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:mb-6 transition-all">
                        <i data-lucide="share-2" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Social Management</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 flex-grow">
                        Full-service strategy, scheduling, and community growth to keep your brand active 24/7.
                    </p>
                    <a href="social-management.php" class="inline-flex items-center gap-2 text-lime-brand font-bold text-sm hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Card 4: Graphic Design -->
                <div class="bg-dark-surface p-8 rounded-3xl hover:bg-neutral-800 transition-colors flex flex-col h-full group">
                    <div class="w-12 h-12 rounded-full bg-lime-900/30 flex items-center justify-center mb-8 group-hover:mb-6 transition-all">
                        <i data-lucide="pen-tool" class="text-lime-brand w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Graphic Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 flex-grow">
                        Visual identities, logos, and marketing collateral that make your brand unforgettable.
                    </p>
                    <a href="graphic-design.php" class="inline-flex items-center gap-2 text-lime-brand font-bold text-sm hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- ADDED BUTTON: View All Services -->
            <div class="mt-16 text-center">
                <a href="services.php" class="inline-flex items-center gap-2 border border-gray-600 px-8 py-3 rounded-full font-bold hover:bg-white hover:text-black transition-colors text-white">
                    View All <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Left Image Cluster -->
            <div class="relative">
                <div class="rounded-4xl overflow-hidden h-[400px] w-full bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-8 -right-4 md:-right-8 bg-dark-card text-white p-6 rounded-3xl shadow-xl max-w-[220px]">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-4xl font-bold">530</span>
                        <span class="text-lime-brand text-2xl font-bold">+</span>
                    </div>
                    <p class="text-xs text-gray-400 mb-4">Trusted by our clients</p>
                    <div class="flex -space-x-3">
                        <img class="w-8 h-8 rounded-full border-2 border-dark-card" src="https://i.pravatar.cc/100?img=1" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-dark-card" src="https://i.pravatar.cc/100?img=2" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-dark-card" src="https://i.pravatar.cc/100?img=3" alt="">
                        <div class="w-8 h-8 rounded-full border-2 border-dark-card bg-gray-700 flex items-center justify-center text-xs">+</div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="pl-0 md:pl-10">
                <span class="border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider">About Us</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-6 mb-6">
                    Why You Should <br> Choose <span class="text-lime-600">WebWhizz</span>
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    We proudly introduce ourselves as a digital creative agency committed to realizing our clients' vision and mission through creative, innovative, and technology-based solutions in the digital world.
                </p>
                <a href="#" class="inline-flex items-center gap-2 font-bold text-sm hover:gap-4 transition-all">
                    Learn more <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION (Linked to Portfolio) -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider">Projects</span>
            <h2 class="text-4xl font-bold mt-6">Our Creative Digital Projects</h2>
            <p class="text-gray-500 mt-4 max-w-lg mx-auto text-sm">A glimpse into our recent work. Explore our full portfolio for more.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="bg-gray-100 p-8 rounded-4xl group hover:shadow-xl transition-shadow">
                <div class="h-64 rounded-3xl bg-gray-200 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-2">Medicalis App & Website</h3>
                <p class="text-gray-500 text-xs mb-6 max-w-sm">Medicalis is here to serve your health needs. Patients will have the convenience of consulting online.</p>
                <a href="portfolio.php" class="border border-gray-300 bg-white px-6 py-2 rounded-full text-xs font-bold flex items-center gap-2 w-fit">
                    View Project <i data-lucide="arrow-right" class="w-3 h-3"></i>
                </a>
            </div>

            <!-- Project 2 -->
            <div class="bg-dark-card text-white p-8 rounded-4xl group hover:shadow-xl transition-shadow">
                <div class="h-64 rounded-3xl bg-gray-800 mb-6 overflow-hidden border border-gray-700">
                    <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
                <h3 class="text-2xl font-bold mb-2">Tesla Car Dashboard</h3>
                <p class="text-gray-400 text-xs mb-6 max-w-sm">You have an assistant who can accompany you throughout your journey and make it easy to manage your tesla.</p>
                <a href="portfolio.php" class="bg-lime-brand text-black px-6 py-2 rounded-full text-xs font-bold flex items-center gap-2 hover:bg-lime-400 w-fit">
                    View Project <i data-lucide="arrow-right" class="w-3 h-3"></i>
                </a>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="portfolio.php" class="inline-flex items-center gap-2 border border-gray-300 px-8 py-3 rounded-full font-bold hover:bg-black hover:text-white transition-colors">
                View All Works <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </section>

    <!-- LATEST INSIGHTS SECTION (Dynamic - Connected to Blog) -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="bg-dark-card text-white rounded-4xl p-8 md:p-12">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-xl">
                    <span class="border border-gray-600 rounded-full px-3 py-1 text-[10px] uppercase tracking-wider text-gray-300">Blog</span>
                    <h2 class="text-3xl md:text-5xl font-bold mt-6 mb-4">Latest Insight Updates</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Expert advice on design, technology, and digital growth. Straight from our team to you.
                    </p>
                </div>
                <a href="blog.php" class="bg-lime-brand text-black px-6 py-2 rounded-full text-xs font-bold flex items-center gap-2 hover:bg-lime-400 transition-colors whitespace-nowrap">
                    All Post <i data-lucide="arrow-right" class="w-3 h-3"></i>
                </a>
            </div>

            <!-- Dynamic Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                // Fetch latest 3 posts
                $latest_blogs = $conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 3");
                
                if ($latest_blogs && $latest_blogs->num_rows > 0) {
                    while($row = $latest_blogs->fetch_assoc()) {
                        ?>
                        <a href="post.php?id=<?php echo $row['id']; ?>" class="relative h-[400px] rounded-3xl overflow-hidden group cursor-pointer block">
                            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-6">
                                <span class="bg-white/20 backdrop-blur-sm w-fit px-3 py-1 rounded-full text-[10px] font-bold mb-3 border border-white/10"><?php echo htmlspecialchars($row['category']); ?></span>
                                <h3 class="text-xl font-bold mb-2 group-hover:text-lime-brand transition-colors"><?php echo htmlspecialchars($row['title']); ?></h3>
                                <p class="text-gray-400 text-xs line-clamp-2"><?php echo strip_tags($row['content']); ?></p>
                                <div class="flex items-center gap-2 mt-4 text-lime-brand text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-2 group-hover:translate-y-0">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3"></i>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    // Fallback if no blogs exist
                    echo '<p class="text-gray-500 col-span-3 text-center">No insights published yet. Check back soon!</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION (Dynamic) -->
    <section class="py-20 px-4 md:px-8 max-w-7xl mx-auto bg-gray-50 rounded-4xl my-10 relative">
        <div class="text-center mb-16">
            <span class="border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider">Testimonials</span>
            <h2 class="text-4xl font-bold mt-6">Hear From Our Clients</h2>
            
            <!-- Success Message -->
            <?php if($msg): ?>
                <div class="mt-4 <?php echo $msgType == 'success' ? 'bg-lime-100 text-lime-800 border-lime-brand' : 'bg-red-100 text-red-800 border-red-300'; ?> border px-4 py-2 rounded-lg inline-block text-sm font-bold">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            // Fetch Approved Reviews
            $reviews = $conn->query("SELECT * FROM site_reviews WHERE is_approved = 1 ORDER BY created_at DESC LIMIT 4");
            if ($reviews && $reviews->num_rows > 0):
                while($row = $reviews->fetch_assoc()):
            ?>
            <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-lime-brand/20 flex items-center justify-center text-lime-700 font-bold text-lg">
                        <?php echo substr($row['name'], 0, 1); ?>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm"><?php echo htmlspecialchars($row['name']); ?></h4>
                        <p class="text-xs text-gray-500"><?php echo htmlspecialchars($row['role']); ?></p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed italic">"<?php echo htmlspecialchars($row['review_text']); ?>"</p>
                <div class="flex justify-between items-center mt-6">
                    <span class="text-xs text-gray-400"><?php echo date("M d, Y", strtotime($row['created_at'])); ?></span>
                    <div class="flex text-yellow-400 text-xs">
                        <?php for($i=0; $i<$row['rating']; $i++) echo '★'; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; else: ?>
                <p class="text-center col-span-2 text-gray-500">No reviews yet. Be the first to write one!</p>
            <?php endif; ?>
        </div>

        <div class="text-center mt-12">
            <button onclick="document.getElementById('reviewModal').classList.remove('hidden')" class="border border-gray-300 bg-white px-8 py-3 rounded-full font-bold hover:bg-black hover:text-white transition-colors">
                Write a Review
            </button>
        </div>
    </section>

    <!-- REVIEW MODAL -->
    <div id="reviewModal" class="fixed inset-0 z-50 flex items-center justify-center hidden p-4 bg-black/80 backdrop-blur-sm transition-all duration-300">
        <div class="bg-white w-full max-w-lg rounded-3xl p-8 shadow-2xl relative">
            <button onclick="document.getElementById('reviewModal').classList.add('hidden')" class="absolute top-4 right-4 text-gray-400 hover:text-black">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            <h3 class="text-2xl font-bold mb-6">Share Your Experience</h3>
            <form method="post">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input type="text" name="name" placeholder="Your Name" class="bg-gray-50 border p-3 rounded-xl w-full" required>
                    <input type="text" name="role" placeholder="Role/Company" class="bg-gray-50 border p-3 rounded-xl w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-xs font-bold text-gray-500 mb-2">Rating</label>
                    <select name="rating" class="bg-gray-50 border p-3 rounded-xl w-full">
                        <option value="5">5 Stars - Excellent</option>
                        <option value="4">4 Stars - Good</option>
                        <option value="3">3 Stars - Average</option>
                    </select>
                </div>
                <textarea name="review" rows="4" placeholder="Your review..." class="bg-gray-50 border p-3 rounded-xl w-full mb-6" required></textarea>
                <button type="submit" name="submit_review" class="bg-lime-brand w-full py-3 rounded-xl font-bold hover:bg-lime-400 transition-colors">Submit Review</button>
            </form>
        </div>
    </div>

    <!-- CTA FOOTER (Screenshot 4 Bottom) -->
    <section class="px-4 md:px-8 max-w-7xl mx-auto pb-10">
        <div class="relative rounded-4xl overflow-hidden h-[400px]">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center text-white p-6">
                <span class="border border-white/30 rounded-full px-4 py-1.5 text-xs uppercase tracking-wider mb-6">Stay In Touch</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Ready To Talk</h2>
                <p class="text-gray-300 max-w-lg text-sm mb-8">Feel free to contact us right now. We are pleased to announce our readiness to receive contacts from potential clients.</p>
                <a href="contact.php" class="bg-lime-brand text-black px-8 py-3 rounded-full font-bold hover:scale-105 transition-transform">
                    Let's Talk
                </a>
            </div>
        </div>
    </section>

    <script>
        lucide.createIcons();
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>