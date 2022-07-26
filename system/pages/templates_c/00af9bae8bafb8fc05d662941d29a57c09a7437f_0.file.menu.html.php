<?php
/* Smarty version 4.0.0, created on 2022-07-02 14:29:40
  from 'C:\xampp7\htdocs\mmSistema\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c03a3450b364_95119204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00af9bae8bafb8fc05d662941d29a57c09a7437f' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\mmSistema\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1647390752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c03a3450b364_95119204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="imagem-banner">
    <img src="img/banner.png" style="width: 100%;">
</div>
<nav>
    <ul class="menu">
        <li><a href="index.php?do=index&action=">Principal</a>
        </li>
        <li><a href="#">Cadastro</a>
            <ul>
                <li><a href="index.php?do=user&action=start">Usuário</a></li>
                <li><a href="index.php?do=course&action=start">Curso</a></li>
            </ul>
        </li>
    </ul>
</nav><?php }
}
