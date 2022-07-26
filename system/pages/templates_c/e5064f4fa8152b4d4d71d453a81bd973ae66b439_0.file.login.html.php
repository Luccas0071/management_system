<?php
/* Smarty version 4.0.0, created on 2022-07-26 02:03:48
  from 'C:\xampp7\htdocs\management\system\pages\templates\login\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62df2f64abcc16_42935505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5064f4fa8152b4d4d71d453a81bd973ae66b439' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\management\\system\\pages\\templates\\login\\login.html',
      1 => 1658793821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62df2f64abcc16_42935505 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!--Import jquery-->
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!--Import font awesome-->
        <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/6ca0e0ce58.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!--Import bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Stylle login-->
        <link rel="stylesheet" href="css/loginStylee.css">
        
        <title>Login - Sistema de Gestão da Qualidade</title>

        <?php echo '<script'; ?>
>
            function login(){
                console.log("Logando");
                
                var urlAction = "index.php?do=security&action=validateUser";
        
                formDados = new FormData(document.getElementById('frmLogin'));

                jQuery.ajax({
                    type: 'POST',
                    url: urlAction,
                    data: formDados,
                    success: function (data) {
                        console.log(data);
                        // redirect();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
        <?php echo '</script'; ?>
>
    </head>
    <body>
        
        <div class="login-page">
            <div class="form">
                <form class="login-form" name="frmLogin" id="frmLogin">
                    <div>
                        <label for="user">Usuário</label>
                        <input type="text" id="user" name="user">
                    </div>
                    <div>
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <button type="button" onclick="login()">
                        Acessar
                    </button>
                </form>
            </div>
        </div>

    </body>
</html><?php }
}
