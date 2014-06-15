<?php /* Smarty version Smarty-3.1.14, created on 2014-06-09 22:31:35
         compiled from "Z:\home\prestashop16.ru\www\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104755395e1672362f3-56930640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de45c4b7eecf1f5045738c4308f980920d1075c7' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104755395e1672362f3-56930640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5395e16728d592_00923373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395e16728d592_00923373')) {function content_5395e16728d592_00923373($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'Z:\\home\\prestashop16.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>