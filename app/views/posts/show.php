<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class='container mt-5 mb-5'>
    <a href="<?php echo URLROOT; ?>/posts" class=" mt-3 btn btn-light">
      <i class="fa fa-backward"></i> Nazad
    </a>
    <div class="card card-body mt-3 mb-3 bg-dark">
      <h1><?php echo $data['post']->title; ?></h1>
      <p><?php echo $data['post']->body; ?></p>
    </div>
    <div class="bg-dark card card-body p-2 mb-3">
      Autor: <?php echo $data['user']->name; ?> <hr> Datum objave: <?php echo $data['post']->created_at; ?>
    </div>

    

    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
      <hr>
      <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-light">Izmeni</a>
      <form class="float-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method='post'>
        <input type="submit" value="Obriši" class='btn btn-danger'>
      </form>  
    <?php endif; ?>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
 
