<?php
/* Smarty version 5.4.1, created on 2024-10-17 21:17:22
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67117ee24c6ed8_21736597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dedce1a8dc37a2684878d98232a8014a935a05' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1729199767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67117ee24c6ed8_21736597 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji no_animation">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
