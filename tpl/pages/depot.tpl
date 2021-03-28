<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <h5>Ajout dun depot </h5>

      {foreach $notifications as $notification}
        <div class="alert alert-{$notification.type}">
          {$notification.message}
        </div>
      {/foreach}

      <form method="post" name="action">

        <div class="mb-3">
          <label for="numCarte">Utilisateur</label>
          <select class="form-select form-select" name="numCarte" id="numCarte">
            <option selected>Sélectionner un utilisateur ...</option>
            {foreach $utilisateurs as $utilisateur}
            <option value="{$utilisateur.num_carte}">{$utilisateur.nom}</option>
            {/foreach}
          </select>
        </div>

        <div class="mb-3">
          <label for="montant" class="form-label">Montant (€)</label>
          <input type="number" class="form-control" id="montant" name="montant">
        </div>

        <button type="submit" class="btn btn-success" name="action">Faire un dépot </button>
        <button type="reset" class="btn btn-secondary" name="button">Réinitialiser</button>
      </form>
    </div>
  </div>
</div>
