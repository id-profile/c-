<?php include __DIR__ . '/includes/user_header.php'; ?>
<section class="surface-card rounded-3xl p-8 animate-in">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Settings</h1>
            <p class="text-sm text-slate-500 mt-1">Personalize your experience and synchronize preferences across devices.</p>
        </div>
        <span class="badge">Profile</span>
    </div>

    <div class="mt-8 grid lg:grid-cols-2 gap-6">
        <div class="card-outline">
            <h2 class="font-semibold">Theme Preference</h2>
            <p class="text-sm text-slate-500 mt-2">Choose light, dark, or system themes. Your selection is stored per user and applied on every session.</p>
            <div class="mt-5 space-y-3">
                <label class="theme-option">
                    <div>
                        <p class="font-medium">Light</p>
                        <p class="text-xs text-slate-500">Bright and calming for daytime focus.</p>
                    </div>
                    <input type="radio" name="theme" value="light" data-theme-option>
                </label>
                <label class="theme-option">
                    <div>
                        <p class="font-medium">Dark</p>
                        <p class="text-xs text-slate-500">Low-light experience with reduced glare.</p>
                    </div>
                    <input type="radio" name="theme" value="dark" data-theme-option>
                </label>
                <label class="theme-option">
                    <div>
                        <p class="font-medium">System</p>
                        <p class="text-xs text-slate-500">Matches your operating system preference.</p>
                    </div>
                    <input type="radio" name="theme" value="system" data-theme-option>
                </label>
            </div>
        </div>
        <div class="card-outline">
            <h2 class="font-semibold">Communication</h2>
            <p class="text-sm text-slate-500 mt-2">Control notifications, mentions, and live update sensitivity.</p>
            <div class="mt-4 space-y-3 text-sm text-slate-600">
                <div class="flex items-center justify-between">
                    <span>Real-time notifications</span>
                    <span class="badge">Enabled</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Weekly digest emails</span>
                    <span class="badge">Enabled</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Live feed autoplay</span>
                    <span class="badge">Muted</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/user_footer.php'; ?>
