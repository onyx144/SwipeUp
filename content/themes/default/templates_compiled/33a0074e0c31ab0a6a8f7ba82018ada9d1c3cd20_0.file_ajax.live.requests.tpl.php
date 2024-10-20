<?php
/* Smarty version 5.4.1, created on 2024-10-14 13:15:47
  from 'file:ajax.live.requests.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670d198340e607_60127656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a0074e0c31ab0a6a8f7ba82018ada9d1c3cd20' => 
    array (
      0 => 'ajax.live.requests.tpl',
      1 => 1647975804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
))) {
function content_670d198340e607_60127656 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('requests'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
