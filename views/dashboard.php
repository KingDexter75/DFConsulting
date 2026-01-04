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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">Admin Dashboard</a>
                </div>
            </div>

            <!-- Page Content -->
            <main class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-3xl font-bold">Tableau de Bord</h1>
                    <div class="badge badge-primary p-4">Bienvenue, <?= $_SESSION['admin']['name'] ?></div>
                </div>

                <!-- Stats Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fa-solid fa-newspaper fa-2x"></i>
                            </div>
                            <div class="stat-title">Total Blogs</div>
                            <div class="stat-value text-primary"><?= $totalBlogs ?></div>
                        </div>
                    </div>

                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-secondary">
                                <i class="fa-solid fa-comment-dots fa-2x"></i>
                            </div>
                            <div class="stat-title">Avis Clients</div>
                            <div class="stat-value text-secondary"><?= $totalReviews ?></div>
                        </div>
                    </div>

                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-accent">
                                <i class="fa-solid fa-users fa-2x"></i>
                            </div>
                            <div class="stat-title">Comptes Crees</div>
                            <div class="stat-value text-accent"><?= $totalAdmins ?></div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Derniers Blogs</h2>
                            <div class="overflow-x-auto">
                                <table class="table table-zebra">
                                    <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>Contenu</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($twoLastBlogs as $blog) : ?>
                                            <tr>
                                                <td><?= $blog['title'] ?></td>
                                                <td><?= $blog['content'] ?></td>
                                                <td><?= $blog['date'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-actions justify-end mt-4">
                                <a href="<?= PATH ?>blogs" class="btn btn-primary btn-sm">Gérer les blogs</a>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Derniers Avis</h2>
                            <div class="overflow-x-auto">
                                <table class="table table-zebra">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($twoLastReviews as $review) : ?>
                                            <tr>
                                                <td><?= $review['name'] ?></td>
                                                <td><?= $review['message'] ?></td>
                                                <td><?= $review['dateC'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-actions justify-end mt-4">
                                <a href="<?= PATH ?>reviews" class="btn btn-secondary btn-sm">Gérer les avis</a>
                            </div>
                        </div>
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