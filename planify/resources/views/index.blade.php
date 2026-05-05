<!DOCTYPE HTML>
<html>
	<head>
		<title>Planer zajęć</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Planify - Twój prosty planer zajęć</a></h1>
							<p>Proste narzędzie do planowania dnia, które działa tak, jak Ty.<br>
							   Dodawaj aktywności, zaznaczaj wykonanie i obserwuj swoje postępy.<br>
							   Bez zbędnych funkcji – tylko to, czego potrzebujesz.</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="{{ url('/#features') }}">Plany</a></li>
								<li class="current"><a href="{{ url('/#highlights') }}">Opinie</a></li>
								<li><a href="{{ url('/#footer') }}">Kontakt</a></li>
								@auth
									<li><a href="">Profil</a></li>
									<li><a href="{{ route('logout.get') }}" class="logout-link">Wyloguj</a></li>
								@else
									<li><a href="{{ route('register') }}">Rejestracja</a></li>
									<li><a href="{{ route('login') }}">Zaloguj się</a></li>
								@endauth
							</ul>
						</nav>
				</section>

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">Zacznij planować z Planify</div>
					<div class="container">
						        @auth
									<p class="style1">
										Witaj, {{Auth::user()->nick}}!
									</p>
									<p class="style3" style="font-size: 0.8em; margin-top: -50px; margin-bottom: 10px;">
										Zalogowano jako: 
										<strong>
											@php
												$roles = Auth::user()->roles;
											@endphp
											@if($roles->isNotEmpty())
												{{ $roles->pluck('name')->implode(', ') }}
											@else
												brak
											@endif
										</strong>
									</p>
									<p class="style2">
										Cieszymy się, że jesteś z nami.<br>
										Twój plan czeka na Ciebie.
									</p>
									<ul class="actions">
										<li><a href="" class="button style3 large">Przejdź do swojego planu</a></li>
									</ul>
								@else
									<p class="style1">Planify to najprostszy sposób na organizację codziennych obowiązków.</p>
									<p class="style2">
										Dołącz za darmo do grona zadowolonych użytkowników!<br class="mobile-hide" />
									</p>
									<ul class="actions">
										<li><a href="{{ route('register') }}" class="button style3 large">Stwórz swój plan</a></li>
										<li><a href="#features" class="button style4 large">Jak to działa?</a></li>
									</ul>
								@endauth
								
							</div>
						</section>

			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">Plany</div>
					<div class="container">

						<!-- Image -->
							<a href="" class="image featured">
								<img src="" alt="przykładowy plan tygodnia w Planify" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Jak działa Planify?</h2>
									<p>Planowanie nie musi być skomplikowane. Z Planify szybko, łatwo i wygodnie stworzysz własny plan tygodnia, który pomoże Ci utrzymać porządek i realizować cele.</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-user-plus">Krok 1 – Załóż konto i zaloguj się</h3>
												<p>
													Zacznij od darmowej rejestracji. Po zalogowaniu zyskujesz dostęp do swojego prywatnego planu, który możesz edytować i śledzić swoje postępy. Wszystkie dane są zapisywane tylko dla Ciebie – nikt inny nie ma do nich dostępu. Możesz korzystać z Planify na dowolnym urządzeniu, a Twój plan zawsze będzie czekał na Ciebie po zalogowaniu.
												</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-list-ul">Krok 2 – Stwórz swój plan</h3>
												<p>
													Dodaj aktywności, które chcesz realizować. To Ty decydujesz, co będzie w Twoim planie. Basen, rower, nauka języka, czytanie, medytacja – lista jest nieograniczona. Każda aktywność to osobny wiersz w Twojej tabeli. Możesz w każdej chwili dodać nową, zmienić nazwę lub usunąć tę, która już nie jest Ci potrzebna.
												</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-calendar-alt">Krok 3 – Ustal dni i czas</h3>
												<p>
													Przypisz każdą aktywność do konkretnych dni tygodnia. Nie wszystko musisz realizować każdego dnia. W Planify zaznaczasz, w które dni dana aktywność ma się pojawić w Twoim planie. Basen we wtorki i czwartki? Rower w weekend? Nauka codziennie po 30 minut? Nie ma problemu.
												</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-check">Krok 4 – Zaznaczaj postępy</h3>
												<p>
													Zaznaczaj, gdy zadanie jest zrealizowane. Każdego dnia otwierasz swój plan i jednym kliknięciem zaznaczasz, co udało Ci się zrobić. Zielony tick to Twój mały sukces – potwierdzenie, że idziesz do przodu. Czerwony cross nie jest porażką, tylko informacją zwrotną. To proste narzędzie, które pomaga budować systematyczność i świadomie kształtować swoje nawyki.
												</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-chart-bar">Krok 5 – Obserwuj swoje statystyki</h3>
												<p>
													Sprawdzaj, jak regularnie realizujesz swoje cele. Każdy tick i cross to część Twojej historii. Planify zbiera te dane i pokazuje je w formie prostych statystyk, wykresów i podsumowań tygodniowych. Dzięki nim wiesz, które aktywności już masz w nawyku, a które wymagają Twojej uwagi. To nie tylko dane – to Twoja mapa postępów, która motywuje do dalszego działania.
												</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-history">Krok 6 – Wracaj do historii</h3>
												<p>
													Przeglądaj minione tygodnie i analizuj swoją konsekwencję. Planify zapisuje każdy dzień, każdy tick i cross. Możesz wrócić do dowolnego tygodnia z przeszłości i zobaczyć, jak wyglądała Twoja realizacja. To świetny sposób, żeby śledzić rozwój swoich nawyków i motywować się do dalszej pracy.
												</p>
											</section>
										</div>
									</div>
								</div>
								@auth
									<ul class="actions special">
										<li><a href="" class="button style1 large">Przejdź do swojego planu</a></li>
									</ul>
								@else
									<ul class="actions special">
										<li><a href="" class="button style1 large">Stwórz swój plan</a></li>
									</ul>
								@endauth
							</section>

					</div>
				</section>

			<!-- Highlights / Opinie -->
			<section id="highlights" class="wrapper style3">
				<div class="title">Opinie</div>
				<div class="container">
					@if(session('success'))
						<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 0.5rem; margin-bottom: 2rem; text-align: center;">
							{{ session('success') }}
						</div>
					@endif
					
					<!-- Istniejące opinie -->
					<div class="row" id="opinieList">
						@foreach($opinie as $opinia)
						<div class="col-4 col-12-medium">
							<div class="highlight" style="background: white; border-radius: 1rem; padding: 1.5rem;">
								<h3>{{ $opinia->nick }}</h3>
								<div class="stars" style="margin: 0.75rem 0;">
									@for($i=1; $i<=5; $i++)
										@if($i <= $opinia->rating)
											<span style="color:#ffb400">★</span>
										@else
											<span style="color:#ddd">☆</span>
										@endif
									@endfor
								</div>
								<p style="color: #666; font-style: italic;">"{{ $opinia->content }}"</p>
							</div>
						</div>
						@endforeach
					</div>
					
					<!-- FORMULARZ DODAWANIA OPINII (ukryty) -->
					<div id="opinionForm" style="display: none; margin-top: 2rem; padding: 2rem; background: white; border-radius: 1rem; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
						<h3 style="text-align: center; color: #e97770; margin-bottom: 1.5rem;">Dodaj swoją opinię</h3>
						
						@if($errors->any())
							<div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 0.5rem; margin-bottom: 1rem;">
								<ul style="margin: 0; padding-left: 1.5rem;">
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						
						<form action="{{ route('opinie.store') }}" method="POST" id="addOpinionForm">
							@csrf
							
							<!-- Ocena w gwiazdkach -->
							<div style="text-align: center; margin-bottom: 1.5rem;">
								<label style="display: block; margin-bottom: 0.8rem; font-weight: 600;">Twoja ocena</label>
								<div class="rating-stars" style="display: flex; justify-content: center; gap: 0.5rem; direction: rtl;">
									<input type="radio" id="star5" name="rating" value="5" required>
									<label for="star5" title="5 gwiazdek">★</label>
									<input type="radio" id="star4" name="rating" value="4" required>
									<label for="star4" title="4 gwiazdki">★</label>
									<input type="radio" id="star3" name="rating" value="3" required>
									<label for="star3" title="3 gwiazdki">★</label>
									<input type="radio" id="star2" name="rating" value="2" required>
									<label for="star2" title="2 gwiazdki">★</label>
									<input type="radio" id="star1" name="rating" value="1" required>
									<label for="star1" title="1 gwiazdka">★</label>
								</div>
							</div>
							
							<!-- Treść opinii -->
							<div style="margin-bottom: 1.5rem;">
								<textarea name="content" rows="4" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 0.5rem; font-family: inherit;" placeholder="Napisz swoją opinię..."></textarea>
							</div>
							
							<!-- Przyciski -->
							<div style="display: flex; justify-content: center; gap: 1rem;">
								<button type="submit" class="button style1">Wyślij opinię</button>
								<button type="button" class="button style2" id="cancelOpinionBtn">Anuluj</button>
							</div>
						</form>
					</div>
					
					<!-- Przyciski akcji -->
					<div style="text-align: center; margin-top: 2rem;">
						@auth
							<button id="showOpinionFormBtn" class="button style1 large">Dodaj opinie</button>
							<a href="{{ route('opinie.wszystkie') }}" class="button style4 large">Czytaj więcej</a>
						@else
							<a href="{{ route('opinie.wszystkie') }}" class="button style4 large">Czytaj więcej</a>
						@endauth
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
		<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showFormBtn = document.getElementById('showOpinionFormBtn');
        const opinionForm = document.getElementById('opinionForm');
        const cancelBtn = document.getElementById('cancelOpinionBtn');
        
        if (showFormBtn) {
            showFormBtn.addEventListener('click', function() {
                opinionForm.style.display = 'block';
                // Przewiń do formularza
                opinionForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        }
        
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function() {
                opinionForm.style.display = 'none';
                // Wyczyść formularz
                document.getElementById('addOpinionForm').reset();
            });
        }
        
        // Jeśli są błędy walidacji, pokaż formularz
        @if($errors->any())
            opinionForm.style.display = 'block';
        @endif
    });
</script>
	</body>
</html>