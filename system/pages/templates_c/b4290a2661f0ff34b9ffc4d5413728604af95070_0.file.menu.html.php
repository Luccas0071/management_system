<?php
/* Smarty version 4.0.0, created on 2022-07-21 01:30:35
  from 'C:\xampp7\htdocs\management\system\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62d8901bb20538_61573263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4290a2661f0ff34b9ffc4d5413728604af95070' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\management\\system\\pages\\templates\\include\\menu.html',
      1 => 1647390752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d8901bb20538_61573263 (Smarty_Internal_Template $_smarty_tpl) {
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
