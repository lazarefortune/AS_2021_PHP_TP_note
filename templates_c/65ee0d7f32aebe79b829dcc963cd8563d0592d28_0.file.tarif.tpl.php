<?php
/* Smarty version 3.1.39, created on 2021-03-28 04:21:25
  from 'C:\wamp64\www\mvc\tpl\pages\tarif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60600445ab4795_89314642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ee0d7f32aebe79b829dcc963cd8563d0592d28' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\tarif.tpl',
      1 => 1616905284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60600445ab4795_89314642 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row d-flex justify-content-center">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
$_smarty_tpl->tpl_vars['tarif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
$_smarty_tpl->tpl_vars['tarif']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['lib_categ'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['tarif']->value['type_prest'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tarif']->value['prix'];?>
 €</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>

  </div>
</div>
<?php }
}
