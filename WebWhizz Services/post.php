<?php
session_start();
include 'db.php';

// 1. Validate ID
if (!isset($_GET['id'])) {
    header("Location: blog.php");
    exit();
}

$id = $conn->real_escape_string($_GET['id']);

// 2. Fetch Current Post
$sql = "SELECT * FROM blog_posts WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header("Location: blog.php");
    exit();
}

$post = $result->fetch_assoc();

// 3. Calculate Reading Time
$word_count = str_word_count(strip_tags($post['content']));
$reading_time = ceil($word_count / 200); // Average 200 words per minute

// 4. Fetch Related Posts (Same Category, Exclude Current) for Sidebar
$cat_safe = $conn->real_escape_string($post['category']);
$related_sql = "SELECT * FROM blog_posts WHERE category = '$cat_safe' AND id != $id ORDER BY created_at DESC LIMIT 4";
$related_posts = $conn->query($related_sql);

// 5. Fetch Latest Posts (Any Category) for Sidebar
$latest_sql = "SELECT * FROM blog_posts WHERE id != $id ORDER BY created_at DESC LIMIT 4";
$latest_posts = $conn->query($latest_sql);

// 6. Handle Comment Submission
if (isset($_POST['submit_comment'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $comment = $conn->real_escape_string($_POST['comment']);
    
    $sql_comm = "INSERT INTO blog_comments (post_id, name, email, comment, is_approved) VALUES ($id, '$name', '$email', '$comment', 0)";
    
    if ($conn->query($sql_comm)) {
        $_SESSION['msg'] = "Comment submitted! Awaiting approval.";
    }
    header("Location: post.php?id=" . $id);
    exit();
}

// Session Message Logic
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?> - WebWhizz Insights</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: { lime: { brand: '#bef264' }, dark: { card: '#1c1c1c', bg: '#0B0B0F', surface: '#1F1F23' } }
                }
            }
        }
    </script>
    <style>
        /* Reading Progress Bar */
        #progress-bar { width: 0%; height: 4px; background: #bef264; position: fixed; top: 0; left: 0; z-index: 9999; transition: width 0.1s; }
        
        /* Floating Share Buttons */
        .share-sidebar { position: fixed; left: 20px; top: 50%; transform: translateY(-50%); z-index: 40; display: flex; flex-direction: column; gap: 10px; }
        @media (max-width: 1024px) { .share-sidebar { display: none; } }

        /* Blockquote Styling */
        blockquote { border-left: 4px solid #bef264; padding-left: 1rem; font-style: italic; color: #d1d5db; margin: 2rem 0; background: #1c1c1c; padding: 1.5rem; border-radius: 0 1rem 1rem 0; }
    </style>
</head>
<body class="bg-dark-bg text-white antialiased">
    
    <!-- Reading Progress Bar -->
    <div id="progress-bar"></div>

    <?php include 'header.php'; ?>

    <!-- Floating Share Buttons (Desktop) -->
    <div class="share-sidebar">
        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#0077b5] hover:text-white flex items-center justify-center transition-all text-gray-400"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-black hover:text-white flex items-center justify-center transition-all text-gray-400"><i data-lucide="twitter" class="w-5 h-5"></i></a>
        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#3b5998] hover:text-white flex items-center justify-center transition-all text-gray-400"><i data-lucide="facebook" class="w-5 h-5"></i></a>
        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-lime-brand hover:text-black flex items-center justify-center transition-all text-gray-400"><i data-lucide="link" class="w-5 h-5"></i></a>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="max-w-7xl mx-auto px-4 pt-32 pb-20">
        
        <!-- BREADCRUMBS -->
        <nav class="flex text-sm text-gray-500 mb-8 overflow-x-auto whitespace-nowrap">
            <a href="index.php" class="hover:text-lime-brand">Home</a>
            <span class="mx-2">/</span>
            <a href="blog.php" class="hover:text-lime-brand">Blog</a>
            <span class="mx-2">/</span>
            <a href="blog.php?category=<?php echo urlencode($post['category']); ?>" class="hover:text-lime-brand"><?php echo htmlspecialchars($post['category']); ?></a>
            <span class="mx-2">/</span>
            <span class="text-gray-300 truncate"><?php echo htmlspecialchars($post['title']); ?></span>
        </nav>

        <!-- HEADER INFO -->
        <div class="max-w-4xl">
            <span class="text-lime-brand text-xs font-bold uppercase tracking-widest border border-lime-brand/20 px-3 py-1 rounded-full mb-4 inline-block"><?php echo htmlspecialchars($post['category']); ?></span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight"><?php echo htmlspecialchars($post['title']); ?></h1>
            
            <div class="flex items-center gap-6 text-sm text-gray-400 mb-10 border-b border-white/10 pb-10">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-lime-brand/20 flex items-center justify-center text-lime-brand font-bold">W</div>
                    <div>
                        <p class="text-white font-bold">WebWhizz Team</p>
                        <p class="text-xs">Digital Experts</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-10 bg-white/10"></div>
                <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4"></i> <?php echo date("M d, Y", strtotime($post['created_at'])); ?>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="clock" class="w-4 h-4"></i> <?php echo $reading_time; ?> min read
                </div>
            </div>
        </div>

        <!-- SPLIT LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- LEFT COLUMN (Content) - 70% -->
            <div class="lg:col-span-8">
                
                <!-- Featured Image -->
                <div class="rounded-3xl overflow-hidden mb-12 shadow-2xl border border-white/5 aspect-video relative">
                    <img src="<?php echo htmlspecialchars($post['image_url']); ?>" class="w-full h-full object-cover">
                </div>

                <!-- Table of Contents (Auto-generated by JS) -->
                <div id="toc-container" class="bg-dark-card p-6 rounded-2xl border border-white/10 mb-10 hidden">
                    <h3 class="text-lg font-bold text-white mb-4">Table of Contents</h3>
                    <ul id="toc-list" class="space-y-2 text-sm text-gray-400"></ul>
                </div>

                <!-- Main Content -->
                <div id="article-content" class="prose prose-invert prose-lg max-w-none text-gray-300 leading-relaxed">
                    <?php echo nl2br(htmlspecialchars($post['content'])); ?>
                </div>

                <!-- Newsletter Signup (Inline) -->
                <div class="my-16 bg-lime-brand p-8 rounded-3xl text-black text-center">
                    <h3 class="text-2xl font-bold mb-2">Don't miss the next insight</h3>
                    <p class="mb-6 text-sm opacity-80">Join 5,000+ subscribers getting digital tips weekly.</p>
                    <div class="flex gap-2 max-w-md mx-auto">
                        <input type="email" placeholder="Your email" class="w-full bg-white px-4 py-3 rounded-full text-black focus:outline-none">
                        <button class="bg-black text-white px-6 py-3 rounded-full font-bold hover:bg-gray-800 transition-colors">Join</button>
                    </div>
                </div>

                <!-- DISCUSSION (Comments) - Matched Width -->
                <div class="mt-16 pt-10 border-t border-white/10">
                    <h3 class="text-2xl font-bold mb-8">Discussion</h3>
                    
                    <!-- Comment Form -->
                    <div class="bg-dark-card p-8 rounded-3xl border border-white/10 mb-10">
                        <h4 class="text-xl font-bold mb-4">Leave a Comment</h4>
                        <?php if($msg) echo "<p class='bg-lime-brand/20 text-lime-brand px-4 py-2 rounded-lg text-sm mb-4 border border-lime-brand/30'>$msg</p>"; ?>
                        <form method="post">
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <input type="text" name="name" placeholder="Name" class="bg-dark-bg border border-white/10 p-3 rounded-xl text-white focus:border-lime-brand focus:outline-none" required>
                                <input type="email" name="email" placeholder="Email" class="bg-dark-bg border border-white/10 p-3 rounded-xl text-white focus:border-lime-brand focus:outline-none" required>
                            </div>
                            <textarea name="comment" rows="3" placeholder="Share your thoughts..." class="w-full bg-dark-bg border border-white/10 p-3 rounded-xl text-white focus:border-lime-brand focus:outline-none mb-6" required></textarea>
                            <button type="submit" name="submit_comment" class="bg-lime-brand text-black px-8 py-3 rounded-full font-bold hover:bg-white transition-colors">Post Comment</button>
                        </form>
                    </div>

                    <!-- List Comments -->
                    <div class="space-y-6">
                        <?php
                        $comments = $conn->query("SELECT * FROM blog_comments WHERE post_id = $id AND is_approved = 1 ORDER BY created_at DESC");
                        if ($comments->num_rows > 0) {
                            while($c = $comments->fetch_assoc()) {
                                echo '<div class="bg-dark-card p-6 rounded-2xl border border-white/5">';
                                echo '<div class="flex justify-between items-center mb-2">';
                                echo '<h4 class="font-bold text-lime-brand">'.htmlspecialchars($c['name']).'</h4>';
                                echo '<span class="text-xs text-gray-500">'.date("M d, Y", strtotime($c['created_at'])).'</span>';
                                echo '</div>';
                                echo '<p class="text-gray-300 text-sm">'.htmlspecialchars($c['comment']).'</p>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p class="text-gray-500 italic">No comments yet. Start the conversation!</p>';
                        }
                        ?>
                    </div>
                </div>

            </div>

            <!-- RIGHT SIDEBAR (30%) -->
            <div class="lg:col-span-4 space-y-8">
                
                <!-- Search Widget -->
                <form action="blog.php" method="GET" class="relative">
                    <input type="text" name="search" placeholder="Search articles..." class="w-full bg-dark-card border border-white/10 rounded-full py-3 pl-12 pr-4 text-white focus:border-lime-brand focus:outline-none">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 w-4 h-4"></i>
                </form>

                <!-- Author Bio Box -->
                <div class="bg-dark-card p-6 rounded-2xl border border-white/10">
                    <h4 class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4">Written By</h4>
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-lime-brand flex items-center justify-center text-black font-bold text-xl">W</div>
                        <div>
                            <h3 class="font-bold text-white">WebWhizz Team</h3>
                            <p class="text-xs text-gray-500">Digital Strategy Experts</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mt-4 leading-relaxed">
                        We help brands scale through design, code, and content. Follow us for weekly insights.
                    </p>
                </div>

                <!-- Related Posts (Same Category) -->
                <div class="bg-dark-card p-6 rounded-2xl border border-white/10">
                    <h4 class="text-white font-bold mb-4 border-b border-white/10 pb-2">Related in <?php echo htmlspecialchars($post['category']); ?></h4>
                    <div class="space-y-4">
                        <?php if ($related_posts && $related_posts->num_rows > 0): 
                            while($r = $related_posts->fetch_assoc()): ?>
                            <a href="post.php?id=<?php echo $r['id']; ?>" class="flex gap-4 group">
                                <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0">
                                    <img src="<?php echo $r['image_url']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                                </div>
                                <div>
                                    <h5 class="text-sm font-bold text-gray-300 group-hover:text-lime-brand line-clamp-2 transition-colors"><?php echo $r['title']; ?></h5>
                                    <span class="text-xs text-gray-600"><?php echo date("M d", strtotime($r['created_at'])); ?></span>
                                </div>
                            </a>
                        <?php endwhile; else: echo "<p class='text-gray-500 text-sm'>No related posts.</p>"; endif; ?>
                    </div>
                </div>

                <!-- Latest Posts -->
                <div class="bg-dark-card p-6 rounded-2xl border border-white/10">
                    <h4 class="text-white font-bold mb-4 border-b border-white/10 pb-2">Latest Posts</h4>
                    <div class="space-y-4">
                        <?php if ($latest_posts && $latest_posts->num_rows > 0): 
                            while($l = $latest_posts->fetch_assoc()): ?>
                            <a href="post.php?id=<?php echo $l['id']; ?>" class="block group">
                                <h5 class="text-sm font-bold text-gray-300 group-hover:text-lime-brand line-clamp-1 transition-colors"><?php echo $l['title']; ?></h5>
                                <span class="text-xs text-gray-600 block mt-1"><?php echo $l['category']; ?></span>
                            </a>
                        <?php endwhile; endif; ?>
                    </div>
                </div>

                <!-- Sticky Service CTA -->
                <div class="sticky top-24 bg-gradient-to-br from-lime-brand to-lime-600 p-6 rounded-2xl text-black text-center">
                    <h3 class="font-bold text-xl mb-2">Need help with your project?</h3>
                    <p class="text-sm mb-6 opacity-90">Our team is ready to build your next big thing.</p>
                    <a href="contact.php" class="bg-black text-white w-full py-3 rounded-xl font-bold block hover:bg-gray-800 transition-colors">Get Free Consultation</a>
                </div>

            </div>
        </div>

        <!-- READ NEXT (Bottom Grid) -->
        <div class="mt-24 pt-12 border-t border-white/10">
            <h3 class="text-2xl font-bold mb-8">Read Next</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php 
                // Fetch 3 random posts for variety
                $random_posts = $conn->query("SELECT * FROM blog_posts WHERE id != $id ORDER BY RAND() LIMIT 3");
                if($random_posts): while($rand = $random_posts->fetch_assoc()): ?>
                    <a href="post.php?id=<?php echo $rand['id']; ?>" class="group block bg-dark-card rounded-2xl overflow-hidden border border-white/5 hover:border-lime-brand/50 transition-all">
                        <div class="h-40 overflow-hidden">
                            <img src="<?php echo $rand['image_url']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                        </div>
                        <div class="p-5">
                            <span class="text-lime-brand text-[10px] font-bold uppercase tracking-wider"><?php echo $rand['category']; ?></span>
                            <h4 class="font-bold text-white mt-2 group-hover:text-lime-brand transition-colors line-clamp-2"><?php echo $rand['title']; ?></h4>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
            </div>
        </div>

    </div>

    <?php include 'footer.php'; ?>
    
    <script>
        lucide.createIcons();

        // Reading Progress Bar Logic
        window.onscroll = function() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("progress-bar").style.width = scrolled + "%";
        };

        // Simple TOC Generator (Looks for H2 tags in content)
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.getElementById('article-content');
            const tocList = document.getElementById('toc-list');
            const headers = content.querySelectorAll('h2');
            
            if(headers.length > 0) {
                document.getElementById('toc-container').classList.remove('hidden');
                headers.forEach((header, index) => {
                    const id = 'header-' + index;
                    header.id = id;
                    const li = document.createElement('li');
                    li.innerHTML = `<a href="#${id}" class="hover:text-lime-brand transition-colors block border-l-2 border-transparent hover:border-lime-brand pl-2">${header.innerText}</a>`;
                    tocList.appendChild(li);
                });
            }
        });
    </script>
</body>
</html>