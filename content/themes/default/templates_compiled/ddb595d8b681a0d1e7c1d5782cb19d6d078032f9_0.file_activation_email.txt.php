<?php
/* Smarty version 5.4.1, created on 2024-10-13 20:54:46
  from 'file:emails/activation_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670c33963180a5_18822414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddb595d8b681a0d1e7c1d5782cb19d6d078032f9' => 
    array (
      0 => 'emails/activation_email.txt',
      1 => 1693736736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_670c33963180a5_18822414 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/spinchat/Script/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('name');?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/activation/<?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activiation Code");?>
: <?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
