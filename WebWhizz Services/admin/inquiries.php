<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM project_inquiries WHERE id = $id");
    header("Location: inquiries.php");
}

$result = $conn->query("SELECT * FROM project_inquiries ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Inquiries - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-gray-100 min-h-screen p-10">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Project Inquiries</h1>
                <p class="text-gray-500 text-sm mt-1">Requests from the 'Start Similar Project' popup.</p>
            </div>
            <a href="index.php" class="text-blue-600 hover:underline font-medium">Back to Dashboard</a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider">Date</th>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider">Client</th>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider">Contact</th>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider">Service Interest</th>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider">Budget</th>
                            <th class="p-5 text-gray-500 font-bold text-xs uppercase tracking-wider text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="p-5 text-sm text-gray-500 whitespace-nowrap">
                                    <?php echo date("M d, Y", strtotime($row['created_at'])); ?><br>
                                    <span class="text-xs text-gray-400"><?php echo date("h:i A", strtotime($row['created_at'])); ?></span>
                                </td>
                                <td class="p-5">
                                    <span class="font-bold text-gray-900 block"><?php echo htmlspecialchars($row['name']); ?></span>
                                </td>
                                <td class="p-5 text-sm">
                                    <div class="flex flex-col gap-1">
                                        <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="text-blue-600 hover:underline"><?php echo htmlspecialchars($row['email']); ?></a>
                                        <a href="tel:<?php echo htmlspecialchars($row['phone']); ?>" class="text-gray-600"><?php echo htmlspecialchars($row['phone']); ?></a>
                                    </div>
                                </td>
                                <td class="p-5">
                                    <span class="bg-lime-100 text-lime-800 px-3 py-1 rounded-full text-xs font-bold border border-lime-200">
                                        <?php echo htmlspecialchars($row['service']); ?>
                                    </span>
                                </td>
                                <td class="p-5 font-medium text-gray-700"><?php echo htmlspecialchars($row['budget']); ?></td>
                                <td class="p-5 text-right">
                                    <a href="inquiries.php?delete=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700 font-bold text-sm" onclick="return confirm('Delete this inquiry?')">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="p-10 text-center text-gray-500">No inquiries yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>