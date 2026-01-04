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
                    <h1 class="text-3xl font-bold">Gestion des Avis</h1>
                    <button class="btn btn-secondary" onclick="my_modal_3.showModal()">
                        <i class="fa-solid fa-plus mr-2"></i> Ajouter un Avis
                    </button>
                </div>

                <!-- Reviews Table -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-zebra">
                                <thead>
                                    <tr>
                                        <th>Nom (name)</th>
                                        <th>Message</th>
                                        <th>Date (dateC)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($reviews as $review) : ?>
                                        <tr>
                                            <td><?= htmlspecialchars($review['name']) ?></td>
                                            <td class="max-w-xs truncate"><?= htmlspecialchars($review['message']) ?></td>
                                            <td><?= htmlspecialchars($review['dateC']) ?></td>
                                            <td>
                                                <div class="flex gap-2">
                                                    <a href="<?= PATH ?>edit?review=<?= $review['idR'] ?>"  class="btn btn-square btn-sm btn-info"><i class="fa-solid fa-pen"></i></a>
                                                    <a href="<?= PATH ?>reviews?delete=<?= $review['idR'] ?>" class="btn btn-square btn-sm btn-error"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>

    <!-- Modals using Checkbox Hack (No JS) -->

    <!-- Add Review Modal -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <form action="" method="post" class="w-full" enctype="multipart/form-data">
                <h3 class="font-bold text-lg mb-4">Ajouter un nouveau Avis</h3>
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text">Nom de la personne</span></label>
                    <input type="text" name="name" placeholder="Ex: Jean Dupont" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text">Message</span></label>
                    <textarea class="textarea textarea-bordered h-24" name="message" placeholder="Message ..."></textarea>
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