<!DOCTYPE html>
<html lang="fr" data-theme="white">

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
                    <h1 class="text-3xl font-bold">Gestion de la section Flyer</h1>
                    <button class="btn btn-secondary" onclick="my_modal_3.showModal()">
                        <i class="fa-solid fa-plus mr-2"></i> Ajouter un Flyer
                    </button>
                </div>

                <!-- flyers Table -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Flyers as $flyer) : ?>
                                        <tr>
                                            <th>
                                                <?= htmlspecialchars($flyer['idF']) ?>
                                            </th>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div class="avatar">
                                                        <div class="mask mask-squircle h-12 w-12">
                                                            <img
                                                                src="<?= PATH ?><?= htmlspecialchars($flyer['image']) ?>"
                                                                alt="Flyer<?= htmlspecialchars($flyer['idF']) ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <th>
                                                <div class="flex gap-2">
                                                    <a href="<?= PATH ?>edit?flyer=<?= $flyer['idF'] ?>" class="btn btn-square btn-sm btn-info"><i class="fa-solid fa-pen"></i></a>
                                                    <a href="<?= PATH ?>flyer?delete=<?= $flyer['idF'] ?>" class="btn btn-square btn-sm btn-error"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- foot -->
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>

    <!-- Modals using Checkbox Hack (No JS) -->

    <!-- Add flyer Modal -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <form action="" method="post" class="w-full" enctype="multipart/form-data">
                <h3 class="font-bold text-lg mb-4">Ajouter un flyer</h3>
                <div class="form-control w-full mb-4">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Selectionner une image</legend>
                        <input type="file" name="image" accept="image/png, image/jpeg, image/webp" class="file-input mt-2" />
                        <label class="label">Max size 2MB</label>
                    </fieldset>
                </div>
                <div class="modal-action">
                    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </dialog>



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