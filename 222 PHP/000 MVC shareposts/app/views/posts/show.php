<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <a class="btn btn-light" href="<?php echo URL_ROOT; ?>/posts"><i class="fa fa-backward"></i> Back</a>
    <br />
    <h1><?php echo $data['post']->post_title; ?></h1>
    <div class="bg-secondary text-white p-2 mb-3">
        Written By <?php echo $data['post']->user_name; ?> On <?php echo $data['post']->post_created_at ?>
    </div>
    <p>
    <?php echo $data['post']->post_body; ?>
    </p>
    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <a class="btn btn-dark" href="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post']->post_id ?>">Edit</a>
        <form class="pull-right" action="<?php echo URL_ROOT; ?>/posts/delete/<?php echo $data['post']->post_id ?>" method="POST">
            <input class="btn btn-danger" type="submit" value="Delete" />
        </form>
    <?php endif; ?>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>