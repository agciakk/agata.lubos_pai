

<?php $__env->startSection('title', 'Kalkulator kredytowy'); ?>
<?php $__env->startSection('description', 'Oblicz raty swojego kredytu szybko i wygodnie'); ?>

<?php $__env->startSection('content'); ?>

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        
        <div style="position: absolute; top: 20px; right: 20px; z-index: 100; width: auto; min-width: 250px;">
            <?php if(session('success')): ?>
                <div class="alert alert-success" style="margin-bottom: 10px;"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <?php if($user): ?>
                <div style="background-color: rgba(0,0,0,0.7); backdrop-filter: blur(5px); border-radius: 10px; padding: 10px 15px; color: white; display: flex; justify-content: space-between; align-items: center; gap: 15px;">
                    <div style="font-size: 12px;">
                        <strong><?php echo e($user['name']); ?></strong><br>
                        <?php if($user['role'] == 'manager'): ?>
                            <span style="color: #90EE90;">Manager - BRAK LIMITOW</span>
                        <?php else: ?>
                            <span style="color: #87CEEB;">Uzytkownik - limit: <?php echo e(number_format($limit, 0, ',', ' ')); ?> zł</span>
                        <?php endif; ?>
                    </div>
                    <a href="/wyloguj" style="background-color: #dc3545; border: none; border-radius: 5px; padding: 5px 10px; color: white; text-decoration: none; font-size: 12px;">Wyloguj</a>
                </div>
            <?php else: ?>
                <div style="background-color: rgba(0,0,0,0.7); backdrop-filter: blur(5px); border-radius: 10px; padding: 10px 15px; color: white; text-align: center;">
                    <strong>Nie jestes zalogowany</strong><br>
                    <a href="/logowanie" style="color: #FFD700; text-decoration: none;">Zaloguj sie</a>
                </div>
            <?php endif; ?>
        </div>

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
        <img src="<?php echo e(asset('img/wykres.jpg')); ?>" class="custom-block-image img-fluid" alt="">
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
                <img src="<?php echo e(asset('img/zdjecie1.jpg')); ?>" class="custom-block-bg-overlay-image img-fluid" alt="">
            </div>
            <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                <img src="<?php echo e(asset('img/zdjecie2.jpg')); ?>" class="custom-block-bg-overlay-image img-fluid" alt="">
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
                    <form action="<?php echo e(route('kalkulator.oblicz')); ?>" method="post" class="custom-form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <label for="kwota" class="form-label">Kwota kredytu (zł):</label>
                                <input type="text" name="kwota" id="kwota" class="form-control" value="<?php echo e(old('kwota', $kwota ?? '')); ?>" placeholder="np. 100000">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="oprocentowanie" class="form-label">Oprocentowanie (% rocznie):</label>
                                <input type="text" name="oprocentowanie" id="oprocentowanie" class="form-control" value="<?php echo e(old('oprocentowanie', $oprocentowanie ?? '')); ?>" placeholder="np. 5">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="lata" class="form-label">Okres (lata):</label>
                                <input type="text" name="lata" id="lata" class="form-control" value="<?php echo e(old('lata', $lata ?? '')); ?>" placeholder="np. 10">
                            </div>
                            <div class="col-12 mt-4 text-center">
                                <?php if($user): ?>
                                    <button type="submit" class="btn custom-btn">Oblicz rate</button>
                                <?php else: ?>
                                    <a href="/logowanie" class="btn custom-btn">Zaloguj się aby obliczyć</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>

                    
                    <?php if(isset($messages) && count($messages) > 0): ?>
                        <div class="mt-4">
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($msg); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(isset($infos) && count($infos) > 0): ?>
                        <div class="mt-4">
                            <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-info"><?php echo e($info); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(isset($wynik)): ?>
                        <div class="mt-5 p-4" style="background-color: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h3 class="mb-4">Wynik obliczeń:</h3>
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Odsetki</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo e($wynik['odsetki']); ?> zł</strong>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Kwota do spłaty</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo e($wynik['calosc']); ?> zł</strong>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="services-thumb-price p-3 text-center">
                                        <h5>Rata miesięczna</h5>
                                        <strong class="text-white" style="font-size: 24px;"><?php echo e($wynik['rata']); ?> zł</strong>
                                    </div>
                                </div>
                            </div>
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
                <img src="<?php echo e(asset('img/lupa.jpg')); ?>" class="custom-block-bg-overlay-image img-fluid" alt="">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kalkulator_kredytowy_role\resources\views/kalkulator.blade.php ENDPATH**/ ?>