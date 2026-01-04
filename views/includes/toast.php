<!-- ===== TOAST ===== -->
<?php if ($message): ?>
    <div class="toast toast-top toast-end z-50" id="toast">
        <div role="alert" class="alert alert-<?= $type = match ($type) {
                                                    "success" => "success",
                                                    "error" => "error",
                                                    default => "warning"
                                                } ?> alert-dash">
            <span><?= htmlspecialchars($message) ?></span>
        </div>
    </div>
<?php endif; ?>

<!-- ===== SCRIPT JS ===== -->
<script>
    setTimeout(() => {
        const toast = document.getElementById('toast');
        if (toast) {
            toast.classList.add('opacity-0', 'transition-opacity', 'duration-100');
            setTimeout(() => toast.remove(), 100);
        }
    }, 3000);
</script>