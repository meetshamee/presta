<?php /* Smarty version Smarty-3.1.14, created on 2014-06-10 16:28:06
         compiled from "Z:\home\prestashop16.ru\www\modules\socialsharing\views\templates\hook\socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278855396ddb63e7d97-18314043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19631a950aa2b49fabd37921248f5ccc6a492100' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1401991013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278855396ddb63e7d97-18314043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
    'product_image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5396ddb64db4a0_63155371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396ddb64db4a0_63155371')) {function content_5396ddb64db4a0_63155371($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'Z:\\home\\prestashop16.ru\\www\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value){?>
	<p class="socialsharing_product list-inline no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value){?>
			<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click(<?php if (isset($_smarty_tpl->tpl_vars['product']->value)){?>'<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8', 'js=1');?>
 <?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value));?>
'<?php }?>);">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/twitter.gif");?>
" alt="Tweet" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value){?>
			<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/facebook.gif");?>
" alt="Facebook Like" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value){?>
			<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/google.gif");?>
" alt="Google Plus" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value){?>
			<?php $_smarty_tpl->tpl_vars["product_image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getCover($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
			<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product_image_id']->value['id_image'],'thickbox_default');?>
');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/pinterest.gif");?>
" alt="Pinterest" /> -->
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>