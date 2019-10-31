<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">   
  <a href="<?php echo URLROOT; ?>/posts" class=" mt-3 btn btn-light"><i class="fa fa-backward"></i> Nazad</a>  
    <div class="card card-body bg-light mt-3 mb-5">
      <h2>Izmeni post</h2>
      <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
        <div class="form-group">
          <label for="title">Naslov:</label>
          <input type="text" name="title" class="form-control form-control-lg 
            <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="body">Tekst posta:</label>
          <textarea name="body" class="form-control form-control-lg 
            <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
        </div>   
        <input type="submit" class="btn btn-success" value="Dodaj">        
      </form>
    </div>     
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
