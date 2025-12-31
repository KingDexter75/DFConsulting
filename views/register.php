<!DOCTYPE html>
<html lang="fr" data-theme="synthwave">

<head>
    <?php include 'views/includes/head_dashboard.php'; ?>
</head>

<body class="min-h-screen bg-base-200 flex items-center justify-center p-4">

    <div class="card w-full max-w-lg bg-base-100 shadow-2xl">
        <div class="card-body">
            <div class="flex flex-col items-center mb-6">
                <div class="w-16 h-16 bg-secondary text-secondary-content rounded-xl flex items-center justify-center mb-4 shadow-lg">
                    <i class="fa-solid fa-user-plus fa-2x"></i>
                </div>
                <h2 class="text-3xl font-bold text-center">Inscription</h2>
                <p class="text-base-content/60 text-center mt-2">Rejoignez notre plateforme d'administration</p>
            </div>

            <form action="login.php">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold">Nom complet</span>
                        </label>
                        <input type="text" placeholder="Jean Dupont" class="input input-bordered w-full" required />
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold">Nom d'utilisateur</span>
                        </label>
                        <input type="text" placeholder="jdupont" class="input input-bordered w-full" required />
                    </div>
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Adresse Email</span>
                    </label>
                    <input type="email" placeholder="jean.dupont@example.com" class="input input-bordered w-full" required />
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Mot de passe</span>
                    </label>
                    <input type="password" placeholder="••••••••" class="input input-bordered w-full" required />
                </div>

                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text font-semibold">Confirmer le mot de passe</span>
                    </label>
                    <input type="password" placeholder="••••••••" class="input input-bordered w-full" required />
                </div>

                <div class="form-control mt-6">
                    <label class="label cursor-pointer justify-start gap-3">
                        <input type="checkbox" class="checkbox checkbox-primary" required />
                        <span class="label-text">J'accepte les <a href="#" class="link link-hover text-primary">conditions d'utilisation</a></span>
                    </label>
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-secondary w-full text-lg">
                        Créer mon compte
                    </button>
                </div>
            </form>

            <div class="divider my-6">OU</div>

            <div class="text-center">
                <p class="text-base-content/70">Vous avez déjà un compte ?</p>
                <a href="login.php" class="link link-secondary font-bold mt-2 inline-block">Se connecter</a>
            </div>
        </div>
    </div>

</body>

</html>