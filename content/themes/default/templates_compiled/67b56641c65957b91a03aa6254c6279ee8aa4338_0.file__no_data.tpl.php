<?php
/* Smarty version 5.4.1, created on 2024-10-13 20:57:36
  from 'file:_no_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670c3440d5d195_86796956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b56641c65957b91a03aa6254c6279ee8aa4338' => 
    array (
      0 => '_no_data.tpl',
      1 => 1699350640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_670c3440d5d195_86796956 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), (int) 0, $_smarty_current_dir);
?>
  <div class="text-md">
    <span class="no-data"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
