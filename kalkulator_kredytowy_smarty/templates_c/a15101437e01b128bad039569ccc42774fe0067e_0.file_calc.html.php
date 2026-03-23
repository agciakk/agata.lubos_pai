<?php
/* Smarty version 5.4.2, created on 2026-03-23 12:02:15
  from 'file:calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69c11db7e37491_21625292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15101437e01b128bad039569ccc42774fe0067e' => 
    array (
      0 => 'calc.html',
      1 => 1774263314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69c11db7e37491_21625292 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\kalkulator_kredytowy_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_100586685469c11db7de0e00_77506798', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_51566991669c11db7df1d34_66296361', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_100586685469c11db7de0e00_77506798 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\kalkulator_kredytowy_smarty\\app';
?>
Kalkulator kredytowy - oblicz swoją ratę<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_51566991669c11db7df1d34_66296361 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\kalkulator_kredytowy_smarty\\app';
?>


<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="text-white mb-lg-3 mb-4"><strong>Kalkulator Kredytowy</strong></h1>
                <p class="text-white">Oblicz swoją ratę kredytu szybko i wygodnie</p>
                <br>
                <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">O kalkulatorze</a>
                <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Kalkulator</a>
            </div>
        </div>
    </div>
    <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
        <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
/images/wykres.jpg" class="custom-block-image img-fluid" alt="">
        <h4><strong class="text-white">Oblicz swoją ratę już teraz!</strong></h4>
        <a href="#section_3" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Przejdź do kalkulatora</a>
    </div>
</section>

<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <h2 class="mb-4">O kalkulatorze</h2>
                <div class="border-bottom pb-3 mb-5">
                    <p>Nasz kalkulator kredytowy pomoże Ci obliczyć miesięczną ratę kredytu, całkowity koszt oraz kwotę odsetek. Wystarczy podać kwotę kredytu, oprocentowanie oraz okres spłaty.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
/images/zdjecie1.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
            </div>
            <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
/images/zdjecie2.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="featured-section section-padding">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h2 class="mb-3">Kalkulator kredytowy</h2>
                <p>Oblicz swoją ratę już dziś!</p>
            </div>
        </div>
    </div>
</section>

<section class="services-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2 class="mb-5">Kalkulator kredytowy</h2>
            </div>
            <div class="col-lg-12 col-12">
                <div class="services-thumb p-4">
                    <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php#section_3" method="post" class="custom-form">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <label for="kwota" class="form-label">Kwota kredytu (zł):</label>
                                <input type="text" name="kwota" id="kwota" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['kwota'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="np. 100000">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="oprocentowanie" class="form-label">Oprocentowanie (% rocznie):</label>
                                <input type="text" name="oprocentowanie" id="oprocentowanie" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['oprocentowanie'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="np. 5">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="lata" class="form-label">Okres (lata):</label>
                                <input type="text" name="lata" id="lata" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['lata'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="np. 10">
                            </div>
                            <div class="col-12 mt-4 text-center">
                                <button type="submit" class="btn custom-btn">Oblicz ratę</button>
                            </div>
                        </div>
                    </form>

                                        <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
                            <div class="mt-4">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                                    <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('msg');?>
</div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    <?php }?>

                                        <?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
                            <div class="mt-4">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'info');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('info')->value) {
$foreach1DoElse = false;
?>
                                    <div class="alert alert-info"><?php echo $_smarty_tpl->getValue('info');?>
</div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    <?php }?>

                                        <?php if ((null !== ($_smarty_tpl->getValue('wynik') ?? null))) {?>
                        <div class="mt-5 p-4" style="background-color: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h3 class="mb-4">Wynik obliczeń:</h3>
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Odsetki</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo $_smarty_tpl->getValue('wynik')['odsetki'];?>
 zł</strong>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Kwota do spłaty</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo $_smarty_tpl->getValue('wynik')['calosc'];?>
 zł</strong>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Rata miesięczna</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo $_smarty_tpl->getValue('wynik')['rata'];?>
 zł</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="price-list-section section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="price-list-thumb-wrap">
                    <div class="mb-4">
                        <h2 class="mb-2">Kontakt</h2>
                        <strong>Masz pytania? Skontaktuj się z nami</strong>
                    </div>
                    <div class="price-list-thumb">
                        <h6 class="d-flex">
                            Email
                            <span class="price-list-thumb-divider"></span>
                            <strong>kontakt@kalkulatorkredytowy.pl</strong>
                        </h6>
                    </div>
                    <div class="price-list-thumb">
                        <h6 class="d-flex">
                            Telefon
                            <span class="price-list-thumb-divider"></span>
                            <strong>+48 123 456 789</strong>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
/images/lupa.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h4 class="site-footer-title mb-4">Kalkulator kredytowy</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-11">
                <div class="site-footer-thumb">
                    <strong class="mb-1">O kalkulatorze</strong>
                    <p>Profesjonalny kalkulator kredytowy pomagający w planowaniu finansów.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-11">
                <div class="site-footer-thumb">
                    <strong class="mb-1">Kontakt</strong>
                    <p>kontakt@kalkulatorkredytowy.pl<br>+48 123 456 789</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-11">
                <strong class="mb-1">Godziny pracy</strong>
                <p>Nie ważne jaki jest dzień tygodnia. Nasz kalkulator zawsze działa!</p>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12 mt-4">
                    <p class="copyright-text mb-0">Copyright © 2026 Kalkulator Kredytowy</p>
                </div>
                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                    <a href="#section_1" class="back-top-icon smoothscroll" title="Powrót na górę">
                        <i class="bi-arrow-up-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
}
}
/* {/block 'content'} */
}
