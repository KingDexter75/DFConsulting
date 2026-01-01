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
                    <h1 class="text-3xl font-bold">Gestion des Blogs</h1>
                    <button class="btn btn-primary" onclick="my_modal_3.showModal()">
                        <i class="fa-solid fa-plus mr-2"></i> Ajouter un Blog
                    </button>
                </div>

                <!-- Blogs Table -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table table-zebra">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($blogs as $blog) : ?>
                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="w-12 rounded"><img src="<?= $blog['imagePath'] ?>" alt="Blog" /></div>
                                                </div>
                                            </td>
                                            <td class="max-w-xs truncate"><?= $blog['title'] ?></td>
                                            <td class="max-w-xs truncate"><?= $blog['content'] ?></td>
                                            <td><?= $blog['date'] ?></td>
                                            <td>
                                                <div class="flex gap-2">
                                                    <label for="edit_blog_modal" class="btn btn-square btn-sm btn-info"><i class="fa-solid fa-pen"></i></label>
                                                    <button class="btn btn-square btn-sm btn-error"><i class="fa-solid fa-trash"></i></button>
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

    <!-- Add Blog Modal -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <form action="" method="post" class="w-full" enctype="multipart/form-data">
                <h3 class="font-bold text-lg mb-4">Ajouter un nouveau Blog</h3>
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text">Titre</span></label>
                    <input type="text" name="title" placeholder="ex: Visa travail pour l'italie" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text">Contenu</span></label>
                    <textarea class="textarea textarea-bordered h-24" name="content" placeholder="Contenu du blog..."></textarea>
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label"><span class="label-text">Image (imagePath)</span></label>
                    <input type="file" name="image" accept=".jpg, .jpeg, .png" class="file-input file-input-bordered w-full" />
                </div>
                <div class="modal-action">
                    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </dialog>

    <!-- Edit Blog Modal -->
    <input type="checkbox" id="edit_blog_modal" class="modal-toggle" />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-4">Modifier le Blog</h3>
            <div class="form-control w-full mb-4">
                <label class="label"><span class="label-text">ID Blog (idB)</span></label>
                <input type="text" value="B-001" class="input input-bordered w-full" disabled />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label"><span class="label-text">Contenu</span></label>
                <textarea class="textarea textarea-bordered h-24">Découvrez les dernières tendances du web design en 2026...</textarea>
            </div>
            <div class="form-control w-full mb-4">
                <label class="label"><span class="label-text">Image (imagePath)</span></label>
                <input type="file" class="file-input file-input-bordered w-full" />
            </div>
            <div class="modal-action">
                <label for="edit_blog_modal" class="btn">Annuler</label>
                <button class="btn btn-info">Mettre à jour</button>
            </div>
        </div>
    </div>

    <?php
    // ===== GESTION DU MESSAGE PHP =====
    $message = null;
    $type = null; // success | error

    if (isset($_GET['success'])) {
        $message = "Blog ajouté avec succès !";
        $type = "success";
    }

    if (isset($_GET['error'])) {
        $message = "Erreur lors de l'ajout du blog. Veuillez réessayer.";
        $type = "error";
    }
    ?>

    <!-- ===== TOAST ===== -->
    <?php include 'views/includes/toast.php'; ?>

</body>

</html>