<?php
/* Smarty version 3.1.33, created on 2020-09-01 15:58:01
  from '/home/e/e5ash/e5ash.net/public_html/core/components/migx/elements/tv/tinymce.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4e45592bb6a4_76351948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc626fd79d9bef8cdb9b1004b8264a0b5ab2367b' => 
    array (
      0 => '/home/e/e5ash/e5ash.net/public_html/core/components/migx/elements/tv/tinymce.tpl',
      1 => 1598916041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e45592bb6a4_76351948 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="rtf-tinymcetv tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
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
        if (typeof(Tiny) != 'undefined') {
		    var s={};
            if (Tiny.config){
                s = Tiny.config || {};
                delete s.assets_path;
                delete s.assets_url;
                delete s.core_path;
                delete s.css_path;
                delete s.editor;
                delete s.id;
                delete s.mode;
                delete s.path;
                s.cleanup_callback = "Tiny.onCleanup";
                var z = Ext.state.Manager.get(MODx.siteId + '-tiny');
                if (z !== false) {
                    delete s.elements;
                }			
		    }
			//s.mode = "specific_textareas";
            //s.editor_selector = "modx-richtext";
            			
            s.mode = "exact";
            s.elements = "tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
";              
 		    //s.language = "en";// de seems not to work at the moment
            tinyMCE.init(s);
            
		}
    };
        
    field.onHide = function(){
        //console.log('we hide');
        if (typeof(tinyMCE) != 'undefined') {
            var tinyinstance = tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
            if (typeof(tinyinstance) != 'undefined') {
                tinyinstance.remove();
            }
        }     
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        if (typeof(tinyMCE) != 'undefined') {
            tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').save(); 
        }       
    };        


});

<?php echo '</script'; ?>
>
<?php }
}
