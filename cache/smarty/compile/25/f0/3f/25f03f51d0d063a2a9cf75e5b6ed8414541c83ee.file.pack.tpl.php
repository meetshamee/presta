<?php /* Smarty version Smarty-3.1.14, created on 2014-06-10 15:01:16
         compiled from "Z:\home\prestashop16.ru\www\admin0969\themes\default\template\controllers\products\pack.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45725396c95c603962-15826675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f03f51d0d063a2a9cf75e5b6ed8414541c83ee' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\admin0969\\themes\\default\\template\\controllers\\products\\pack.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45725396c95c603962-15826675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'input_pack_items' => 0,
    'input_namepack_items' => 0,
    'pack_items' => 0,
    'pack_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5396c95c72dc64_59097442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c95c72dc64_59097442')) {function content_5396c95c72dc64_59097442($_smarty_tpl) {?>

<script type="text/javascript">
	var msg_select_one = "<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
";
	var msg_set_quantity = "<?php echo smartyTranslate(array('s'=>'Please set a quantity to add a product.','js'=>1),$_smarty_tpl);?>
";
</script>

<div id="product-pack" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Pack" />
	<h3><?php echo smartyTranslate(array('s'=>'Pack'),$_smarty_tpl);?>
</h3>
	<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'You cannot add combinations to a pack.'),$_smarty_tpl);?>
</div>

	<div class="ppack">
		<input type="checkbox" name="ppack" id="ppack" value="1" <?php if ($_smarty_tpl->tpl_vars['product_type']->value==Product::PTYPE_PACK){?>checked="checked"<?php }?> onclick="$('#ppackdiv').slideToggle();" />
		<label class="t" for="ppack"><?php echo smartyTranslate(array('s'=>'Pack'),$_smarty_tpl);?>
</label>
	</div>

	<div id="ppackdiv" <?php if (!($_smarty_tpl->tpl_vars['product_type']->value==Product::PTYPE_PACK)){?>style="display: none;"<?php }?>>

	<div class="form-group">
		<label class="control-label col-lg-3" for="curPackItemName">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Start by typing the first letters of the product name, then select the product from the drop-down list.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="input-group col-lg-6">
			<input type="text" id="curPackItemName" />
			<span class="input-group-addon"><i class="icon-search"></i></span>
		</div>
	</div>
		
	<div class="form-group">
		<label class="control-label col-lg-3" for="curPackItemQty">
			<?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>

		</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon">&times;</span>
			<input type="text" name="curPackItemQty" id="curPackItemQty" value="1"/>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<button type="button" id="add_pack_item" class="btn btn-default">
				<i class="icon-plus-sign-alt"></i> <?php echo smartyTranslate(array('s'=>'Add this product to the pack'),$_smarty_tpl);?>

			</button>	
		</div>
	</div>

	<input type="hidden" name="inputPackItems" id="inputPackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_pack_items']->value;?>
" />
	<input type="hidden" name="namePackItems" id="namePackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_namepack_items']->value;?>
" />
	<input type="hidden" id="curPackItemId" />

	<div class="form-group">
		<label class="control-label col-lg-3 product_description listOfPack" style="display:<?php if (count($_smarty_tpl->tpl_vars['pack_items']->value)>0){?>block<?php }else{ ?>none<?php }?>;">
			<?php echo smartyTranslate(array('s'=>'List of products for that pack:'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<ul id="divPackItems">
				<?php  $_smarty_tpl->tpl_vars['pack_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pack_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pack_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pack_item']->key => $_smarty_tpl->tpl_vars['pack_item']->value){
$_smarty_tpl->tpl_vars['pack_item']->_loop = true;
?>
				<li>
					<button type="button" class="btn btn-default delPackItem" name="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id'];?>
">
						<i class="icon-trash"></i>
					</button>
					<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['pack_quantity'];?>
 x <?php echo $_smarty_tpl->tpl_vars['pack_item']->value['name'];?>

				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div>
</div>
<?php }} ?>