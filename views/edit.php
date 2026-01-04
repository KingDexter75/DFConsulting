<!DOCTYPE html>
<html lang="fr" data-theme="synthwave">

<head>
    <?php include 'views/includes/head_dashboard.php'; ?>
</head>

<body class="min-h-screen bg-base-200">

    <div class="drawer lg:drawer-open">

        <!-- Sidebar -->
        <?php include 'views/includes/sidebar.php'; ?>

        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="navbar bg-base-100 shadow-sm lg:hidden">
                <div class="flex-none">
                    <label for="my-drawer-2" class="btn btn-square btn-ghost drawer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">Admin Dashboard</a>
                </div>
            </div>

            <!-- Page Content -->
            <main class="p-6 space-y-10">

                <!-- ===== HEADER ===== -->
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold">Gestion <?= $title = ($_GET["blog"]) ? "de blog" : "d'avis" ?></h1>
                </div>

                <!-- ===== FORMULAIRE BLOG ===== -->
                <div class="card bg-base-100 shadow-xl max-w-4xl">

                    <div class="card-body">

                        <h2 class="card-title text-2xl mb-4">
                            Modifier un <?= $title = ($_GET['blog']) ? 'blog' : 'avis' ?>
                        </h2>

                        <?php if (isset($_GET['blog'])) { ?>
                            <form method="POST" action="" class="space-y-6" enctype="multipart/form-data">

                                <!-- Titre -->
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text font-semibold">Titre</span>
                                    </label>
                                    <input type="text" name="title" class="input input-bordered input-primary w-full" value="<?= $blog['title'] ?>" required>
                                </div>

                                <!-- Contenu -->
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text font-semibold">Contenu de l’article</span>
                                    </label>
                                    <textarea name="content" rows="7"
                                        class="textarea textarea-bordered textarea-primary w-full" required><?= $blog['content'] ?></textarea>
                                    <required></textarea>
                                </div>

                                <!-- Image -->
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text font-semibold">Image</span>
                                    </label>
                                    <input type="file" name="image" value="<?= $blog['imagePath'] ?>" class="input input-bordered w-full">
                                </div>

                                <!-- Boutons -->
                                <div class="flex justify-end gap-4 pt-4">
                                    <a href="<?= PATH ?>blogs" class="btn btn-secondary">Annuler</a>
                                    <button type="submit" name="submit_blog" class="btn btn-primary">
                                        Enregistrer le blog
                                    </button>
                                </div>

                            </form>
                        <?php } else { ?>
                            <form method="POST" action="" class="space-y-6">

                                <!-- Titre -->
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text font-semibold">Nom</span>
                                    </label>
                                    <input type="text" name="name" value="<?= $review['name'] ?>"
                                        placeholder="Ex : Jean" required>
                                </div>

                                <!-- Contenu -->
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text font-semibold">Message</span>
                                    </label>
                                    <textarea name="message" rows="7"
                                        class="textarea textarea-bordered textarea-primary w-full" required><?= $review['message'] ?></textarea>
                                </div>

                                <!-- Boutons -->
                                <div class="flex justify-end gap-4 pt-4">
                                    <a href="<?= PATH ?>reviews" class="btn btn-secondary">Annuler</a>
                                    <button type="submit" name="submit_review" class="btn btn-primary">
                                        Enregistrer l’article
                                    </button>
                                </div>

                            </form>
                        <?php } ?>

                    </div>
                </div>

            </main>

        </div>

    </div>

    <?php
    // ===== GESTION DU MESSAGE PHP =====
    // On récupère les messages s'ils existent, sinon null
    $message = $_SESSION['message'] ?? null;
    $type = $_SESSION['type'] ?? null;
    ?>

    <!-- ===== TOAST ===== -->
    <?php include 'views/includes/toast.php'; ?>

    <!-- Script pour appeler le nettoyage de session après la disparition du toast -->
    <?php if ($message): ?>
        <script>
            // Attendre que le toast disparaisse (3000ms dans toast.php + un peu de marge)
            setTimeout(() => {
                // Appel AJAX vers le contrôleur pour supprimer le message de la session
                fetch('<?= PATH ?>blogs?action=clear_flash');
            }, 3500);
        </script>
    <?php endif; ?>

</body>

</html>