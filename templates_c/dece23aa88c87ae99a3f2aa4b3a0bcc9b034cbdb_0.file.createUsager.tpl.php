<?php
/* Smarty version 3.1.39, created on 2021-03-28 02:32:04
  from 'C:\wamp64\www\mvc\tpl\pages\createUsager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605feaa4753655_14016851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dece23aa88c87ae99a3f2aa4b3a0bcc9b034cbdb' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\createUsager.tpl',
      1 => 1616898659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605feaa4753655_14016851 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">

      <h5>Ajouter un usager</h5>
  

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['notification']->value['type'];?>
">
          <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>

        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['num_categ'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['lib_categ'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
