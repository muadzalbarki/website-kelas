@extends('layout.app')

@section('content')
<section class="about-class py-5 fade-in">
    <div class="container text-center">
        <h2 class="text-warning mb-3">About Our Class</h2>
        <p class="text-light mx-auto" style="max-width: 800px;">
            We are the 5th semester students of Information Technology at UIN Salatiga.
            Our class consists of 17 passionate and creative individuals who work together,
            learn together, and aim to grow into professionals in technology and innovation.
        </p>
    </div>
</section>

<section class="student-section py-5">
    <div class="container">
        <div class="row justify-content-center" id="student-list">
            <!-- Konten mahasiswa dari JSON akan muncul di sini -->
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    fetch('/data/students.json')
        .then(res => res.json())
        .then(students => {
            const container = document.getElementById('student-list');
            students.forEach((s, i) => {
                const card = document.createElement('div');
                card.className = 'col-lg-3 col-md-4 col-sm-6 mb-4 fade-in';
                card.style.animationDelay = `${0.1 * i}s`;
                card.innerHTML = `
                    <div class="student-card text-center p-3">
                        <div class="img-wrap mb-3">
                            <img src="${s.img}" alt="${s.name}" onerror="this.src='/images/default-avatar.png'">
                        </div>
                        <h5 class="text-warning">${s.name}</h5>
                        <p class="text-light small">${s.role}</p>
                        <div class="social-icons">
                            <a href="${s.ig}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="${s.github}" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                `;
                container.appendChild(card);
            });
        })
        .catch(err => {
            console.error('Error loading student data:', err);
            document.getElementById('student-list').innerHTML =
                `<p class="text-center text-light">Failed to load student data.</p>`;
        });
});

// Efek dissolve saat scroll
window.addEventListener('scroll', () => {
    document.querySelectorAll('.fade-in').forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 50) {
            el.classList.add('visible');
        } else {
            el.classList.remove('visible');
        }
    });
});
</script>
@endsection
