<?php
include 'db.php';
// Filter Logic
$whereClause = "1";
if (isset($_GET['category']) && $_GET['category'] != 'All') {
    $cat = $conn->real_escape_string($_GET['category']);
    $whereClause .= " AND category = '$cat'";
}
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $whereClause .= " AND (title LIKE '%$search%' OR content LIKE '%$search%')";
}
$sql = "SELECT * FROM blog_posts WHERE $whereClause ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - WebWhizz Services</title>
    <!-- Fonts & Tailwind -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: { 
                        lime: { brand: '#bef264' }, 
                        dark: { card: '#1c1c1c', bg: '#0B0B0F', surface: '#1F1F23' } 
                    },
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>
    <style>
        /* Hide scrollbar for category list */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">
    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="pt-32 pb-12 px-4 max-w-7xl mx-auto border-b border-gray-100">
        <div class="max-w-3xl">
            <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
                Our Journal
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-[1.1]">
                Insights & <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">Articles.</span>
            </h1>
            <p class="text-gray-500 text-lg leading-relaxed">
                Expert thoughts on design, technology, and digital growth strategies. No fluff, just value.
            </p>
        </div>
    </section>

    <!-- SEARCH & FILTER -->
    <section class="px-4 py-10 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            
            <!-- Categories Dropdown (Updated) -->
            <div class="relative w-full md:w-auto">
                <select onchange="if(this.value) window.location.href='blog.php?category='+encodeURIComponent(this.value)" class="w-full md:w-72 bg-gray-50 border border-gray-200 rounded-full py-2.5 pl-6 pr-10 text-gray-900 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand appearance-none cursor-pointer text-sm font-medium transition-colors">
                    <option value="All">All Categories</option>
                    <?php 
                    $cats = [
                        'Graphic Design',
                        'Web and Mobile Design', 
                        'Mobile App Development',
                        'E-commerce Design',
                        'Social Media Account Setup',
                        'Content Creation & Curation',
                        'Social Media Management',
                        'Community Management',
                        'Influencer Marketing'
                    ];
                    foreach($cats as $c) {
                        $selected = (isset($_GET['category']) && $_GET['category'] == $c) ? 'selected' : '';
                        echo "<option value='$c' $selected>$c</option>";
                    }
                    ?>
                </select>
                <!-- Custom Arrow Icon -->
                <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-4 h-4 pointer-events-none"></i>
            </div>

            <!-- Search -->
            <form action="blog.php" method="GET" class="relative w-full md:w-80">
                <input type="text" name="search" placeholder="Search..." class="w-full bg-gray-50 border border-gray-200 rounded-full py-2.5 pl-10 pr-4 text-gray-900 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors text-sm" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 w-4 h-4"></i>
            </form>
        </div>
    </section>

    <!-- BLOG GRID (Immersive Cards like Index) -->
    <section class="px-4 pb-32 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <a href="post.php?id=<?php echo $row['id']; ?>" class="group block relative h-[450px] rounded-4xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
                        <!-- Background Image -->
                        <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8 transition-opacity duration-300">
                            
                            <!-- Category Badge -->
                            <span class="bg-white/20 backdrop-blur-md border border-white/10 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider w-fit mb-3">
                                <?php echo htmlspecialchars($row['category']); ?>
                            </span>
                            
                            <!-- Title -->
                            <h3 class="text-2xl font-bold text-white mb-3 leading-tight group-hover:text-lime-brand transition-colors">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </h3>
                            
                            <!-- Excerpt -->
                            <p class="text-gray-300 text-sm line-clamp-2 mb-4 opacity-90">
                                <?php echo strip_tags($row['content']); ?>
                            </p>
                            
                            <!-- Read More Link -->
                            <div class="flex items-center gap-2 text-lime-brand text-xs font-bold uppercase tracking-widest transform translate-y-4 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                Read Article <i data-lucide="arrow-right" class="w-3 h-3"></i>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-span-3 text-center py-20 bg-gray-50 rounded-4xl border border-gray-100">
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="file-search" class="w-8 h-8 text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">No articles found</h3>
                    <p class="text-gray-500">Try adjusting your search or category filter.</p>
                    <a href="blog.php" class="text-lime-600 font-bold text-sm mt-4 inline-block hover:underline">View all posts</a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script>lucide.createIcons();</script>
</body>
</html>