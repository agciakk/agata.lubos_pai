<?php
/* Smarty version 5.4.2, created on 2026-03-23 12:02:16
  from 'file:main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69c11db89a34e4_23273835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '049e2480a23bac89fd7d7293e490e4dfb60c61fd' => 
    array (
      0 => 'main.html',
      1 => 1774261394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69c11db89a34e4_23273835 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\kalkulator_kredytowy_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? 'Kalkulator kredytowy - oblicz raty swojego kredytu' ?? null : $tmp);?>
">

    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? 'Kalkulator kredytowy' ?? null : $tmp);?>
</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/templatemo-barber-shop.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">
                <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Opis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Kalkulator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_88136143169c11db899f384_00812902', 'content');
?>

            </div>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/click-scroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_88136143169c11db899f384_00812902 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\kalkulator_kredytowy_smarty\\templates';
?>

                Domyślna treść...
                <?php
}
}
/* {/block 'content'} */
}
