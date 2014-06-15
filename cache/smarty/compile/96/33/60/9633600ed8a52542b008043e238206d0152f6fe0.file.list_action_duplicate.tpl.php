<?php /* Smarty version Smarty-3.1.14, created on 2014-06-10 14:59:58
         compiled from "Z:\home\prestashop16.ru\www\admin0969\themes\default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233615396c90e77d252-37196280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9633600ed8a52542b008043e238206d0152f6fe0' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\admin0969\\themes\\default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233615396c90e77d252-37196280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5396c90e7a2b47_04497295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c90e7a2b47_04497295')) {function content_5396c90e7a2b47_04497295($_smarty_tpl) {?>
<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>