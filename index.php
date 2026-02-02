<?php include __DIR__ . '/includes/user_header.php'; ?>
<section class="app-shell">
    <aside class="hidden lg:block">
        <div class="sidebar-card sticky-panel">
            <p class="text-xs uppercase tracking-widest text-slate-400">Explore</p>
            <div class="mt-4 space-y-2 text-sm">
                <a class="nav-pill" href="/index.php"><i class="fa-solid fa-house"></i> Home</a>
                <a class="nav-pill" href="#"><i class="fa-solid fa-fire"></i> Trending</a>
                <a class="nav-pill" href="#"><i class="fa-solid fa-hashtag"></i> Communities</a>
                <a class="nav-pill" href="#"><i class="fa-solid fa-message"></i> Messages</a>
                <a class="nav-pill" href="/settings.php"><i class="fa-solid fa-gear"></i> Settings</a>
                <a class="nav-pill" href="/admin/index.php"><i class="fa-solid fa-shield"></i> Admin</a>
            </div>
            <div class="mt-6 callout rounded-2xl p-4">
                <h3 class="font-semibold">Start a community</h3>
                <p class="text-xs text-slate-500 mt-2">Launch a space with full moderation tools and analytics.</p>
                <button class="accent-button w-full mt-4">Create space</button>
            </div>
        </div>
    </aside>

    <section>
        <div class="feed-card animate-in">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <span class="badge">Live feed</span>
                    <h1 class="text-2xl sm:text-3xl font-semibold mt-3">Ask, debate, and share updates in real time.</h1>
                    <p class="text-sm text-slate-500 mt-3">A Reddit-style community feed meets the speed of X. Every post is moderated, searchable, and ready for live conversation.</p>
                </div>
                <div class="bg-sky-50 rounded-2xl p-4 sm:w-64">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Today</p>
                    <div class="mt-3 space-y-2 text-sm text-slate-600">
                        <div class="flex justify-between"><span>Active rooms</span><span class="font-semibold">184</span></div>
                        <div class="flex justify-between"><span>Live reports</span><span class="font-semibold">32</span></div>
                        <div class="flex justify-between"><span>Latency</span><span class="font-semibold text-green-600">34ms</span></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-3 mt-6">
                <button class="accent-button">Create Post</button>
                <button class="ghost-button">Ask Question</button>
                <span class="text-xs text-slate-400">Updated <span data-time="2024-05-12T14:30:00Z"></span></span>
            </div>
        </div>

        <div class="feed-card animate-in">
            <div class="flex items-start gap-4">
                <div class="h-12 w-12 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-2 text-sm">
                        <span class="font-semibold">PulseHQ</span>
                        <span class="text-slate-400">@pulse</span>
                        <span class="text-slate-400">• 2h ago</span>
                        <span class="badge">Verified</span>
                    </div>
                    <h2 class="text-lg font-semibold mt-2">How do we balance free speech with platform safety at scale?</h2>
                    <p class="text-sm text-slate-500 mt-2">Community-wide answers with moderation highlights, AI triage, and transparent enforcement summaries.</p>
                    <div class="flex flex-wrap items-center gap-6 text-xs text-slate-400 mt-4">
                        <span><i class="fa-regular fa-message"></i> 214 replies</span>
                        <span><i class="fa-solid fa-retweet"></i> 74 reposts</span>
                        <span><i class="fa-regular fa-heart"></i> 1.2k likes</span>
                        <span><i class="fa-regular fa-bookmark"></i> Save</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="feed-card animate-in">
            <div class="flex items-start gap-4">
                <div class="h-12 w-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-2 text-sm">
                        <span class="font-semibold">r/Onboarding</span>
                        <span class="text-slate-400">Community</span>
                        <span class="text-slate-400">• 35m ago</span>
                        <span class="badge">Live</span>
                    </div>
                    <h2 class="text-lg font-semibold mt-2">Share your best onboarding workflow for new communities.</h2>
                    <p class="text-sm text-slate-500 mt-2">Real-time polls, welcome tours, and automated moderation briefs are keeping teams aligned.</p>
                    <div class="flex flex-wrap items-center gap-6 text-xs text-slate-400 mt-4">
                        <span><i class="fa-regular fa-message"></i> 98 replies</span>
                        <span><i class="fa-solid fa-retweet"></i> 21 reposts</span>
                        <span><i class="fa-regular fa-heart"></i> 560 likes</span>
                        <span><i class="fa-regular fa-bookmark"></i> Save</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="hidden xl:block">
        <div class="sidebar-card sticky-panel space-y-6">
            <div>
                <p class="text-xs uppercase tracking-widest text-slate-400">Trending Spaces</p>
                <div class="mt-4 space-y-3 text-sm">
                    <div class="flex items-center justify-between">
                        <span>#TrustAndSafety</span>
                        <span class="badge">12k</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>#RealtimeOps</span>
                        <span class="badge">8.4k</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>#CreatorEconomy</span>
                        <span class="badge">6.1k</span>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-200 pt-4">
                <p class="text-xs uppercase tracking-widest text-slate-400">Safety Pulse</p>
                <div class="mt-3 space-y-2 text-sm text-slate-500">
                    <p>Moderation queue SLA: <span class="font-semibold text-slate-700">12 min</span></p>
                    <p>System health: <span class="font-semibold text-green-600">Nominal</span></p>
                    <p>Incident reports today: <span class="font-semibold text-slate-700">48</span></p>
                </div>
                <button class="ghost-button w-full mt-4">View reports</button>
            </div>
        </div>
    </aside>
</section>
<?php include __DIR__ . '/includes/user_footer.php'; ?>
