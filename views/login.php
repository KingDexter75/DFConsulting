<!DOCTYPE html>
<html lang="fr" data-theme="synthwave">

<head>
    <?php include 'views/includes/head_dashboard.php'; ?>
</head>

<body class="min-h-screen bg-base-200 flex items-center justify-center p-4">

    <div class="card w-full max-w-md bg-base-100 shadow-2xl">
        <div class="card-body">
            <div class="flex flex-col items-center mb-6">
                <div class="w-16 h-16 bg-primary text-primary-content rounded-xl flex items-center justify-center mb-4 shadow-lg">
                    <i class="fa-solid fa-lock fa-2x"></i>
                </div>
                <h2 class="text-3xl font-bold text-center">Connexion</h2>
                <p class="text-base-content/60 text-center mt-2">Accédez à votre espace d'administration</p>
            </div>

            <form action="index.php">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text font-semibold">Adresse Email</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-base-content/40">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" placeholder="admin@example.com" class="input input-bordered w-full pl-10" required />
                    </div>
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Mot de passe</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-base-content/40">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" placeholder="••••••••" class="input input-bordered w-full pl-10" required />
                    </div>
                    <label class="label mt-1">
                        <a href="#" class="label-text-alt link link-hover text-primary">Mot de passe oublié ?</a>
                    </label>
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full text-lg">
                        Se connecter
                    </button>
                </div>
            </form>

            <div class="divider my-6">OU</div>

            <div class="text-center">
                <p class="text-base-content/70">Vous n'avez pas de compte ?</p>
                <a href="register.php" class="link link-primary font-bold mt-2 inline-block">Créer un compte maintenant</a>
            </div>
        </div>
    </div>

    <?php
    // ===== GESTION DU MESSAGE PHP =====
    $message = null;
    $type = null; // success | error

    if (isset($_GET['success'])) {
        $message = "Compte administrateur creer avec succes";
        $type = "success";
    }

    if (isset($_GET['error'])) {
        $message = "Vous ne disposez pas des droits d'administrateur pour acceder a cette page";
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