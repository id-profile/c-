<?php include __DIR__ . '/includes/user_header.php'; ?>
<section class="surface-card rounded-3xl p-10 mb-10 animate-in">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
        <div>
            <span class="badge">Real-time social platform</span>
            <h1 class="text-3xl lg:text-4xl font-semibold mt-4">Build trust through questions, answers, and conversations.</h1>
            <p class="text-slate-500 mt-4 max-w-2xl">Pulse Community is engineered for performance and safety, balancing high-speed interactions with admin-grade governance. Everything is optimized for scalable engagement across questions, threads, and live discussions.</p>
            <div class="flex items-center gap-4 mt-6">
                <button class="bg-indigo-600 text-white px-6 py-3 rounded-full shadow">Create Post</button>
                <button class="bg-indigo-50 text-indigo-600 px-6 py-3 rounded-full">Ask a Question</button>
            </div>
        </div>
        <div class="bg-indigo-50 rounded-3xl p-6 lg:w-80">
            <p class="text-sm text-indigo-600 font-semibold">Live insights</p>
            <div class="mt-4 space-y-3">
                <div class="flex justify-between text-sm">
                    <span>Active discussions</span>
                    <span class="font-semibold">12,084</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Moderation queue</span>
                    <span class="font-semibold">48</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Security status</span>
                    <span class="font-semibold text-green-600">Nominal</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid lg:grid-cols-3 gap-6 mb-12">
    <article class="surface-card rounded-3xl p-6 animate-in">
        <div class="flex items-center gap-3">
            <span class="text-indigo-500"><i class="fa-solid fa-bolt"></i></span>
            <h3 class="font-semibold">Performance-first feeds</h3>
        </div>
        <p class="text-sm text-slate-500 mt-4">Clusterized feeds, Intersection Observer infinite scroll, and cached assets keep the experience responsive.</p>
    </article>
    <article class="surface-card rounded-3xl p-6 animate-in">
        <div class="flex items-center gap-3">
            <span class="text-indigo-500"><i class="fa-solid fa-shield"></i></span>
            <h3 class="font-semibold">Secure by design</h3>
        </div>
        <p class="text-sm text-slate-500 mt-4">DOMPurify, JWT decoding, and strict admin controls harden every action and payload.</p>
    </article>
    <article class="surface-card rounded-3xl p-6 animate-in">
        <div class="flex items-center gap-3">
            <span class="text-indigo-500"><i class="fa-solid fa-signal"></i></span>
            <h3 class="font-semibold">Live interactions</h3>
        </div>
        <p class="text-sm text-slate-500 mt-4">Socket.io + WebSockets power notifications, messaging, and live update streams.</p>
    </article>
</section>

<section class="surface-card rounded-3xl p-8 mb-10 animate-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold">Trending conversations</h2>
            <p class="text-sm text-slate-500 mt-1">Updated <span data-time="2024-05-12T14:30:00Z"></span></p>
        </div>
        <button class="text-sm text-indigo-600">Filter</button>
    </div>
    <div class="mt-6 space-y-5">
        <div class="card-outline">
            <div class="flex items-center justify-between">
                <span class="text-xs uppercase tracking-widest text-slate-400">Question</span>
                <span class="badge">Verified</span>
            </div>
            <h3 class="text-lg font-semibold mt-3">How do we balance free speech with platform safety at scale?</h3>
            <p class="text-sm text-slate-500 mt-2">Community-wide answers with moderation highlights and sentiment analysis.</p>
            <div class="flex items-center gap-6 text-xs text-slate-400 mt-4">
                <span><i class="fa-regular fa-message"></i> 214 replies</span>
                <span><i class="fa-regular fa-heart"></i> 1.2k likes</span>
                <span><i class="fa-regular fa-clock"></i> 2h ago</span>
            </div>
        </div>
        <div class="card-outline">
            <div class="flex items-center justify-between">
                <span class="text-xs uppercase tracking-widest text-slate-400">Discussion</span>
                <span class="badge">Live</span>
            </div>
            <h3 class="text-lg font-semibold mt-3">Share your best onboarding workflow for new communities.</h3>
            <p class="text-sm text-slate-500 mt-2">Real-time polls and collaborative threads keep newcomers engaged.</p>
            <div class="flex items-center gap-6 text-xs text-slate-400 mt-4">
                <span><i class="fa-regular fa-message"></i> 98 replies</span>
                <span><i class="fa-regular fa-heart"></i> 560 likes</span>
                <span><i class="fa-regular fa-clock"></i> 35m ago</span>
            </div>
        </div>
    </div>
</section>

<section class="callout rounded-3xl p-8 animate-in">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
        <div>
            <h2 class="text-xl font-semibold">Admin-controlled. User-focused.</h2>
            <p class="text-sm text-slate-500 mt-2">Every system toggle, permission, and configuration is managed from the centralized admin center.</p>
        </div>
        <a href="/admin/index.php" class="bg-slate-900 text-white px-6 py-3 rounded-full">Open Admin Console</a>
    </div>
</section>
<?php include __DIR__ . '/includes/user_footer.php'; ?>
