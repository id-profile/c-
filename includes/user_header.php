<?php
$config = require __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="system">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($config['app']['name']); ?> | User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cropperjs@1.6.1/dist/cropper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3.10.0/notyf.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="bg-slate-50 text-slate-900 font-poppins">
<header class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="text-sky-500 text-2xl"><i class="fa-brands fa-x-twitter"></i></span>
                <span class="font-semibold text-lg">Pulse Social</span>
                <span class="badge">Reddit + X</span>
            </div>
            <button class="lg:hidden text-slate-500">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="flex-1 lg:px-10">
            <input class="search-input" type="text" placeholder="Search topics, users, or communities">
        </div>
        <div class="flex items-center gap-3 text-sm">
            <button class="ghost-button">Log in</button>
            <button class="accent-button">Create</button>
        </div>
    </nav>
</header>
<main class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 pb-24">
