<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class='container mt-5 mb-5'>
    <a href="<?php echo URLROOT; ?>/posts" class=" mt-3 btn btn-light">
      <i class="fa fa-backward"></i> Nazad
    </a>
    <br>
    <h1><?php echo $data['post']->title; ?></h1>
    <div class="bg-light text-black p-2 mb-3">
      Autor: <?php echo $data['user']->name; ?> datuma: <?php echo $data['post']->created_at; ?>
    </div>

    <p><?php echo $data['post']->body; ?></p>

    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
      <hr>
      <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-light">Izmeni</a>
      <form class="float-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method='post'>
        <input type="submit" value="Obriši" class='btn btn-danger'>
      </form>  
    <?php endif; ?>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
 
