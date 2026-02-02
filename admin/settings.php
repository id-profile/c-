<?php include __DIR__ . '/../includes/admin_header.php'; ?>
<section class="surface-card rounded-3xl p-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">System Configuration</h1>
            <p class="text-sm text-slate-500 mt-1">Centralized settings for every module, policy, and integration.</p>
        </div>
        <button class="bg-slate-900 text-white px-5 py-2 rounded-full text-sm">Save Changes</button>
    </div>
    <div class="mt-6 space-y-6">
        <div class="card-outline">
            <h3 class="font-semibold">Permissions & Roles</h3>
            <p class="text-sm text-slate-500 mt-2">Define granular privileges and enforce admin-only operations.</p>
        </div>
        <div class="card-outline">
            <h3 class="font-semibold">Content Policy</h3>
            <p class="text-sm text-slate-500 mt-2">Configure moderation thresholds, auto-review, and escalation paths.</p>
        </div>
        <div class="card-outline">
            <h3 class="font-semibold">Realtime Infrastructure</h3>
            <p class="text-sm text-slate-500 mt-2">Monitor Socket.io clusters, WebSocket latency, and queue backlogs.</p>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin_footer.php'; ?>
