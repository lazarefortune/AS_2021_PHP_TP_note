<?php
/* Smarty version 3.1.39, created on 2021-03-28 03:41:13
  from 'C:\wamp64\www\mvc\tpl\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605ffad9363912_30172949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b170efcc7499f30b1c0ba40d7ab82f0498d5db6b' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\login.tpl',
      1 => 1616902872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ffad9363912_30172949 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <h5>Formulaire de connexion </h5>

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
<?php }
}
