<div class="row d-flex justify-content-center">
  <div class="col-md-9">

    <table class="table caption-top table-responsive table-striped">
      <caption>Liste des clients </caption>
      <thead class="table-dark">
        <tr>
          <th scope="col">Numéro de carte</th>
          <th scope="col">Nom</th>
          <th scope="col">Date carte</th>
          <th scope="col">Solde</th>
        </tr>
      </thead>
      <tbody>
        {foreach $usagers as $usager}
          <tr>
            <th scope="row">{$usager.num_carte}</th>
            <td>{$usager.nom}</td>
            <td>{$usager.date_carte|date_format: "%d/%m/%Y"}</td>
            <td>{$usager.solde} €</td>
          </tr>
        {/foreach}
      </tbody>
      <tfoot>
        <a href="index.php?page=createUsager">
          <button class="btn btn-primary btn-sm" name="button">Ajouter un usager</button>
        </a>
      </tfoot>
    </table>

  </div>
</div>
