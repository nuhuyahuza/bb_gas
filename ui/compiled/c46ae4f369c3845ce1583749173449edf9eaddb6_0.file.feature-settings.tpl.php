<?php
/* Smarty version 3.1.39, created on 2026-05-09 08:55:33
  from '/var/www/html/bb_gas/ui/theme/ibilling/feature-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_69ff2ec5e610c0_31613383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46ae4f369c3845ce1583749173449edf9eaddb6' => 
    array (
      0 => '/var/www/html/bb_gas/ui/theme/ibilling/feature-settings.tpl',
      1 => 1621347598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ff2ec5e610c0_31613383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153838018669ff2ec5e5b874_23454587', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_153838018669ff2ec5e5b874_23454587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_153838018669ff2ec5e5b874_23454587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">






            <div class="ibox float-e-margins" id="ui_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</h5>


                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <td width="80%"><label for="config_accounting"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('accounting') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_accounting"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_invoicing"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('invoicing') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoicing"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_quotes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('quotes') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_quotes"></td>
                        </tr>



                        </tbody>
                    </table>



                </div>
            </div>


        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
