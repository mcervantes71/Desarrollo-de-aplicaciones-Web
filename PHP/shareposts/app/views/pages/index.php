<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3 text-center"><?php echo $data['title']; ?></h1>
            <p class="lead text-justify">
                <?php echo $data['description']; ?>
            </p>
        </div>
    </div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
