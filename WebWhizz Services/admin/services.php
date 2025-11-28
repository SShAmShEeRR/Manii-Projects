<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Handle Add Service
if (isset($_POST['add_service'])) {
    $name = $conn->real_escape_string($_POST['name']);
    if(!empty($name)) {
        $conn->query("INSERT INTO services (name) VALUES ('$name')");
    }
    header("Location: services.php");
}

// Handle Delete Service
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM services WHERE id = $id");
    header("Location: services.php");
}

// Handle Edit Service
if (isset($_POST['update_service'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $conn->query("UPDATE services SET name = '$name' WHERE id = $id");
    header("Location: services.php");
}

$services = $conn->query("SELECT * FROM services");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Services - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-10">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Manage Services</h1>
            <a href="index.php" class="text-blue-500 hover:underline">Back to Dashboard</a>
        </div>

        <!-- Add New Service -->
        <div class="bg-white p-6 rounded-xl shadow mb-8">
            <form method="post" class="flex gap-4">
                <input type="text" name="name" placeholder="Enter new service name..." class="flex-1 border p-3 rounded" required>
                <button type="submit" name="add_service" class="bg-green-500 text-white px-6 py-3 rounded font-bold hover:bg-green-600">Add Service</button>
            </form>
        </div>

        <!-- Services List -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4 w-full">Service Name</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $services->fetch_assoc()): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <form method="post">
                            <td class="p-4 text-gray-500">#<?php echo $row['id']; ?></td>
                            <td class="p-4">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" class="w-full bg-transparent border-b border-transparent focus:border-blue-500 focus:outline-none">
                            </td>
                            <td class="p-4 text-right flex justify-end gap-2">
                                <button type="submit" name="update_service" class="text-blue-600 hover:underline text-sm">Update</button>
                                <span class="text-gray-300">|</span>
                                <a href="services.php?delete=<?php echo $row['id']; ?>" class="text-red-500 hover:underline text-sm" onclick="return confirm('Delete this service?')">Delete</a>
                            </td>
                        </form>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>