<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-3 mb-3">
          <h2>Kreirajte Nalog</h2>
          <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
              <label for="name">Ime:</label>
              <input type="text" name="name" class="form-control form-control-lg 
                <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['name']; ?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control form-control-lg 
                <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="password">Šifra:</label>
              <input type="password" name="password" class="form-control form-control-lg 
                <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="confirm_password">Potvrdite šifru:</label>
              <input type="password" name="confirm_password" class="form-control form-control-lg 
                <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['confirm_password']; ?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>

            <div class="row">
              <div class="col">
                <input type="submit" value="Registrujte se" class="btn btn-success btn-block">
              </div>
              <div class="col">
                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Imate nalog? Ulogujte se.</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
