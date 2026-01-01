<!-- ===== TOAST ===== -->
<?php if ($message): ?>
    <div class="toast toast-top toast-end z-50" id="toast">
        <div class="alert alert-<?= $type === 'success' ? 'success' : 'error' ?>">
            <span><?= htmlspecialchars($message) ?></span>
        </div>
    </div>
<?php endif; ?>

<!-- ===== SCRIPT JS ===== -->
<script>
    setTimeout(() => {
        const toast = document.getElementById('toast');
        if (toast) {
            toast.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            setTimeout(() => toast.remove(), 500);
        }
    }, 3000);
</script>