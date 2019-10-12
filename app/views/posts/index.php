<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container mt-5">
    <?php flash('post_message'); ?>
    <div class="row mb-3 mt-5">
      <div class="col-6">
        <h1>Postovi</h1>
      </div>  
      <div class="col-6">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-right">
          <i class="fa fa-pencil"></i> Dodaj post
        </a>
      </div>
    </div>
  
    <?php foreach($data['posts'] as $post) : ?>
      <div class="card card-body mb-3 bg-dark">
        <h4 class="card-title"><?php echo $post->title; ?></h4>
        <div class="p-2 mb-3">
          Autor: <?php echo $post->name; ?> postavljeno datuma: <?php echo $post->postCreated; ?>
        </div>
        <p class="card-text"><?php echo $post->body; ?></p>
        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-light">Saznaj više</a>
      </div>
    <?php endforeach; ?>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>