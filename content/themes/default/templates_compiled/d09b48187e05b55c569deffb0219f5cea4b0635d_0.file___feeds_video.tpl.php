<?php
/* Smarty version 5.4.1, created on 2024-10-14 18:55:52
  from 'file:__feeds_video.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670d693869dfe8_02488451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09b48187e05b55c569deffb0219f5cea4b0635d' => 
    array (
      0 => '__feeds_video.tpl',
      1 => 1727201878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_670d693869dfe8_02488451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
?><div class="col-6 col-md-4 col-lg-3">
  <a class="pg_video" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php if ($_smarty_tpl->getValue('_is_reel')) {?>reels<?php } else { ?>posts<?php }?>/<?php echo $_smarty_tpl->getValue('video')['post_id'];?>
">
    <video>
      <?php if (empty($_smarty_tpl->getValue('video')['source_240p']) && empty($_smarty_tpl->getValue('video')['source_360p']) && empty($_smarty_tpl->getValue('video')['source_480p']) && empty($_smarty_tpl->getValue('video')['source_720p']) && empty($_smarty_tpl->getValue('video')['source_1080p']) && empty($_smarty_tpl->getValue('video')['source_1440p']) && empty($_smarty_tpl->getValue('video')['source_2160p'])) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source'];?>
" type="video/mp4">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_240p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_240p'];?>
" type="video/mp4" label="240p" res="240">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_360p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_360p'];?>
" type="video/mp4" label="360p" res="360">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_480p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_480p'];?>
" type="video/mp4" label="480p" res="480">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_720p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_720p'];?>
" type="video/mp4" label="720p" res="720">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_1080p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_1080p'];?>
" type="video/mp4" label="1080p" res="1080">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_1440p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_1440p'];?>
" type="video/mp4" label="1440p" res="1440">
      <?php }?>
      <?php if ($_smarty_tpl->getValue('video')['source_2160p']) {?>
        <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('video')['source_2160p'];?>
" type="video/mp4" label="2160p" res="2160">
      <?php }?>
    </video>
    <div class="play-button"><i class="fa fa-play fa-2x"></i></div>
  </a>
</div><?php }
}
