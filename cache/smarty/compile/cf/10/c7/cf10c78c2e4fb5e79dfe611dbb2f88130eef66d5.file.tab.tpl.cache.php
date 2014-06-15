<?php /* Smarty version Smarty-3.1.14, created on 2014-06-09 22:31:35
         compiled from "Z:\home\prestashop16.ru\www\themes\default-bootstrap\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138965395e167358167-57803329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf10c78c2e4fb5e79dfe611dbb2f88130eef66d5' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\themes\\default-bootstrap\\modules\\blockbestsellers\\tab.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138965395e167358167-57803329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5395e167385b66_01825446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395e167385b66_01825446')) {function content_5395e167385b66_01825446($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'Z:\\home\\prestashop16.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>