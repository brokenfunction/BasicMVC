<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?= URLROOT; ?>"><?= SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT. '/pages/about'; ?>">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <span class="nav-link" href="#">Welcome <?= $_SESSION['user_name']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URLROOT . '/users/logout'; ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URLROOT . '/users/login'; ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URLROOT . '/users/register'; ?>">Sign-up</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>