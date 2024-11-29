<?php
/* Smarty version 5.4.1, created on 2024-10-14 21:00:35
  from 'file:reels.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670d86737d0ed9_24264961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4382f6f2a737802b6354d4253fee15beb79c6430' => 
    array (
      0 => 'reels.tpl',
      1 => 1728939629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_reel.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.bottom_bar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_670d86737d0ed9_24264961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- left panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <div class="reels-wrapper">
        <?php if ($_smarty_tpl->getValue('posts')) {?>
          <div class="reels-loader" data-offset="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Loading");?>
 <span class="spinner-grow spinner-grow-sm ml-3"></span></div>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$_smarty_tpl->getVariable('post')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('post')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('post');
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__feeds_reel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_iteration'=>$_smarty_tpl->getVariable('post')->iteration), (int) 0, $_smarty_current_dir);
?>
          <?php
$_smarty_tpl->setVariable('post', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
          <div class="mtb30">
            <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> </div>
        <?php }?>
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->
<!--page content-->
<?php $_smarty_tpl->renderSubTemplate('file:_footer.bottom_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
  var first_id = $('.reel-container').first().data('id');
  if (first_id) {
    var url = site_path + '/reels/' + first_id;
    window.history.pushState({ state: 'new' }, '', url);
  }
<?php echo '</script'; ?>
><?php }
}
