<?php include __DIR__ . '/../includes/admin_header.php'; ?>
<section class="grid lg:grid-cols-3 gap-6">
    <div class="card-outline">
        <p class="text-xs uppercase tracking-widest text-slate-400">Active Users</p>
        <h3 class="text-2xl font-semibold mt-3">124,950</h3>
        <p class="text-sm text-slate-500 mt-1">+4.8% this week</p>
    </div>
    <div class="card-outline">
        <p class="text-xs uppercase tracking-widest text-slate-400">Posts Reviewed</p>
        <h3 class="text-2xl font-semibold mt-3">9,320</h3>
        <p class="text-sm text-slate-500 mt-1">Moderation SLA: 12 min</p>
    </div>
    <div class="card-outline">
        <p class="text-xs uppercase tracking-widest text-slate-400">Security Flags</p>
        <h3 class="text-2xl font-semibold mt-3">48</h3>
        <p class="text-sm text-slate-500 mt-1">Auto-resolved: 32</p>
    </div>
</section>

<section class="surface-card rounded-3xl p-8 mt-8">
    <h2 class="text-xl font-semibold">Command Center</h2>
    <p class="text-sm text-slate-500 mt-2">Centralized controls for every system module and experience surface.</p>
    <div class="card-grid mt-6">
        <div class="card-outline">
            <h3 class="font-semibold">User Governance</h3>
            <p class="text-sm text-slate-500 mt-2">Suspend, verify, and audit accounts with full permission tracking.</p>
        </div>
        <div class="card-outline">
            <h3 class="font-semibold">Content Ops</h3>
            <p class="text-sm text-slate-500 mt-2">Review posts, comments, media, and apply safety policies instantly.</p>
        </div>
        <div class="card-outline">
            <h3 class="font-semibold">System Health</h3>
            <p class="text-sm text-slate-500 mt-2">Monitor performance, WebSocket throughput, and infrastructure alerts.</p>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin_footer.php'; ?>
