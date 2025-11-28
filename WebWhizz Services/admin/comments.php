<?php
session_start();
include '../db.php';
if (!isset($_SESSION['admin_logged_in'])) header("Location: login.php");

// Approve
if (isset($_GET['approve'])) {
    $id = intval($_GET['approve']);
    $conn->query("UPDATE blog_comments SET is_approved = 1 WHERE id = $id");
    header("Location: comments.php");
}
// Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM blog_comments WHERE id = $id");
    header("Location: comments.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Manage Comments</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-100 p-10">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Blog Comments</h1>
            <a href="index.php" class="text-blue-500 hover:underline">Back to Dashboard</a>
        </div>
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="p-4">Author</th>
                        <th class="p-4">Comment</th>
                        <th class="p-4">Post ID</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $res = $conn->query("SELECT * FROM blog_comments ORDER BY created_at DESC");
                    while($row = $res->fetch_assoc()): 
                    ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4 font-bold"><?php echo $row['name']; ?><br><span class="text-xs text-gray-500 font-normal"><?php echo $row['email']; ?></span></td>
                        <td class="p-4 text-sm text-gray-600 max-w-md"><?php echo $row['comment']; ?></td>
                        <td class="p-4 text-xs text-gray-500">#<?php echo $row['post_id']; ?></td>
                        <td class="p-4">
                            <?php echo $row['is_approved'] ? '<span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Live</span>' : '<span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold">Pending</span>'; ?>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <?php if(!$row['is_approved']): ?>
                                <a href="comments.php?approve=<?php echo $row['id']; ?>" class="text-green-600 font-bold hover:underline">Approve</a>
                            <?php endif; ?>
                            <a href="comments.php?delete=<?php echo $row['id']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Delete?')">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>