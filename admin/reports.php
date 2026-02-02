<?php include __DIR__ . '/../includes/admin_header.php'; ?>
<section class="surface-card rounded-3xl p-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Trust & Safety Reports</h1>
            <p class="text-sm text-slate-500 mt-1">Review system flags, user reports, and enforcement actions.</p>
        </div>
        <button class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm">Export Log</button>
    </div>
    <div class="mt-6 grid lg:grid-cols-2 gap-6">
        <div class="card-outline">
            <h3 class="font-semibold">High Priority</h3>
            <ul class="mt-4 text-sm text-slate-500 space-y-3">
                <li>Impersonation report on verified account</li>
                <li>Potential harassment escalation</li>
                <li>Suspicious media upload surge</li>
            </ul>
        </div>
        <div class="card-outline">
            <h3 class="font-semibold">Resolved Today</h3>
            <ul class="mt-4 text-sm text-slate-500 space-y-3">
                <li>Community guideline reminder sent to 24 users</li>
                <li>Auto-tagged content sanitized</li>
                <li>Rate limits enforced for 3 spam threads</li>
            </ul>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin_footer.php'; ?>
