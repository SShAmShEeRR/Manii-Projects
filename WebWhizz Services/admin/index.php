<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Handle Delete Post
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM blog_posts WHERE id = $id");
    $conn->query("DELETE FROM blog_comments WHERE post_id = $id");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC");

// Fetch counts
$pending_reviews = $conn->query("SELECT COUNT(*) as count FROM site_reviews WHERE is_approved = 0")->fetch_assoc()['count'];
$pending_comments = $conn->query("SELECT COUNT(*) as count FROM blog_comments WHERE is_approved = 0")->fetch_assoc()['count'];
$total_inquiries = $conn->query("SELECT COUNT(*) as count FROM project_inquiries")->fetch_assoc()['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebWhizz Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Top Navigation -->
    <nav class="bg-[#0B0B0F] text-white p-4 px-8 flex justify-between items-center shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <h1 class="text-xl font-bold tracking-wide">WebWhizz <span class="text-[#bef264]">Admin</span></h1>
        </div>
        <div class="flex gap-6 items-center">
            <a href="../index.php" target="_blank" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                View Live Site
            </a>
            <a href="logout.php" class="bg-red-500/10 text-red-400 hover:bg-red-500 hover:text-white px-4 py-2 rounded-full text-sm font-bold transition-all">Logout</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto mt-10 p-6">
        
        <!-- Welcome Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Dashboard Overview</h2>
            <p class="text-gray-500">Welcome back, Admin. Here is what needs your attention today.</p>
        </div>

        <!-- Management Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            
            <!-- Inquiries Card (NEW) -->
            <a href="inquiries.php" class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-gray-100 group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Project Inquiries</h3>
                <p class="text-gray-500 text-sm mb-6">View requests from the portfolio popup form.</p>
                <div class="flex items-center gap-2">
                    <span class="text-purple-600 font-bold text-sm group-hover:underline">View Inquiries &rarr;</span>
                    <?php if($total_inquiries > 0): ?>
                        <span class="bg-purple-100 text-purple-600 text-xs font-bold px-2 py-1 rounded-full"><?php echo $total_inquiries; ?> Total</span>
                    <?php endif; ?>
                </div>
            </a>

            <!-- Services Card -->
            <a href="services.php" class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-gray-100 group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Services</h3>
                <p class="text-gray-500 text-sm mb-6">Add, edit, or remove services listed on your forms.</p>
                <span class="text-indigo-500 font-bold text-sm group-hover:underline">Manage Services &rarr;</span>
            </a>
            
            <!-- Site Reviews Card -->
            <a href="reviews.php" class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-gray-100 group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-[#bef264]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Site Reviews</h3>
                <p class="text-gray-500 text-sm mb-6">Approve customer testimonials.</p>
                <div class="flex items-center gap-2">
                    <span class="text-[#bef264] font-bold text-sm group-hover:underline">Manage Reviews &rarr;</span>
                    <?php if($pending_reviews > 0): ?>
                        <span class="bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full"><?php echo $pending_reviews; ?> Pending</span>
                    <?php endif; ?>
                </div>
            </a>

            <!-- Blog Comments Card -->
            <a href="comments.php" class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-gray-100 group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Blog Comments</h3>
                <p class="text-gray-500 text-sm mb-6">Moderate article discussions.</p>
                <div class="flex items-center gap-2">
                    <span class="text-blue-500 font-bold text-sm group-hover:underline">Manage Comments &rarr;</span>
                    <?php if($pending_comments > 0): ?>
                        <span class="bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full"><?php echo $pending_comments; ?> Pending</span>
                    <?php endif; ?>
                </div>
            </a>

            <!-- Create Post Card -->
            <a href="editor.php" class="bg-[#bef264] p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-transparent group relative overflow-hidden md:col-span-4 text-center flex flex-col items-center">
                <h3 class="text-2xl font-bold text-black mb-2">Write New Article</h3>
                <p class="text-black/70 text-sm mb-6 max-w-md mx-auto">Share new insights, updates, or case studies with your audience.</p>
                <span class="bg-black text-white px-6 py-3 rounded-full text-sm font-bold group-hover:bg-white group-hover:text-black transition-colors">Start Writing +</span>
            </a>

        </div>

        <!-- Blog Posts Table -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                <h3 class="text-lg font-bold text-gray-800">Published Articles</h3>
                <span class="text-xs text-gray-500 font-medium"><?php echo $result->num_rows; ?> Total Posts</span>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="p-5 text-gray-500 text-xs font-bold uppercase tracking-wider w-20">ID</th>
                            <th class="p-5 text-gray-500 text-xs font-bold uppercase tracking-wider">Title</th>
                            <th class="p-5 text-gray-500 text-xs font-bold uppercase tracking-wider">Category</th>
                            <th class="p-5 text-gray-500 text-xs font-bold uppercase tracking-wider">Date</th>
                            <th class="p-5 text-gray-500 text-xs font-bold uppercase tracking-wider text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="p-5 text-gray-400 font-mono text-sm">#<?php echo $row['id']; ?></td>
                                <td class="p-5 font-bold text-gray-800"><?php echo htmlspecialchars($row['title']); ?></td>
                                <td class="p-5 text-sm text-gray-500"><?php echo htmlspecialchars($row['category']); ?></td>
                                <td class="p-5 text-gray-500 text-sm"><?php echo date("M d, Y", strtotime($row['created_at'])); ?></td>
                                <td class="p-5 text-right">
                                    <a href="editor.php?id=<?php echo $row['id']; ?>" class="text-blue-600 font-bold text-sm hover:underline mr-4">Edit</a>
                                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="text-red-500 font-bold text-sm hover:underline" onclick="return confirm('Delete this post?')">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="p-10 text-center text-gray-500">No articles yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>