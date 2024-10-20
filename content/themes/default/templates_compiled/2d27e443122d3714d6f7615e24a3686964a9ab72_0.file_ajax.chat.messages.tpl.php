<?php
/* Smarty version 5.4.1, created on 2024-10-19 10:32:20
  from 'file:ajax.chat.messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67138ab4726ee1_87802320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d27e443122d3714d6f7615e24a3686964a9ab72' => 
    array (
      0 => 'ajax.chat.messages.tpl',
      1 => 1647975786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
))) {
function content_67138ab4726ee1_87802320 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'message');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
