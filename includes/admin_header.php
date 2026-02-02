<?php
$config = require __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="system">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($config['app']['name']); ?> | Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="bg-slate-100 text-slate-900 font-poppins">
<div class="min-h-screen flex">
    <aside class="w-64 bg-slate-900 text-white flex flex-col">
        <div class="px-6 py-6 border-b border-slate-800">
            <p class="text-xs uppercase tracking-widest text-slate-400">Admin Panel</p>
            <h1 class="text-lg font-semibold mt-2">Pulse Control</h1>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2 text-sm">
            <a class="admin-link" href="/admin/index.php"><i class="fa-solid fa-chart-line"></i> Overview</a>
            <a class="admin-link" href="/admin/users.php"><i class="fa-solid fa-users"></i> Users</a>
            <a class="admin-link" href="/admin/posts.php"><i class="fa-solid fa-layer-group"></i> Posts</a>
            <a class="admin-link" href="/admin/reports.php"><i class="fa-solid fa-flag"></i> Reports</a>
            <a class="admin-link" href="/admin/settings.php"><i class="fa-solid fa-gear"></i> System Settings</a>
        </nav>
        <div class="px-6 py-4 border-t border-slate-800 text-xs text-slate-400">
            Full authority over platform operations.
        </div>
    </aside>
    <div class="flex-1">
        <header class="bg-white shadow-sm">
            <div class="max-w-5xl mx-auto px-8 py-4 flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400">Admin</p>
                    <h2 class="text-lg font-semibold">Govern & Protect</h2>
                </div>
                <div class="flex items-center gap-4 text-sm">
                    <span class="text-slate-500">admin@pulse.local</span>
                    <a href="/index.php" class="text-indigo-600">View User App</a>
                </div>
            </div>
        </header>
        <main class="max-w-5xl mx-auto px-8 py-8">
