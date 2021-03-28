<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <h5>Formulaire de connexion </h5>

      {foreach $notifications as $notification}
        <div class="alert alert-{$notification.type}">
          {$notification.message}
        </div>
      {/foreach}
      
      <form method="post">

        <div class="form-group mb-3">
          <label for="login">Identifiant</label>
          <input type="text" id="login" class="form-control" name="login" value="">
        </div>

        <div class="form-group mb-3">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" class="form-control" name="password" value="">
        </div>

        <button type="submit" class="btn btn-primary" name="button">Se connecter</button>
      </form>
    </div>
  </div>
</div>
