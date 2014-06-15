<?php /* Smarty version Smarty-3.1.14, created on 2014-06-10 16:27:54
         compiled from "Z:\home\prestashop16.ru\www\admin0969\themes\default\template\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72785396ddaa34f390-04916269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ee4be7570ae2c7f8d76ac219972bcf286a3449' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\admin0969\\themes\\default\\template\\nav.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72785396ddaa34f390-04916269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'bo_query' => 0,
    'search_type' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5396ddaa51adb3_78405492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396ddaa51adb3_78405492')) {function content_5396ddaa51adb3_78405492($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu){?>nav-sidebar<?php }else{ ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value){?>
			<div class="mainsubtablist" style="display:none"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<form id="header_search" method="post" action="index.php?controller=AdminSearch&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminSearch'),$_smarty_tpl);?>
" role="search">
					<div class="form-group">
						<input type="hidden" name="bo_search_type" id="bo_search_type" />
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i id="search_type_icon" class="icon-search"></i>
									<i class="icon-caret-down"></i>
								</button>
								<ul id="header_search_options" class="dropdown-menu">
									<li class="search-all search-option active">
										<a href="#" data-value="0" data-placeholder="<?php echo smartyTranslate(array('s'=>'What are you looking for?'),$_smarty_tpl);?>
" data-icon="icon-search">
											<i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Everywhere'),$_smarty_tpl);?>
</a>
									</li>
									<li class="divider"></li>
									<li class="search-book search-option">
										<a href="#" data-value="1" data-placeholder="<?php echo smartyTranslate(array('s'=>'Product name, SKU, reference...'),$_smarty_tpl);?>
" data-icon="icon-book">
											<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Catalog'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="search-customers-name search-option">
										<a href="#" data-value="2" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email, name...'),$_smarty_tpl);?>
" data-icon="icon-group">
											<i class="icon-group"></i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by name'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="search-customers-addresses search-option">
										<a href="#" data-value="6" data-placeholder="<?php echo smartyTranslate(array('s'=>'123.45.67.89'),$_smarty_tpl);?>
" data-icon="icon-desktop">
											<i class="icon-desktop"></i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by ip address'),$_smarty_tpl);?>
</a>
									</li>
									<li class="search-orders search-option">
										<a href="#" data-value="3" data-placeholder="<?php echo smartyTranslate(array('s'=>'Order ID'),$_smarty_tpl);?>
" data-icon="icon-credit-card">
											<i class="icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="search-invoices search-option">
										<a href="#" data-value="4" data-placeholder="<?php echo smartyTranslate(array('s'=>'Invoice Number'),$_smarty_tpl);?>
" data-icon="icon-book">
											<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Invoices'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="search-carts search-option">
										<a href="#" data-value="5" data-placeholder="<?php echo smartyTranslate(array('s'=>'Cart ID'),$_smarty_tpl);?>
" data-icon="icon-shopping-cart">
											<i class="icon-shopping-cart"></i> <?php echo smartyTranslate(array('s'=>'Carts'),$_smarty_tpl);?>

										</a>
									</li>
									<li class="search-modules search-option">
										<a href="#" data-value="7" data-placeholder="<?php echo smartyTranslate(array('s'=>'Module name'),$_smarty_tpl);?>
" data-icon="icon-puzzle-piece">
											<i class="icon-puzzle-piece"></i> <?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>

										</a>
									</li>
								</ul>
							</div>
							<a href="#" class="clear_search hide"><i class="icon-remove"></i></a>
							<input id="bo_query" name="bo_query" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bo_query']->value;?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
" />
<!--  							<span class="input-group-btn">
								<button type="submit" id="bo_search_submit" class="btn btn-primary">
									<i class="icon-search"></i>
								</button>
							</span> -->
						</div>
					</div>

					<script>
						<?php if (isset($_smarty_tpl->tpl_vars['search_type']->value)&&$_smarty_tpl->tpl_vars['search_type']->value){?>
							$(document).ready(function() {
								$('.search-option a[data-value='+<?php echo intval($_smarty_tpl->tpl_vars['search_type']->value);?>
+']').click();
							});
						<?php }?>
					</script>
				</form>
			</li>

			

			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']){?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>has_submenu<?php }?>" id="maintab<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])){?><?php echo $_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['href'];?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value){
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']){?>
							<li <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']){?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>
	</nav>
</div><?php }} ?>