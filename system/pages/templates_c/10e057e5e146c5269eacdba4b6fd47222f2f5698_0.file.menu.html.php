<?php
/* Smarty version 4.0.0, created on 2022-07-21 01:28:49
  from 'C:\xampp7\htdocs\management\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62d88fb1066646_36088965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e057e5e146c5269eacdba4b6fd47222f2f5698' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\management\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1647390752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d88fb1066646_36088965 (Smarty_Internal_Template $_smarty_tpl) {
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
