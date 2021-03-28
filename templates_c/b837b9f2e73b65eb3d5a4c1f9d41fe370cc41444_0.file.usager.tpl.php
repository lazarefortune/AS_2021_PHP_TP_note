<?php
/* Smarty version 3.1.39, created on 2021-03-28 04:29:56
  from 'C:\wamp64\www\mvc\tpl\pages\usager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060064472b0b1_46920941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b837b9f2e73b65eb3d5a4c1f9d41fe370cc41444' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc\\tpl\\pages\\usager.tpl',
      1 => 1616905543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060064472b0b1_46920941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\mvc\\web\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usagers']->value, 'usager');
$_smarty_tpl->tpl_vars['usager']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usager']->value) {
$_smarty_tpl->tpl_vars['usager']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['usager']->value['num_carte'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['usager']->value['nom'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usager']->value['date_carte'],"%d/%m/%Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usager']->value['solde'];?>
 €</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
      <tfoot>
        <a href="index.php?page=createUsager">
          <button class="btn btn-primary btn-sm" name="button">Ajouter un usager</button>
        </a>
      </tfoot>
    </table>

  </div>
</div>
<?php }
}
