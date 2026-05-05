<!DOCTYPE HTML>
<html>
<head>
    <title>Wszystkie opinie - Planify</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="is-preload">

<div id="page-wrapper">

    <!-- Header -->
    <section id="header" class="wrapper">
        <div id="logo">
            <h1><a href="/">Planify - Wszystkie opinie</a></h1>
            <p>Zobacz, co mówią o nas nasi użytkownicy</p>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/#features') }}">Plany</a></li>
                <li class="current"><a href="{{ url('/#highlights') }}">Opinie</a></li>
                <li><a href="{{ url('/#footer') }}">Kontakt</a></li>
                @auth
                    <li><a href="">Mój plan</a></li>
                    <li><a href="">Statystyki</a></li>
                    <li><a href="">Profil</a></li>
                    <li><a href="{{ route('logout.get') }}">Wyloguj</a></li>
                @else
                    <li><a href="{{ route('register') }}">Rejestracja</a></li>
                    <li><a href="{{ route('login') }}">Zaloguj się</a></li>
                @endauth
            </ul>
        </nav>
    </section>

    <!-- Wszystkie opinie -->
    <section id="main" class="wrapper style2">
        <div class="title">Wszystkie opinie</div>
        <div class="container">
            
            <div class="row">
                @forelse($opinie as $opinia)
                <div class="col-4 col-12-medium">
                    <div class="highlight" style="background: white; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                        <h3 style="color: #e97770; margin-bottom: 0.5rem;">{{ $opinia->nick }}</h3>
                        <div class="stars" style="margin: 0.75rem 0; font-size: 1.1rem;">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $opinia->rating)
                                    <span style="color: #ffb400;">★</span>
                                @else
                                    <span style="color: #ddd;">☆</span>
                                @endif
                            @endfor
                        </div>
                        <p style="color: #666; font-size: 0.9rem; line-height: 1.5; font-style: italic;">"{{ $opinia->content }}"</p>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <p style="text-align: center; font-size: 1.2rem;">Brak opinii do wyświetlenia.</p>
                    </div>
                @endforelse
            </div>

            <div class="custom-pagination">
                @if ($opinie->lastPage() > 1)
                    <div class="pagination-list">
                        <!-- Poprzednia strona -->
                        @if ($opinie->onFirstPage())
                            <span class="page-nav disabled">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $opinie->previousPageUrl() }}" class="page-nav">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif

                        <!-- Numerki stron -->
                        @for ($i = 1; $i <= $opinie->lastPage(); $i++)
                            @if ($i == $opinie->currentPage())
                                <span class="page-number active">{{ $i }}</span>
                            @else
                                <a href="{{ $opinie->url($i) }}" class="page-number">{{ $i }}</a>
                            @endif
                        @endfor

                        <!-- Następna strona -->
                        @if ($opinie->hasMorePages())
                            <a href="{{ $opinie->nextPageUrl() }}" class="page-nav">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <span class="page-nav disabled">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Przycisk powrotu -->
            <div style="text-align: center; margin-top: 2rem;">
                <a href="{{ url('/') }}" class="button style1 large">⬅ Powrót na stronę główną</a>
            </div>

        </div>
    </section>

        <!-- Statystyki -->
        <section id="statistics" class="wrapper style3" style="padding: 3em 0 1em 0;">
            <div class="title">Statystyki opinii</div>
            <div class="container">
                <div class="statistics-grid">
                    
                    <!-- Liczba opinii -->
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <div class="stat-number">{{ $totalOpinions }}</div>
                        <div class="stat-label">Wystawionych opinii</div>
                    </div>
                    
                    <!-- Średnia ocena -->
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number">{{ number_format($averageRating, 1) }}</div>
                        <div class="stat-label">Średnia ocena</div>
                        <div class="stat-stars">
                            @php
                                $fullStars = floor($averageRating);
                                $halfStar = ($averageRating - $fullStars) >= 0.5;
                            @endphp
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $fullStars)
                                    <span class="star-filled">★</span>
                                @elseif($halfStar && $i == $fullStars + 1)
                                    <span class="star-half">½</span>
                                @else
                                    <span class="star-empty">☆</span>
                                @endif
                            @endfor
                        </div>
                    </div>
                    
                    <!-- Zadowoleni użytkownicy -->
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-smile-wink"></i>
                        </div>
                        <div class="stat-number">{{ $satisfiedPercent }}%</div>
                        <div class="stat-label">Zadowolonych użytkowników</div>
                        <div class="stat-progress">
                            <div class="progress-bar" style="width: {{ $satisfiedPercent }}%"></div>
                        </div>
                    </div>

                    <!-- Liczba założonych kont -->
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="stat-number">{{ $totalUsers }}</div>
                        <div class="stat-label">Założonych kont</div>
                        <div class="stat-trend">
                            <i class="fas fa-chart-line"></i> +12% w tym miesiącu
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
		<section id="footer" class="wrapper">
			<div class="title">Kontakt</div>
			<div class="container">
				<header class="style1">
					<h2>Skontaktuj się z nami</h2>
					<p>
						Masz pytanie lub potrzebujesz pomocy? <br />
						Wypełnij formularz – skontaktujemy się z Tobą tak szybko, jak to możliwe.
					</p>
				</header>
				
				<!-- Formularz kontaktowy -->
				<div class="contact-form-wrapper">
					<form method="post" action="https://formspree.io/f/xzdkvegl">
						<div class="row gtr-50">
							<div class="col-6 col-12-small">
								<input type="text" name="name" id="contact-name" placeholder="Imię i nazwisko" required />
							</div>
							<div class="col-6 col-12-small">
								<input type="email" name="email" id="contact-email" placeholder="Email" required />
							</div>
							<div class="col-12">
								<textarea name="message" id="contact-message" placeholder="Wiadomość" rows="4" required></textarea>
							</div>
							<div class="col-12 checkbox-container">
								<label class="checkbox-label">
									<input type="checkbox" name="user_acceptance" value="1" required>
									<span class="checkbox-custom"></span>
									<span class="checkbox-text">Wyrażam zgodę na przetwarzanie danych osobowych w celu przesłania odpowiedzi na mój adres e-mail podany powyżej w formularzu kontaktowym. (Informujemy, że Państwa zgoda może zostać cofnięta w dowolnym momencie przez wysłanie wiadomości e-mail za pomocą niniejszego formularza kontaktowego. Państwa dane nie są przekazywane ani udostępniane osobom trzecim i nie są profilowane).</span>
								</label>
							</div>
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" class="style1" value="Wyślij" /></li>
									<li><input type="reset" class="style2" value="Resetuj" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				
				<div id="copyright">
					<ul>
						<li>Copyright © 2026 Planify. Wszelkie prawa zastrzeżone</li>
					</ul>
				</div>
			</div>
		</section>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
<script src="{{ asset('js/browser.min.js') }}"></script>
<script src="{{ asset('js/breakpoints.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 200);
        });
    });
</script>
@endpush
</body>
</html>