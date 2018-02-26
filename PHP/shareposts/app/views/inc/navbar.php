<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">
        <a href="<?php echo URL_ROOT ?>" class="navbar-brand"><?php echo SITE_NAME; ?></a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#myNavbar"
                aria-controls="myNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="myNavbar" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo URL_ROOT ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo URL_ROOT ?>/pages/about">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo URL_ROOT ?>/users/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo URL_ROOT ?>/users/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
