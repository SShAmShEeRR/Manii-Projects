<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$title = ""; $category = ""; $image_url = ""; $content = ""; $id = "";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $res = $conn->query("SELECT * FROM blog_posts WHERE id = $id");
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $title = $row['title']; $category = $row['category']; $image_url = $row['image_url']; $content = $row['content'];
    }
}

if (isset($_POST['save'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $category = $conn->real_escape_string($_POST['category']);
    $image_url = $conn->real_escape_string($_POST['image_url']);
    $content = $conn->real_escape_string($_POST['content']);
    $id = $_POST['id'];

    if ($id) {
        $sql = "UPDATE blog_posts SET title='$title', category='$category', image_url='$image_url', content='$content' WHERE id=$id";
    } else {
        $sql = "INSERT INTO blog_posts (title, category, image_url, content) VALUES ('$title', '$category', '$image_url', '$content')";
    }

    if ($conn->query($sql) === TRUE) header("Location: index.php");
    else echo "Error: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editor - WebWhizz Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-10">
    <div class="max-w-4xl mx-auto bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
        <div class="flex justify-between items-center mb-8 border-b border-gray-100 pb-6">
            <h2 class="text-3xl font-bold text-gray-900"><?php echo $id ? 'Edit Post' : 'Create New Post'; ?></h2>
            <a href="index.php" class="text-gray-500 hover:text-black font-medium">Cancel</a>
        </div>

        <form method="post" class="space-y-6">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div>
                <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Title</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>" class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl focus:outline-none focus:border-green-500 transition-colors" placeholder="Enter post title" required>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Category</label>
                    <select name="category" class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl focus:outline-none focus:border-green-500 transition-colors" required>
                        <?php 
                        $cats = ['Graphic Design', 'Web and Mobile Design', 'Mobile App Development', 'E-commerce Design', 'Social Media Account Setup', 'Content Creation & Curation', 'Social Media Management', 'Community Management', 'Influencer Marketing'];
                        foreach($cats as $c) {
                            $selected = ($c == $category) ? 'selected' : '';
                            echo "<option value='$c' $selected>$c</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Image URL (Unsplash)</label>
                    <input type="text" name="image_url" value="<?php echo htmlspecialchars($image_url); ?>" class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl focus:outline-none focus:border-green-500 transition-colors" placeholder="https://..." required>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Content</label>
                <textarea name="content" rows="12" class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl focus:outline-none focus:border-green-500 transition-colors" placeholder="Write your article here..." required><?php echo htmlspecialchars($content); ?></textarea>
            </div>

            <button type="submit" name="save" class="bg-[#bef264] hover:bg-black hover:text-[#bef264] text-black font-bold py-4 px-8 rounded-xl w-full transition-all shadow-lg">Save Post</button>
        </form>
    </div>
</body>
</html>