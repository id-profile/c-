<?php include __DIR__ . '/../includes/admin_header.php'; ?>
<section class="surface-card rounded-3xl p-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">User Management</h1>
            <p class="text-sm text-slate-500 mt-1">Full control over identities, roles, and verification status.</p>
        </div>
        <button class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm">Add User</button>
    </div>
    <div class="mt-6 overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead>
                <tr class="text-left text-xs uppercase tracking-widest text-slate-400">
                    <th class="py-3">User</th>
                    <th class="py-3">Role</th>
                    <th class="py-3">Status</th>
                    <th class="py-3">Risk Score</th>
                </tr>
            </thead>
            <tbody class="text-slate-600">
                <tr class="border-t">
                    <td class="py-4">Alicia M.</td>
                    <td class="py-4">Moderator</td>
                    <td class="py-4"><span class="badge">Verified</span></td>
                    <td class="py-4">2%</td>
                </tr>
                <tr class="border-t">
                    <td class="py-4">Jordan K.</td>
                    <td class="py-4">Member</td>
                    <td class="py-4"><span class="badge">Active</span></td>
                    <td class="py-4">8%</td>
                </tr>
                <tr class="border-t">
                    <td class="py-4">PulseHQ</td>
                    <td class="py-4">System</td>
                    <td class="py-4"><span class="badge">Locked</span></td>
                    <td class="py-4">0%</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin_footer.php'; ?>
