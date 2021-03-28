<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">

      <h5>Ajouter un usager</h5>
  

      {foreach $notifications as $notification}
        <div class="alert alert-{$notification.type}">
          {$notification.message}
        </div>
      {/foreach}

      <form method="post" name="action">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="nom">
        </div>

        <div class="mb-3">
          <label for="numCarte" class="form-label">Numéro de carte</label>
          <input type="text" class="form-control" name="numCarte" id="numCarte" minlength="2" maxlength="2" aria-describedby="numCarteHelp">
          <div id="numCarteHelp" class="form-text">Ce numéro est unique.</div>
        </div>

        <div class="mb-3">
          <label for="dateCarte" class="form-label">Date Carte</label>
          <input type="date" class="form-control" name="dateCarte" id="dateCarte">
        </div>

        <div class="mb-3">
          <label for="numCateg">Catégorie</label>
          <select class="form-select form-select" name="numCateg" id="numCateg">
            <option selected>Sélectionner ...</option>
            {foreach $categories as $categorie}
            <option value="{$categorie.num_categ}">{$categorie.lib_categ}</option>
            {/foreach}
          </select>
        </div>



        <div class="mb-3">
          <label for="mtCaution" class="form-label">Montant de la caution</label>
          <input type="number" class="form-control" name="mtCaution" id="mtCaution">
        </div>

        <button type="submit" class="btn btn-success" name="action">Ajouter l'usager</button>
        <button type="reset" class="btn btn-secondary" name="button">Réinitialiser</button>
      </form>
    </div>
  </div>
</div>
