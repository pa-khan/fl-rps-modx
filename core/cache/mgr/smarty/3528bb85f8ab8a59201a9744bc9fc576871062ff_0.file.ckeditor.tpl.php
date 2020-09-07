<?php
/* Smarty version 3.1.33, created on 2020-09-01 16:52:47
  from '/home/e/e5ash/e5ash.net/public_html/core/components/migx/elements/tv/ckeditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4e522f9859a3_77124460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3528bb85f8ab8a59201a9744bc9fc576871062ff' => 
    array (
      0 => '/home/e/e5ash/e5ash.net/public_html/core/components/migx/elements/tv/ckeditor.tpl',
      1 => 1598916041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e522f9859a3_77124460 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" style="heigth:200;" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="rtf-ckeditor tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
   
    
    field.onLoad = function(){
        //console.log('we load');
                var textArea = Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').dom;
                field.htmlEditor = MODx.load({
                    xtype: 'modx-htmleditor',
                    width: 'auto',
                    height: parseInt(textArea.style.height) || 200,
                    name: textArea.name,
                    value: textArea.value || '<p></p>'
                });

                textArea.name = '';
                textArea.style.display = 'none';

                field.htmlEditor.render(textArea.parentNode);
                field.htmlEditor.editor.on('key', function(e){ MODx.fireResourceFormChange() });
            
		
    };
        
    field.onHide = function(){
        //console.log('we hide');
        field.htmlEditor.destroy();
   
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        field.htmlEditor.getValue();
   
    };        


});

<?php echo '</script'; ?>
>
<?php }
}
