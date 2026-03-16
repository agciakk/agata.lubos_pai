<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Kalkulator kredytowy - oblicz raty swojego kredytu">
        <meta name="author" content="">

        <title>Kalkulator kredytowy</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
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
                                <img src="images/wykres.jpg" class="custom-block-image img-fluid" alt="">

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
                                    <img src="images/zdjecie1.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                                </div>

                                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                                    <img src="images/zdjecie2.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
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
                                        <form action="calc.php#section_3" method="post" class="custom-form">
                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <label for="kwota" class="form-label">Kwota kredytu (zł):</label>
                                                    <input type="text" name="kwota" id="kwota" class="form-control" value="<?php echo htmlspecialchars($kwota ?? ''); ?>" placeholder="np. 100000" >
                                                </div>
                                                
                                                <div class="col-lg-4 col-12">
                                                    <label for="oprocentowanie" class="form-label">Oprocentowanie (% rocznie):</label>
                                                    <input type="text" name="oprocentowanie" id="oprocentowanie" class="form-control" value="<?php echo htmlspecialchars($oprocentowanie ?? ''); ?>" placeholder="np. 5">
                                                </div>
                                                
                                                <div class="col-lg-4 col-12">
                                                    <label for="lata" class="form-label">Okres (lata):</label>
                                                    <input type="text" name="lata" id="lata" class="form-control" value="<?php echo htmlspecialchars($lata ?? ''); ?>" placeholder="np. 10">
                                                </div>
                                                
                                                <div class="col-12 mt-4 text-center">
                                                    <button type="submit" class="btn custom-btn">Oblicz ratę</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php if(isset($wynik)): ?>
                                        <div class="mt-5 p-4" style="background-color: rgba(255,255,255,0.1); border-radius: 10px;">
                                            <h3 class="mb-4">Wynik obliczeń:</h3>
                                            <div class="row">
                                                <div class="col-lg-4 col-12 mb-3">
                                                    <div class="services-thumb-price p-3 text-center">
                                                        <h5>Odsetki</h5>
                                                        <strong class="text-white" style="font-size: 24px;"><?php echo $wynik['odsetki']; ?> zł</strong>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12 mb-3">
                                                    <div class="services-thumb-price p-3 text-center">
                                                        <h5>Kwota do spłaty</h5>
                                                        <strong class="text-white" style="font-size: 24px;"><?php echo $wynik['calosc']; ?> zł</strong>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12 mb-3">
                                                    <div class="services-thumb-price p-3 text-center">
                                                        <h5>Rata miesięczna</h5>
                                                        <strong class="text-white" style="font-size: 24px;"><?php echo $wynik['rata']; ?> zł</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($errors)): ?>
                                            <div class="mt-4">
                                                <?php foreach($errors as $msg): ?>
                                                    <div class="alert alert-danger"><?php echo $msg; ?></div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
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
                                    <img src="images/lupa.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
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
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>