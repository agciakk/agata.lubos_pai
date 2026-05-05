
    // ===========================================
    // DANE OPINII (nazwa, ocena w gwiazdkach, tekst)
    // ===========================================
    const testimonials = [
        {
            author: "Anna Kowalska",
            rating: 5,  // 1-5
            text: "Planify totalnie zmienił moje podejście do planowania. Wreszcie mam kontrolę nad codziennymi zadaniami. Polecam każdemu!"
        },
        {
            author: "Jan Nowak",
            rating: 4,
            text: "Bardzo intuicyjny planer. Brakuje mi tylko powiadomień, ale poza tym świetne narzędzie do budowania nawyków."
        },
        {
            author: "Magdalena Wiśniewska",
            rating: 5,
            text: "Proste, czytelne i działa. Statystyki pomagają mi zobaczyć realne postępy. Dziękuję za tę aplikację!"
        },
        {
            author: "Tomasz Lewandowski",
            rating: 5,
            text: "W końcu planer, którego faktycznie używam codziennie. Żadnego przekombinowania – tylko to co potrzebne."
        },
        {
            author: "Katarzyna Zielińska",
            rating: 4,
            text: "Bardzo pomocne przy nauce do egzaminów. Plan dnia jest przejrzysty, a zaznaczanie postępów motywuje."
        }
    ];

    let currentIndex = 0;

    // Funkcja do generowania gwiazdek (⭐)
    function renderStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<span class="star-filled">★</span>';
            } else {
                stars += '<span class="star-empty">☆</span>';
            }
        }
        return stars;
    }

    // Funkcja aktualizująca widok opinii
    function updateTestimonial(index) {
        const t = testimonials[index];
        document.getElementById('testimonialAuthor').textContent = t.author;
        document.getElementById('testimonialStars').innerHTML = renderStars(t.rating);
        document.getElementById('testimonialText').textContent = t.text;
    }

    // Obsługa strzałek
    document.getElementById('prevTestimonial').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial(currentIndex);
    });

    document.getElementById('nextTestimonial').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
    });

    // Załaduj pierwszą opinię
    updateTestimonial(0);