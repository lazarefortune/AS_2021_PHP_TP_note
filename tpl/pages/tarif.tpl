<div class="row d-flex justify-content-center">
  <div class="col-md-9 ">

    <table class="table caption-top  table-striped">
      <caption>Liste des tarifs </caption>
      <thead class="table-dark">
        <tr>
          <th scope="col">Libellé catégorie</th>
          <th scope="col">Libellé prestation</th>
          <th scope="col">Prix</th>
        </tr>
      </thead>
      <tbody>
        {foreach $tarifs as $tarif}
          <tr>
            <th scope="row">{$tarif.lib_categ}</th>
            <td>{$tarif.type_prest}</td>
            <td>{$tarif.prix} €</td>
          </tr>
        {/foreach}
      </tbody>
    </table>

  </div>
</div>
