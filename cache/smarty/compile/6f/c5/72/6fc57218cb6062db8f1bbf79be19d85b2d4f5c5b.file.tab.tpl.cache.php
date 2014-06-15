<?php /* Smarty version Smarty-3.1.14, created on 2014-06-09 22:31:35
         compiled from "Z:\home\prestashop16.ru\www\themes\default-bootstrap\modules\blocknewproducts\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10825395e167126299-59826643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc57218cb6062db8f1bbf79be19d85b2d4f5c5b' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\themes\\default-bootstrap\\modules\\blocknewproducts\\tab.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10825395e167126299-59826643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5395e16718fb33_79795232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395e16718fb33_79795232')) {function content_5395e16718fb33_79795232($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'Z:\\home\\prestashop16.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>