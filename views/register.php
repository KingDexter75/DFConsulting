<!DOCTYPE html>
<html lang="fr" data-theme="synthwave">

<head>
    <?php include 'views/includes/head_dashboard.php'; ?>
</head>

<body class="min-h-screen bg-base-200 flex items-center justify-center p-4">

    <div class="card w-full max-w-lg bg-base-100 shadow-2xl">
        <div class="card-body">
            <div class="flex flex-col items-center mb-2">
                <div class="w-16 h-16 bg-secondary text-secondary-content rounded-xl flex items-center justify-center mb-2 shadow-lg">
                    <i class="fa-solid fa-user-plus fa-2x"></i>
                </div>
                <h2 class="text-3xl font-bold text-center">Inscription</h2>
                <p class="text-base-content/60 text-center mt-2">Rejoignez notre plateforme d'administration</p>
            </div>

            <form action="" method="POST">

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Nom</span>
                    </label>
                    <input type="text" name="name" placeholder="Jean Dupont" class="input input-bordered w-full" required />
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Adresse Email</span>
                    </label>
                    <input type="email" name="email" placeholder="jean.dupont@example.com" class="input input-bordered w-full" required />
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Mot de passe</span>
                    </label>
                    <input type="password" name="password" placeholder="••••••••" class="input input-bordered w-full" required />
                </div>

                <div class="form-control mt-6">
                    <button type="submit" name="submit" class="btn btn-secondary w-full text-lg">
                        Créer mon compte
                    </button>
                </div>
            </form>

            <div class="divider my-6">OU</div>

            <div class="text-center">
                <p class="text-base-content/70">Vous avez déjà un compte ?</p>
                <a href="<?= PATH ?>login" class="link link-secondary font-bold mt-2 inline-block">Se connecter</a>
            </div>
        </div>
    </div>

    <?php
    // ===== GESTION DU MESSAGE PHP =====
    $message = null;
    $type = null; // success | error

    if (isset($_GET['error'])) {
        $message = "Email deja utilisé.";
        $type = "error";
    }
    ?>
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

</body>

</html>