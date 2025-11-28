<?php
session_start();
include '../db.php';

if (isset($_POST['login'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: index.php");
            exit();
        }
    }
    $error = "Invalid credentials";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebWhizz Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>body{font-family: 'Plus Jakarta Sans', sans-serif;}</style>
</head>
<body class="bg-[#0B0B0F] flex items-center justify-center h-screen text-white">
    <div class="bg-[#1c1c1c] p-10 rounded-3xl shadow-2xl w-96 border border-white/5">
        <div class="text-center mb-8">
            <span class="text-2xl font-bold text-white">WebWhizz</span><span class="text-[#bef264] text-2xl">.</span>
            <p class="text-gray-500 text-sm mt-2">Admin Access Panel</p>
        </div>
        
        <?php if(isset($error)) echo "<div class='bg-red-500/10 border border-red-500/50 text-red-500 text-sm p-3 rounded-lg mb-4 text-center'>$error</div>"; ?>
        
        <form method="post">
            <div class="mb-4">
                <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Username</label>
                <input type="text" name="username" class="w-full bg-[#2A2A2A] border border-white/10 rounded-xl p-3 text-white focus:outline-none focus:border-[#bef264] transition-colors" required>
            </div>
            <div class="mb-6">
                <label class="block text-xs font-bold uppercase text-gray-500 mb-2">Password</label>
                <input type="password" name="password" class="w-full bg-[#2A2A2A] border border-white/10 rounded-xl p-3 text-white focus:outline-none focus:border-[#bef264] transition-colors" required>
            </div>
            <button type="submit" name="login" class="w-full bg-[#bef264] hover:bg-white text-black font-bold py-3 rounded-xl transition-colors">Secure Login</button>
        </form>
    </div>
</body>
</html>