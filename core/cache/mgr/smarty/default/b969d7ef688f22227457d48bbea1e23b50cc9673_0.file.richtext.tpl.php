<?php
/* Smarty version 3.1.33, created on 2020-09-01 13:33:48
  from '/home/e/e5ash/e5ash.net/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4e238cb25b33_12316278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b969d7ef688f22227457d48bbea1e23b50cc9673' => 
    array (
      0 => '/home/e/e5ash/e5ash.net/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1598915788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e238cb25b33_12316278 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
