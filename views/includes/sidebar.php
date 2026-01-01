<input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

<!-- Sidebar -->
<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content">
        <!-- Sidebar content here -->
        <li class="mb-4 text-2xl font-bold px-4 py-2">Admin Panel</li>
        <li>
            <a href="<?= PATH ?>dashboard"
                <?php
                if (isset($_GET['page']) && $_GET['page'] === 'dashboard') {
                    echo 'class="active"';
                }
                ?>>
                <i class="fa-solid fa-house mr-2"></i> Accueil
            </a>
        </li>
        <li>
            <a href="<?= PATH ?>blogs"
                <?php
                if (isset($_GET['page']) && $_GET['page'] === 'blogs') {
                    echo 'class="active"';
                }
                ?>>
                <i class="fa-solid fa-newspaper mr-2"></i> Gestion Blogs
            </a>
        </li>
        <li>
            <a href="<?= PATH ?>reviews"
                <?php
                if (isset($_GET['page']) && $_GET['page'] === 'reviews') {
                    echo 'class="active"';
                }
                ?>>
                <i class="fa-solid fa-comment-dots mr-2"></i> Gestion Avis
            </a>
        </li>
        <div class="divider">Paramètres</div>
        <li>
            <a>
                <i class="fa-solid fa-user mr-2"></i> Profil
            </a>
        </li>
        <li>
            <a>
                <i class="fa-solid fa-gear mr-2"></i> Configuration
            </a>
        </li>
        <li class="mt-auto">
            <a href="<?= PATH ?>logout" class="text-error">
                <i class="fa-solid fa-right-from-bracket mr-2"></i> Déconnexion
            </a>
        </li>
    </ul>
</div>