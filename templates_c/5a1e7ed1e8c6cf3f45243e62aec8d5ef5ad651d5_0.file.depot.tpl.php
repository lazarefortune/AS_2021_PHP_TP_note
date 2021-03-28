<?php
/* Smarty version 3.1.39, created on 2021-03-28 04:10:04
  from 'C:\wamp64\www\mvc\tpl\pages\depot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060019cd589f0_60256309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1e7ed1e8c6cf3f45243e62aec8d5ef5ad651d5' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\depot.tpl',
      1 => 1616904603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060019cd589f0_60256309 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <h5>Ajout dun depot </h5>

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
          <label for="numCarte">Utilisateur</label>
          <select class="form-select form-select" name="numCarte" id="numCarte">
            <option selected>Sélectionner un utilisateur ...</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['utilisateurs']->value, 'utilisateur');
$_smarty_tpl->tpl_vars['utilisateur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['utilisateur']->value) {
$_smarty_tpl->tpl_vars['utilisateur']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['num_carte'];?>
"><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
