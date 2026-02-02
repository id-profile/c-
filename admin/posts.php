<?php include __DIR__ . '/../includes/admin_header.php'; ?>
<section class="surface-card rounded-3xl p-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Post Moderation</h1>
            <p class="text-sm text-slate-500 mt-1">Queue overview for questions, answers, and multimedia content.</p>
        </div>
        <button class="bg-slate-900 text-white px-5 py-2 rounded-full text-sm">Open Queue</button>
    </div>
    <div class="mt-6 space-y-4">
        <div class="card-outline">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold">Scaling moderation with AI copilots</h3>
                <span class="badge">Review</span>
            </div>
            <p class="text-sm text-slate-500 mt-2">Flagged for sensitive context. Escalation required before publish.</p>
        </div>
        <div class="card-outline">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold">How to keep community guidelines visible?</h3>
                <span class="badge">Approved</span>
            </div>
            <p class="text-sm text-slate-500 mt-2">Auto-approved with verified author and low risk.</p>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin_footer.php'; ?>
